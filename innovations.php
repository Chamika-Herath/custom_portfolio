<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        $page_title = "Digital Innovations | AI & Generative Design | HeraForce";
        $page_desc = "Explore the future of digital experiences. From AI-assisted design to high-performance architectures, see how HeraForce is pushing the boundaries of innovation.";
        include_once './Meta_Tag/Meta_Tag.php'; 
    ?>
</head>
<body style="background: #000000; color: var(--text-main);">
    <?php include_once './UxUI-Back/Needs/header.php'; ?>

    <section style="padding: clamp(100px, 15vh, 180px) 0 80px; background: url('/assets/images/bg_innovations.png') center/cover no-repeat #000000; position: relative; overflow: hidden;">
        <!-- Cinematic Overlay -->
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(to bottom, #000000 0%, rgba(0, 0, 0,0.5) 50%, #000000 100%); opacity: 0.95; z-index: 1; pointer-events: none;"></div>
        <!-- Background Decor -->
        <div style="position: absolute; top: 10%; right: -5%; width: 500px; height: 500px; background: radial-gradient(circle, var(--primary-glow) 0%, transparent 70%); filter: blur(100px); opacity: 0.15; z-index: 2; pointer-events: none;"></div>
        
        <div class="container" style="position: relative; z-index: 10;">
            <div style="text-align: center; max-width: 850px; margin: 0 auto clamp(60px, 10vh, 100px);">
                <div class="reveal" style="font-weight: 800; text-transform: uppercase; letter-spacing: 3px; color: var(--primary); font-size: 0.8rem; margin-bottom: 25px;">Future Forward</div>
                <h1 class="reveal" style="font-size: clamp(2.5rem, 8vw, 4.5rem); font-weight: 900; line-height: 1.1; margin-bottom: 35px; letter-spacing: -3px; color: var(--text-main);">Innovations.</h1>
                <p class="reveal" style="color: var(--text-dim); font-size: clamp(1rem, 2.5vw, 1.2rem); line-height: 1.7; font-weight: 400;">
                    Pushing the boundaries of what's possible in the digital realm. I explore AI, generative systems, and experimental design methodologies.
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(min(100%, 380px), 1fr)); gap: 30px;">
                <!-- Innovation 1 -->
                <div class="reveal" style="padding: clamp(35px, 5vw, 60px) clamp(25px, 4vw, 45px); background: var(--bg-card); border-radius: 32px; border: 1px solid var(--border-main); transition: 0.5s cubic-bezier(0.4, 0, 0.2, 1); backdrop-filter: blur(10px);" onmouseover="this.style.transform='translateY(-15px)'; this.style.borderColor='var(--primary)'; this.style.boxShadow='0 30px 60px var(--shadow-main)'" onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='var(--border-main)'; this.style.boxShadow='none'">
                    <div style="width: 60px; height: 60px; background: rgba(56, 189, 248, 0.1); border-radius: 18px; display: flex; align-items: center; justify-content: center; margin-bottom: 30px;">
                        <i data-lucide="zap" style="width: 28px; height: 28px; color: var(--primary);"></i>
                    </div>
                    <h3 style="font-size: clamp(1.5rem, 4vw, 2rem); font-weight: 800; margin-bottom: 20px; color: var(--text-main); letter-spacing: -1px;">AI Design Engine</h3>
                    <p style="color: var(--text-dim); line-height: 1.7; margin-bottom: 35px; font-size: 1.05rem;">
                        A proprietary neural network trained on high-end luxury aesthetics to assist in generating divine color palettes and layouts.
                    </p>
                    <div style="font-size: 0.85rem; color: var(--primary); font-weight: 700; letter-spacing: 1px; text-transform: uppercase;">Beta Testing</div>
                </div>

                <!-- Innovation 2 -->
                <div class="reveal" style="padding: clamp(35px, 5vw, 60px) clamp(25px, 4vw, 45px); background: var(--bg-card); border-radius: 32px; border: 1px solid var(--border-main); transition: 0.5s cubic-bezier(0.4, 0, 0.2, 1); backdrop-filter: blur(10px);" onmouseover="this.style.transform='translateY(-15px)'; this.style.borderColor='var(--primary)'; this.style.boxShadow='0 30px 60px var(--shadow-main)'" onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='var(--border-main)'; this.style.boxShadow='none'">
                    <div style="width: 60px; height: 60px; background: rgba(56, 189, 248, 0.1); border-radius: 18px; display: flex; align-items: center; justify-content: center; margin-bottom: 30px;">
                        <i data-lucide="cpu" style="width: 28px; height: 28px; color: var(--primary);"></i>
                    </div>
                    <h3 style="font-size: clamp(1.5rem, 4vw, 2rem); font-weight: 800; margin-bottom: 20px; color: var(--text-main); letter-spacing: -1px;">Quantum Codebase</h3>
                    <p style="color: var(--text-dim); line-height: 1.7; margin-bottom: 35px; font-size: 1.05rem;">
                        Experimental architecture focusing on zero-latency interactions and predictive asset loading for ultra-fast digital environments.
                    </p>
                    <div style="font-size: 0.85rem; color: var(--primary); font-weight: 700; letter-spacing: 1px; text-transform: uppercase;">Internal R&D</div>
                </div>
            </div>
        </div>
    </section>

    <?php include_once './UxUI-Back/Needs/footer.php'; ?>
</body>
</html>


