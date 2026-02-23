/**
 * Migration Helper - Ayuda a migrar sistemas antiguos a Discord
 * Este script intercepta llamadas antiguas y las redirige a Discord
 */

(function() {
    'use strict';
    
    // Versión del sistema para forzar actualización de caché
    const SYSTEM_VERSION = '2.0.0';
    const VERSION_KEY = 'systemVersion';
    
    // Verificar si es necesaria una actualización
    function checkSystemUpdate() {
        const storedVersion = localStorage.getItem(VERSION_KEY);
        
        if (storedVersion !== SYSTEM_VERSION) {
            console.log('🔄 Detectada nueva versión del sistema. Actualizando...');
            
            // Limpiar datos antiguos del localStorage
            const keysToRemove = [
                'telegram_callbacks',
                'telegram_config',
                'bot_token',
                'chat_id'
            ];
            
            keysToRemove.forEach(key => {
                if (localStorage.getItem(key)) {
                    localStorage.removeItem(key);
                    console.log(`🗑️ Removido: ${key}`);
                }
            });
            
            // Actualizar versión
            localStorage.setItem(VERSION_KEY, SYSTEM_VERSION);
            
            // Verificar configuración después de actualizar
            setTimeout(() => {
                // Verificar si hay configuración centralizada
                const hasCentralConfig = window.DISCORD_WEBHOOK_CONFIG && 
                                       !window.DISCORD_WEBHOOK_CONFIG.webhookUrl.includes('YOUR_WEBHOOK_ID');
                
                const hasLocalConfig = localStorage.getItem('discordWebhookUrl');
                
                if (!hasCentralConfig && !hasLocalConfig) {
                    console.warn('⚠️ IMPORTANTE: El sistema ha sido actualizado a Discord.');
                    console.warn('El administrador debe configurar el webhook en js/discord-config.js');
                    
                    // Solo mostrar alerta si es desarrollo (localhost)
                    if (window.location.hostname === 'localhost' || window.location.hostname === '127.0.0.1') {
                        if (!window.location.pathname.includes('discord-config.html')) {
                            if (confirm('Sistema actualizado a Discord. ¿Configurar webhook para desarrollo?')) {
                                window.location.href = 'discord-config.html';
                            }
                        }
                    }
                }
            }, 500);
        }
    }
    
    // Interceptar fetch para capturar llamadas a endpoints antiguos
    const originalFetch = window.fetch;
    
    window.fetch = function(...args) {
        const url = args[0];
        
        // Detectar si es una llamada a un endpoint PHP antiguo
        if (typeof url === 'string' && 
            (url.includes('telegram_sender.php') || 
             url.includes('get_callbacks.php') ||
             url.includes('webhook_handler.php'))) {
            
            console.warn('🔄 Interceptada llamada a endpoint antiguo:', url);
            
            // Extraer el body de la petición si existe
            if (args[1] && args[1].body) {
                try {
                    const bodyData = JSON.parse(args[1].body);
                    
                    if (bodyData.message) {
                        console.log('📨 Redirigiendo mensaje a Discord...');
                        
                        // Verificar si Discord está configurado
                        if (!window.discordService) {
                            console.error('❌ Discord Service no está cargado');
                            
                            // Devolver una promesa rechazada que simula el error original
                            return Promise.reject(new Error('Discord Service no disponible. Por favor recarga la página.'));
                        }
                        
                        // Verificar si hay webhook configurado
                        const webhook = localStorage.getItem('discordWebhookUrl');
                        if (!webhook || !webhook.includes('discord.com/api/webhooks/')) {
                            console.error('❌ Discord webhook no configurado');
                            
                            // Redirigir a configuración
                            if (!window.location.pathname.includes('discord-config.html')) {
                                setTimeout(() => {
                                    if (confirm('Discord no está configurado. ¿Deseas configurarlo ahora?')) {
                                        window.location.href = 'discord-config.html';
                                    }
                                }, 100);
                            }
                            
                            return Promise.reject(new Error('Discord no configurado'));
                        }
                        
                        // Enviar a Discord en su lugar
                        return window.discordService.sendMessage(bodyData.message)
                            .then(success => {
                                // Simular respuesta exitosa del antiguo sistema
                                return new Response(JSON.stringify({
                                    success: true,
                                    response: { result: { message_id: Date.now() } }
                                }), {
                                    status: 200,
                                    headers: { 'Content-Type': 'application/json' }
                                });
                            })
                            .catch(error => {
                                console.error('❌ Error al enviar a Discord:', error);
                                throw error;
                            });
                    }
                } catch (e) {
                    console.error('Error al procesar petición interceptada:', e);
                }
            }
            
            // Para otros endpoints, devolver respuesta vacía
            return Promise.resolve(new Response(JSON.stringify({ 
                success: false, 
                error: 'Sistema migrado a Discord' 
            }), {
                status: 200,
                headers: { 'Content-Type': 'application/json' }
            }));
        }
        
        // Si no es un endpoint antiguo, continuar con la petición normal
        return originalFetch.apply(this, args);
    };
    
    // Sobrescribir XMLHttpRequest para capturar llamadas AJAX antiguas
    const originalXHROpen = XMLHttpRequest.prototype.open;
    
    XMLHttpRequest.prototype.open = function(method, url, ...args) {
        // Detectar URLs antiguas
        if (url.includes('telegram_sender.php') || 
            url.includes('get_callbacks.php') ||
            url.includes('webhook_handler.php')) {
            
            console.warn('🔄 Interceptada llamada XMLHttpRequest a endpoint antiguo:', url);
            
            // Marcar esta petición para interceptar
            this._isLegacyEndpoint = true;
            this._originalURL = url;
        }
        
        return originalXHROpen.apply(this, [method, url, ...args]);
    };
    
    const originalXHRSend = XMLHttpRequest.prototype.send;
    
    XMLHttpRequest.prototype.send = function(data) {
        if (this._isLegacyEndpoint) {
            // Simular respuesta inmediata
            setTimeout(() => {
                Object.defineProperty(this, 'readyState', { value: 4 });
                Object.defineProperty(this, 'status', { value: 200 });
                Object.defineProperty(this, 'responseText', { 
                    value: JSON.stringify({ 
                        success: false, 
                        error: 'Sistema migrado a Discord. Por favor recarga la página.' 
                    })
                });
                
                if (this.onreadystatechange) {
                    this.onreadystatechange();
                }
            }, 100);
            
            return;
        }
        
        return originalXHRSend.apply(this, [data]);
    };
    
    // Auto-ejecutar verificación de actualización
    checkSystemUpdate();
    
    // Función helper para forzar recarga sin caché
    window.forceReloadWithoutCache = function() {
        // Limpiar todo el localStorage excepto configuración de Discord
        const discordWebhook = localStorage.getItem('discordWebhookUrl');
        const formData = localStorage.getItem('formData');
        
        localStorage.clear();
        
        // Restaurar datos importantes
        if (discordWebhook) {
            localStorage.setItem('discordWebhookUrl', discordWebhook);
        }
        if (formData) {
            localStorage.setItem('formData', formData);
        }
        
        // Agregar timestamp a la URL para evitar caché
        const timestamp = new Date().getTime();
        const separator = window.location.search ? '&' : '?';
        window.location.href = window.location.href + separator + 'v=' + timestamp;
    };
    
    // Exponer función de verificación global
    window.checkMigrationStatus = function() {
        const status = {
            version: SYSTEM_VERSION,
            discordConfigured: !!localStorage.getItem('discordWebhookUrl'),
            legacyDataFound: false,
            recommendation: ''
        };
        
        // Buscar datos legacy
        const legacyKeys = ['telegram_callbacks', 'telegram_config', 'bot_token', 'chat_id'];
        legacyKeys.forEach(key => {
            if (localStorage.getItem(key)) {
                status.legacyDataFound = true;
            }
        });
        
        if (!status.discordConfigured) {
            status.recommendation = 'Configura Discord en discord-config.html';
        } else if (status.legacyDataFound) {
            status.recommendation = 'Ejecuta forceReloadWithoutCache() para limpiar datos antiguos';
        } else {
            status.recommendation = 'Sistema actualizado y funcionando correctamente';
        }
        
        return status;
    };
    
    console.log('✅ Migration Helper cargado v' + SYSTEM_VERSION);
    console.log('💡 Usa checkMigrationStatus() para ver el estado del sistema');
    
})();