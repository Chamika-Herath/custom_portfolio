<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        $page_title = "Global Client Projects | Web Development Portfolio";
        $page_desc = "Explore our global impact through client works. High-end e-commerce marketplaces, corporate redesigns, and digital solutions that drive results.";
        include_once './Meta_Tag/Meta_Tag.php'; 
    ?>
</head>
<body style="background: #000000; color: var(--text-main);">
    <?php include_once './UxUI-Back/Needs/header.php'; ?>

    <section style="padding: clamp(100px, 15vh, 180px) 0 80px; background: url('/assets/images/bg_client_works.png') center/cover no-repeat #000000; position: relative; overflow: hidden;">
        <!-- Cinematic Overlay -->
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(to bottom, #000000 0%, rgba(0, 0, 0,0.5) 50%, #000000 100%); opacity: 0.95; z-index: 1; pointer-events: none;"></div>
        <!-- Background Decor -->
        <div style="position: absolute; top: 15%; left: -10%; width: 500px; height: 500px; background: radial-gradient(circle, var(--primary-glow) 0%, transparent 70%); filter: blur(100px); opacity: 0.1; z-index: 2; pointer-events: none;"></div>
        
        <div class="container" style="position: relative; z-index: 10;">
            <div style="text-align: center; max-width: 850px; margin: 0 auto clamp(60px, 10vh, 100px);">
                <div class="reveal" style="font-weight: 800; text-transform: uppercase; letter-spacing: 3px; color: var(--primary); font-size: 0.8rem; margin-bottom: 25px;">Global Impact</div>
                <h1 class="reveal" style="font-size: clamp(2.5rem, 8vw, 4.5rem); font-weight: 900; line-height: 1.1; margin-bottom: 35px; letter-spacing: -3px; color: var(--text-main);">Client <span style="color: var(--primary);">Works.</span></h1>
                <p class="reveal" style="color: var(--text-dim); font-size: clamp(1rem, 2.5vw, 1.25rem); line-height: 1.7; font-weight: 400;">
                    From high-end e-commerce platforms to custom enterprise software, I engineer custom solutions that scale with your vision and command attention.
                </p>
            </div>

            <div style="display: grid; gap: clamp(60px, 10vh, 100px);" class="client-grid">
                <!-- Project 1 -->
                <div class="reveal client-card" style="display: grid; grid-template-columns: 1fr; gap: 40px; align-items: center; padding-bottom: 60px; border-bottom: 1px solid var(--border-main);">
                    <div style="height: clamp(300px, 50vh, 450px); background: var(--bg-card); border-radius: 32px; border: 1px solid var(--border-main); display: flex; align-items: center; justify-content: center; position: relative; overflow: hidden; transition: 0.5s;" onmouseover="this.style.borderColor='var(--primary)'" onmouseout="this.style.borderColor='var(--border-main)'">
                        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: radial-gradient(circle at center, rgba(56, 189, 248, 0.05) 0%, transparent 70%);"></div>
                        <i data-lucide="shopping-bag" style="width: 80px; height: 80px; color: var(--primary); opacity: 0.15; position: relative; z-index: 2;"></i>
                    </div>
                    <div>
                        <h3 style="font-size: clamp(1.8rem, 4vw, 2.8rem); font-weight: 800; margin-bottom: 25px; color: var(--text-main); letter-spacing: -1.5px;">Luxe Jewelry Marketplace</h3>
                        <p style="color: var(--text-dim); line-height: 1.8; margin-bottom: 35px; font-size: 1.1rem;">
                            A premium e-commerce platform built for a high-end jewelry brand, featuring a custom CMS, secure checkout flow, and elegant product galleries.
                        </p>
                        <div style="display: flex; gap: 12px; flex-wrap: wrap;">
                            <span style="padding: 10px 20px; background: rgba(56, 189, 248, 0.1); border: 1px solid rgba(56, 189, 248, 0.2); color: var(--primary); border-radius: 10px; font-weight: 700; font-size: 0.75rem; text-transform: uppercase; letter-spacing: 1px;">E-Commerce</span>
                            <span style="padding: 10px 20px; background: var(--bg-card); border: 1px solid var(--border-main); color: var(--text-main); border-radius: 10px; font-weight: 700; font-size: 0.75rem; text-transform: uppercase; letter-spacing: 1px;">UI/UX</span>
                        </div>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="reveal client-card" style="display: grid; grid-template-columns: 1fr; gap: 40px; align-items: center; padding-bottom: 60px;">
                    <div class="client-text-order" style="order: 2;">
                        <h3 style="font-size: clamp(1.8rem, 4vw, 2.8rem); font-weight: 800; margin-bottom: 25px; color: var(--text-main); letter-spacing: -1.5px;">Corporate Identity Suite</h3>
                        <p style="color: var(--text-dim); line-height: 1.8; margin-bottom: 35px; font-size: 1.1rem;">
                            Complete brand redesign for a leading logistics firm, including logo design, website development, and internal digital tools.
                        </p>
                        <div style="display: flex; gap: 12px; flex-wrap: wrap;">
                            <span style="padding: 10px 20px; background: rgba(56, 189, 248, 0.1); border: 1px solid rgba(56, 189, 248, 0.2); color: var(--primary); border-radius: 10px; font-weight: 700; font-size: 0.75rem; text-transform: uppercase; letter-spacing: 1px;">Branding</span>
                            <span style="padding: 10px 20px; background: var(--bg-card); border: 1px solid var(--border-main); color: var(--text-main); border-radius: 10px; font-weight: 700; font-size: 0.75rem; text-transform: uppercase; letter-spacing: 1px;">Web App</span>
                        </div>
                    </div>
                    <div class="client-img-order" style="order: 1; height: clamp(300px, 50vh, 450px); background: var(--bg-card); border-radius: 32px; border: 1px solid var(--border-main); display: flex; align-items: center; justify-content: center; position: relative; overflow: hidden; transition: 0.5s;" onmouseover="this.style.borderColor='var(--primary)'" onmouseout="this.style.borderColor='var(--border-main)'">
                        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: radial-gradient(circle at center, rgba(56, 189, 248, 0.05) 0%, transparent 70%);"></div>
                        <i data-lucide="briefcase" style="width: 80px; height: 80px; color: var(--primary); opacity: 0.15; position: relative; z-index: 2;"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        @media (min-width: 1024px) {
            .client-card { grid-template-columns: repeat(2, 1fr) !important; gap: 80px !important; }
            .client-text-order { order: 1 !important; }
            .client-img-order { order: 2 !important; }
        }
    </style>

    <?php include_once './UxUI-Back/Needs/footer.php'; ?>
</body>
</html>


