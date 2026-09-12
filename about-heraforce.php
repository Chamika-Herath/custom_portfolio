<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        $page_title = "About Chamika Herath | The Visionary behind HeraForce";
        $page_desc = "Learn about Chamika Herath, the creator of HeraForce. Full Stack Developer and UI/UX Designer setting new standards for web development in Sri Lanka.";
        include_once './Meta_Tag/Meta_Tag.php'; 
    ?>
</head>
<body style="background: #000000; color: var(--text-main);">
    <?php include_once './UxUI-Back/Needs/header.php'; ?>

    <section style="padding: clamp(100px, 15vh, 180px) 0 80px; background: url('/assets/images/bg_about.png') center/cover no-repeat #000000; position: relative; overflow: hidden;">
        <!-- Cinematic Overlay -->
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(to bottom, #000000 0%, rgba(0, 0, 0,0.5) 50%, #000000 100%); opacity: 0.95; z-index: 1; pointer-events: none;"></div>
        <div class="container" style="position: relative; z-index: 10;">
            <div style="display: grid; grid-template-columns: 1fr; gap: 40px; align-items: center;" class="about-grid">
                <div class="reveal">
                    <!-- Chamika Herath Photo -->
                    <div style="width: 100%; max-width: 500px; margin: 0 auto; aspect-ratio: 1/1.2; border-radius: 40px; background: var(--bg-card); overflow: hidden; border: 1px solid var(--border-main); box-shadow: 0 30px 60px rgba(0, 0, 0, 0.35);">
                         <img src="./assets/images/chmika-herath.jpeg" alt="Chamika Herath" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                </div>
                <div class="reveal">
                    <div style="font-weight: 800; text-transform: uppercase; letter-spacing: 2px; color: var(--primary); font-size: 0.8rem; margin-bottom: 20px;">The Creator</div>
                    <h1 style="font-size: clamp(2.5rem, 8vw, 4rem); font-weight: 900; line-height: 1.1; margin-bottom: 30px; letter-spacing: -2px; color: var(--text-main);">HeraForce by <br><span style="color: var(--primary);">Chamika Herath.</span></h1>
                    <p style="color: var(--text-dim); font-size: 1.15rem; line-height: 1.7; margin-bottom: 30px;">
                        HeraForce is the personal brand and digital embodiment of creative vision and technical precision, founded by Chamika Herath. It is a philosophy that combines the raw emotion of design with the absolute logic of modern engineering, setting a new standard for <span style="color: var(--text-main); font-weight: 600;">multidisciplinary portfolios</span>.
                    </p>
                    <p style="color: var(--text-dim); font-size: 1.1rem; line-height: 1.7; margin-bottom: 40px;">
                        As a designer, developer, and digital architect, I specialize in building systems that aren't just functional, but divine in their execution. My journey, enriched by my academic foundation at <span style="color: var(--text-main); font-weight: 600;">KIU Sri Lanka</span>, started with a deep passion for visual art and evolved into a mastery of digital engineering.
                    </p>
                    
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px;">
                        <div style="padding: 25px; background: var(--bg-card); border-radius: 20px; border: 1px solid var(--border-main); box-shadow: 0 20px 40px rgba(0, 0, 0, 0.25);">
                            <div style="font-weight: 800; color: var(--primary); margin-bottom: 10px;">The Vision</div>
                            <div style="font-size: 0.9rem; color: var(--text-dim);">To explore the boundaries of digital canvases and interactive software.</div>
                        </div>
                        <div style="padding: 25px; background: var(--bg-card); border-radius: 20px; border: 1px solid var(--border-main); box-shadow: 0 20px 40px rgba(0, 0, 0, 0.25);">
                            <div style="font-weight: 800; color: var(--primary); margin-bottom: 10px;">The Mission</div>
                            <div style="font-size: 0.9rem; color: var(--text-dim);">Synthesizing physical art, bespoke logic, and robust engineering.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        @media (min-width: 1024px) {
            .about-grid { grid-template-columns: 1fr 1.2fr !important; gap: 80px !important; }
        }
    </style>

    <?php include_once './UxUI-Back/Needs/footer.php'; ?>
</body>
</html>


