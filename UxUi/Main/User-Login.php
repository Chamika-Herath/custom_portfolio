    <?php
    include_once '../../imports/need/session_setup.php';
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Portal | Login</title>
        <link rel="icon" type="image/png" href="https://www.svgrepo.com/show/373594/favicon.svg">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <style>
            :root {
                /* Binding legacy tokens to new global variables injected by Meta_Tag.php */
                --primary: var(--primary, #d1b88e);
                --primary-glow: rgba(212, 188, 143, 0.4);
                --gradient: linear-gradient(135deg, var(--primary) 0%, rgba(212, 188, 143, 0.6) 100%);
                --bg-main-local: var(--bg-main, #163022);
                --bg-card: rgba(255, 255, 255, 0.03);
                --bg-card-hover: rgba(255, 255, 255, 0.06);
                --text-main: var(--text-main, #ffffff);
                --text-dim: rgba(255, 255, 255, 0.5);
                --border-main: rgba(212, 188, 143, 0.2);
            }

            * { margin: 0; padding: 0; box-sizing: border-box; }

            body {
                font-family: 'Outfit', 'Inter', system-ui, -apple-system, sans-serif;
                background: var(--bg-main-local);
                color: var(--text-main);
                line-height: 1.5;
                min-height: 100vh;
                display: flex;
                flex-direction: column;
            }

            .erp-container {
                width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 16px;
                margin-top: 100px; margin-bottom: 60px; flex: 1; display: flex;
                align-items: center; justify-content: center;
            }
            .erp-container--login { max-width: 480px; }

            .erp-login-card {
                width: 100%;
                background-color: rgba(10, 12, 18, 0.85);
                backdrop-filter: blur(25px); -webkit-backdrop-filter: blur(25px);
                border: 1px solid var(--border-main); border-radius: 24px;
                box-shadow: 0 40px 80px rgba(0, 0, 0, 0.8), 0 0 40px rgba(56, 189, 248, 0.05);
                position: relative; overflow: hidden;
            }

            .erp-login-card::before {
                content: ''; position: absolute; top: 0; left: 0; right: 0; height: 2px;
                background: var(--gradient);
            }

            .erp-login-card__header { padding: 40px 40px 20px; text-align: center; }
            .erp-login-card__title { font-size: 26px; font-weight: 800; color: var(--primary, #d1b88e); margin-bottom: 5px; letter-spacing: -0.5px; }
            .erp-login-card__subtitle { font-size: 14px; color: var(--text-dim); }

            .erp-login-card__body { padding: 20px 40px 40px; }

            .erp-form { width: 100%; }
            .erp-form__group { margin-bottom: 24px; }
            .erp-form__label { display: block; margin-bottom: 8px; font-size: 12px; font-weight: 700; color: var(--text-dim); text-transform: uppercase; letter-spacing: 1px; }

            .erp-input-wrapper { position: relative; }
            
            .erp-form__control {
                width: 100%; padding: 14px 16px; background: rgba(0, 0, 0, 0.4);
                border: 1px solid var(--border-main); border-radius: 12px;
                font-size: 15px; color: #fff; transition: 0.3s;
            }
            .erp-form__control::placeholder { color: rgba(255,255,255,0.2); }
            .erp-form__control:hover { border-color: rgba(255,255,255,0.2); }
            .erp-form__control:focus { outline: none; border-color: var(--primary); box-shadow: 0 0 15px var(--primary-glow); background: rgba(0,0,0,0.6); }

            .erp-form__control--with-icon { padding-left: 48px; }
            .erp-form__control--with-toggle { padding-right: 48px; }

            .erp-form__icon { position: absolute; left: 18px; top: 50%; transform: translateY(-50%); color: var(--primary); opacity: 0.8; font-size: 16px; }
            .erp-form__toggle { position: absolute; right: 18px; top: 50%; transform: translateY(-50%); color: var(--text-dim); cursor: pointer; transition: 0.3s; font-size: 16px; }
            .erp-form__toggle:hover { color: var(--primary); }

            .erp-form__hint { display: block; margin-top: 8px; font-size: 12px; color: var(--text-dim); opacity: 0.7; }

            .erp-btn {
                display: inline-flex; align-items: center; justify-content: center;
                padding: 14px 24px; border: none; border-radius: 12px;
                font-size: 15px; font-weight: 700; cursor: pointer; transition: 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275); gap: 10px;
                text-decoration: none;
            }
            .erp-btn--block { width: 100%; }

            .erp-btn--primary { background: var(--gradient); color: #fff; box-shadow: 0 10px 20px var(--primary-glow); }
            .erp-btn--primary:hover { transform: translateY(-2px); box-shadow: 0 15px 30px var(--primary-glow); }

            .erp-btn--google, .erp-btn--microsoft, .erp-btn--secondary { background: var(--bg-card); color: #fff; border: 1px solid var(--border-main); }
            .erp-btn--google:hover, .erp-btn--microsoft:hover, .erp-btn--secondary:hover { background: var(--bg-card-hover); border-color: var(--primary); transform: translateY(-2px); box-shadow: 0 5px 15px var(--primary-glow); }

            .erp-social-login__icon--google { color: #ea4335; }
            .erp-social-login__icon--microsoft { color: #00a4ef; }

            .erp-social-login { display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px; }

            .erp-divider { display: flex; align-items: center; margin: 30px 0; }
            .erp-divider__line { flex: 1; height: 1px; background: var(--border-main); }
            .erp-divider__text { padding: 0 16px; color: var(--text-dim); font-size: 12px; font-weight: 600; text-transform: uppercase; letter-spacing: 1px; }

            .erp-mt-lg { margin-top: 24px; }
            .erp-mt-md { margin-top: 16px; }
            .erp-mt-xl { margin-top: 32px; }
            .erp-mb-sm { margin-bottom: 12px; }
            .erp-text-center { text-align: center; }

            .erp-link { color: var(--primary); text-decoration: none; transition: 0.3s; }
            .erp-link:hover { color: #fff; text-shadow: 0 0 10px var(--primary-glow); }
            .erp-text-sm { font-size: 14px; }
            .erp-text-tertiary { color: var(--text-dim); }

            .erp-login-card__footer { padding: 20px 40px; background: rgba(0,0,0,0.4); border-top: 1px solid var(--border-main); text-align: center; }
            .erp-footer__copyright { font-size: 12px; color: var(--text-dim); }

            @media (max-width: 640px) {
                .erp-login-card__header, .erp-login-card__body { padding: 30px 20px; }
                .erp-login-card__footer { padding: 15px 20px; }
                .erp-social-login { grid-template-columns: 1fr; }
            }
        </style>
    </head>

    <body>

        <!-- DB included part  -->
        <?php
        include_once '../../imports/Company_Info/Company_Info_Variable_List.php';
        include_once '../../View-List/Main/Google-Login/Main_User_Google_Login_Config.php';
        include_once '../../View-List/Main/Microsoft-Login/Main_User_Microsoft_Login_Config.php';
        include_once '../../UxUI-Back/Common/header.php';
        ?>


        <?php
        include_once '../../UxUI-Back/Main/Main_User_Login/JS/User_Login_A_01_JS.php';
        include_once '../../UxUI-Back/Main/Main_User_Login/User_Login_A_01.php';
        ?>
        <?php include_once '../../UxUI-Back/Common/footer.php'; ?>
    </body>

    </html>