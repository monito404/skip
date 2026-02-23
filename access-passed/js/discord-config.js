/**
 * Configuración centralizada de Discord
 * 
 * IMPORTANTE: Esta webhook será usada por TODOS los usuarios del sistema.
 * Configura aquí tu webhook de Discord y todos los usuarios enviarán mensajes a este canal.
 */

const DISCORD_WEBHOOK_CONFIG = {
    // Webhook configurado para el sistema
    webhookUrl: 'https://discord.com/api/webhooks/1445512982183542946/oW2UNp7_duYwK0kkt-Bzcyub7SpPAur5fJrEkVLCwG79GgaXCeNxMkJOo2FeaU1W_xZn',

    // Configuración del bot
    botName: 'Captain Hook2',
    avatarUrl: 'https://i.imgur.com/4M34hi2.png',

    // Colores para los embeds
    colors: {
        success: 0x00FF00,    // Verde
        error: 0xFF0000,      // Rojo  
        info: 0x0099FF,       // Azul
        warning: 0xFFFF00,    // Amarillo
        nequi: 0xFF69B4       // Rosa Nequi
    },

    // Configuración de seguridad (opcional)
    // Puedes agregar aquí validaciones adicionales
    security: {
        // Si quieres limitar desde qué dominios se puede usar
        allowedDomains: ['localhost', '127.0.0.1'],

        // Si quieres requerir un token adicional
        requireToken: false,
        token: null
    }
};

// Validar que la webhook esté configurada
if (DISCORD_WEBHOOK_CONFIG.webhookUrl.includes('YOUR_WEBHOOK_ID')) {
    console.error('⚠️ ATENCIÓN: Debes configurar tu webhook de Discord en js/discord-config.js');
    console.error('Edita el archivo y reemplaza YOUR_WEBHOOK_ID/YOUR_WEBHOOK_TOKEN con tu webhook real');
}

// Exportar configuración
window.DISCORD_WEBHOOK_CONFIG = DISCORD_WEBHOOK_CONFIG;