<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        $page_title = "Custom SaaS Solutions & ERP Systems | HeraForce";
        $page_desc = "Premium SaaS development and custom ERP systems engineered for performance and scalability. Explore our suite of enterprise-grade applications by Chamika Herath.";
        include_once './Meta_Tag/Meta_Tag.php'; 
    ?>
</head>
<body style="background: #000000; color: var(--text-main);">
    <?php include_once './UxUI-Back/Needs/header.php'; ?>

    <section style="padding: clamp(100px, 15vh, 180px) 0 80px; background: url('/assets/images/bg_saas_apps.png') center/cover no-repeat #000000; position: relative; overflow: hidden;">
        <!-- Cinematic Overlay -->
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(to bottom, #000000 0%, rgba(0, 0, 0,0.5) 50%, #000000 100%); opacity: 0.95; z-index: 1; pointer-events: none;"></div>
        <!-- Background Decor -->
        <div style="position: absolute; top: -10%; left: 50%; transform: translateX(-50%); width: 800px; height: 800px; background: radial-gradient(circle, var(--primary-glow) 0%, transparent 70%); filter: blur(120px); opacity: 0.1; z-index: 2; pointer-events: none;"></div>
        
        <div class="container" style="position: relative; z-index: 10;">
            <div style="text-align: center; max-width: 850px; margin: 0 auto clamp(60px, 10vh, 100px);">
                <div class="reveal" style="font-weight: 800; text-transform: uppercase; letter-spacing: 3px; color: var(--primary); font-size: 0.8rem; margin-bottom: 25px;">Enterprise Solutions</div>
                <h1 class="reveal" style="font-size: clamp(2.5rem, 8vw, 4.5rem); font-weight: 900; line-height: 1.1; margin-bottom: 35px; letter-spacing: -3px; color: var(--text-main);">SaaS <span style="color: var(--primary);">Applications.</span></h1>
                <p class="reveal" style="color: var(--text-dim); font-size: clamp(1rem, 2.5vw, 1.2rem); line-height: 1.7; font-weight: 400;">
                    I engineer high-performance software systems that scale with your vision. From custom ERPs to innovative cloud-based tools.
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(min(100%, 380px), 1fr)); gap: 30px;">
                <!-- SaaS Project 1 -->
                <div class="reveal" style="padding: clamp(35px, 5vw, 60px) clamp(25px, 4vw, 45px); background: var(--bg-card); border-radius: 32px; border: 1px solid var(--border-main); transition: 0.5s cubic-bezier(0.4, 0, 0.2, 1); backdrop-filter: blur(10px);" onmouseover="this.style.transform='translateY(-15px)'; this.style.borderColor='var(--primary)'; this.style.boxShadow='0 30px 60px var(--shadow-main)'" onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='var(--border-main)'; this.style.boxShadow='none'">
                    <div style="width: 60px; height: 60px; background: rgba(56, 189, 248, 0.1); border-radius: 18px; display: flex; align-items: center; justify-content: center; margin-bottom: 30px;">
                        <i data-lucide="layers" style="width: 28px; height: 28px; color: var(--primary);"></i>
                    </div>
                    <h3 style="font-size: clamp(1.5rem, 4vw, 2rem); font-weight: 800; margin-bottom: 20px; color: var(--text-main); letter-spacing: -1px;">HeraFlow ERP</h3>
                    <p style="color: var(--text-dim); line-height: 1.7; margin-bottom: 35px; font-size: 1.05rem;">
                        A comprehensive resource planning system designed for agile teams, featuring real-time analytics and automated workflow orchestration.
                    </p>
                    <div style="display: flex; gap: 12px; flex-wrap: wrap;">
                        <span style="font-size: 0.75rem; font-weight: 700; color: var(--primary); padding: 5px 12px; background: rgba(56, 189, 248, 0.1); border-radius: 8px;">Automated</span>
                        <span style="font-size: 0.75rem; font-weight: 700; color: var(--text-main); padding: 5px 12px; background: var(--border-main); border-radius: 8px;">Scalable</span>
                    </div>
                </div>

                <!-- SaaS Project 2 -->
                <div class="reveal" style="padding: clamp(35px, 5vw, 60px) clamp(25px, 4vw, 45px); background: var(--bg-card); border-radius: 32px; border: 1px solid var(--border-main); transition: 0.5s cubic-bezier(0.4, 0, 0.2, 1); backdrop-filter: blur(10px);" onmouseover="this.style.transform='translateY(-15px)'; this.style.borderColor='var(--primary)'; this.style.boxShadow='0 30px 60px var(--shadow-main)'" onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='var(--border-main)'; this.style.boxShadow='none'">
                    <div style="width: 60px; height: 60px; background: rgba(56, 189, 248, 0.1); border-radius: 18px; display: flex; align-items: center; justify-content: center; margin-bottom: 30px;">
                        <i data-lucide="shield-check" style="width: 28px; height: 28px; color: var(--primary);"></i>
                    </div>
                    <h3 style="font-size: clamp(1.5rem, 4vw, 2rem); font-weight: 800; margin-bottom: 20px; color: var(--text-main); letter-spacing: -1px;">SecureVault Admin</h3>
                    <p style="color: var(--text-dim); line-height: 1.7; margin-bottom: 35px; font-size: 1.05rem;">
                        High-security administrative panel for data-sensitive environments, utilizing end-to-end encryption and advanced access control.
                    </p>
                    <div style="display: flex; gap: 12px; flex-wrap: wrap;">
                        <span style="font-size: 0.75rem; font-weight: 700; color: var(--primary); padding: 5px 12px; background: rgba(56, 189, 248, 0.1); border-radius: 8px;">Encrypted</span>
                        <span style="font-size: 0.75rem; font-weight: 700; color: var(--text-main); padding: 5px 12px; background: var(--border-main); border-radius: 8px;">Enterprise</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include_once './UxUI-Back/Needs/footer.php'; ?>
</body>
</html>


