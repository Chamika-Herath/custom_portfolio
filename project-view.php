<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        $page_title = "Project Case Study | HERAFORCE System Architecture | HeraForce";
        $page_desc = "Detailed architecture and UI/UX design showcase for the HERAFORCE System. Bridging traditional art with AI-assisted grading.";
        include_once './Meta_Tag/Meta_Tag.php'; 
    ?>
    <style>
        .gallery-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px; }
        .gallery-item { border-radius: 20px; overflow: hidden; cursor: pointer; height: 250px; background: var(--bg-card); border: 1px solid var(--border-main); position: relative; }
        .gallery-item::after { content: ''; position: absolute; inset: 0; background: rgba(0,0,0,0.4); opacity: 0; transition: 0.3s; pointer-events: none; }
        .gallery-item:hover::after { opacity: 1; }
        .gallery-item img { width: 100%; height: 100%; object-fit: cover; transition: 0.5s; }
        .gallery-item:hover img { transform: scale(1.05); }
        
        .feature-card { padding: 30px; background: var(--bg-card); border-radius: 20px; border: 1px solid var(--border-main); transition: 0.3s; }
        .feature-card:hover { transform: translateY(-5px); border-color: rgba(56, 189, 248, 0.3); box-shadow: 0 10px 30px rgba(0,0,0,0.5); }
        
        .hero-section {
            position: relative;
            padding: clamp(150px, 20vh, 200px) 0 100px;
            background: url('/assets/images/project_hero_placeholder.jpg') center/cover no-repeat #000;
            overflow: hidden;
            border-bottom: 1px solid var(--border-main);
        }
        .hero-overlay {
            position: absolute; top: 0; left: 0; width: 100%; height: 100%;
            background: linear-gradient(to bottom, rgba(0,0,0,0.3) 0%, rgba(0,0,0,0.95) 100%);
            z-index: 1;
        }
    </style>
</head>
<body style="background: #000000; color: var(--text-main);">
    <?php include_once './UxUI-Back/Needs/header.php'; ?>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-overlay"></div>
        <div class="container" style="position: relative; z-index: 10;">
            <div class="reveal">
                <a href="index.php#projects" style="color: var(--text-dim); text-decoration: none; font-weight: 600; display: inline-flex; align-items: center; gap: 8px; margin-bottom: 30px; transition: 0.3s;" onmouseover="this.style.color='var(--primary)'" onmouseout="this.style.color='var(--text-dim)'">
                    <i data-lucide="arrow-left" style="width: 16px;"></i> Back to Projects
                </a>
                <div style="font-weight: 800; text-transform: uppercase; letter-spacing: 2px; color: var(--primary); font-size: 0.9rem; margin-bottom: 15px; text-shadow: 0 0 10px var(--primary-glow);">Case Study</div>
                <h1 style="font-size: clamp(3rem, 6vw, 5rem); font-weight: 900; line-height: 1.1; margin-bottom: 20px; letter-spacing: -1px;">HERAFORCE System <br><span style="color: transparent; -webkit-text-stroke: 1px var(--primary);">Architecture</span></h1>
                <p style="color: var(--text-dim); font-size: 1.2rem; max-width: 600px; line-height: 1.6;">
                    Bridging traditional artistic techniques with modern AI capabilities. An immersive platform for automated drawing assessment and creative exploration.
                </p>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section style="padding: 100px 0;">
        <div class="container">
            <div style="display: grid; grid-template-columns: 1fr; gap: 60px;">
                
                <!-- Project Overview & Details -->
                <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 60px; align-items: flex-start;" class="about-grid">
                    <div class="reveal">
                        <h2 style="font-size: 2rem; font-weight: 800; margin-bottom: 20px;">The Vision</h2>
                        <p style="color: var(--text-dim); font-size: 1.1rem; line-height: 1.8; margin-bottom: 30px;">
                            The HERAFORCE system was conceptualized to solve a critical issue in artistic education: the lack of subjective, automated, and immediate feedback. This project involved deep architectural planning, combining robust backend processing with a highly intuitive and high-fidelity UI design. 
                        </p>
                        <p style="color: var(--text-dim); font-size: 1.1rem; line-height: 1.8;">
                            By implementing custom AI-assisted grading algorithms and an interactive canvas, we achieved a seamless user experience that feels both technologically advanced and deeply connected to traditional art forms.
                        </p>
                    </div>

                    <div class="glass reveal" style="padding: 40px; border-radius: 30px; position: sticky; top: 120px; background: rgba(20,20,25,0.8);">
                        <h3 style="margin-bottom: 25px; font-weight: 800; border-bottom: 1px solid var(--border-main); padding-bottom: 15px; color: #fff;">Project Details</h3>
                        <div style="display: grid; gap: 20px;">
                            <div>
                                <div style="font-size: 0.75rem; font-weight: 800; text-transform: uppercase; color: var(--primary); letter-spacing: 1px; margin-bottom: 5px;">Client</div>
                                <div style="font-weight: 600; color: var(--text-main);">Academic Portfolio</div>
                            </div>
                            <div>
                                <div style="font-size: 0.75rem; font-weight: 800; text-transform: uppercase; color: var(--primary); letter-spacing: 1px; margin-bottom: 5px;">Role</div>
                                <div style="font-weight: 600; color: var(--text-main);">Lead Architect & UI/UX</div>
                            </div>
                            <div>
                                <div style="font-size: 0.75rem; font-weight: 800; text-transform: uppercase; color: var(--primary); letter-spacing: 1px; margin-bottom: 5px;">Tech Stack</div>
                                <div style="font-weight: 600; color: var(--text-main);">PHP, Python, React, MySQL</div>
                            </div>
                        </div>
                        <a href="#" class="btn-primary" style="margin-top: 40px; width: 100%; justify-content: center;">View Live Project <i data-lucide="external-link"></i></a>
                    </div>
                </div>

                <!-- Key Features Section -->
                <div class="reveal" style="margin-top: 40px;">
                    <h2 style="font-size: 2rem; font-weight: 800; margin-bottom: 40px; text-align: center;">Core Features</h2>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">
                        <div class="feature-card">
                            <i data-lucide="cpu" style="color: var(--primary); width: 40px; height: 40px; margin-bottom: 20px;"></i>
                            <h3 style="font-size: 1.2rem; font-weight: 800; margin-bottom: 15px;">AI Assessment</h3>
                            <p style="color: var(--text-dim); font-size: 0.95rem; line-height: 1.6;">Integrated machine learning models to analyze stroke patterns and grading metrics instantly.</p>
                        </div>
                        <div class="feature-card">
                            <i data-lucide="layout" style="color: var(--primary); width: 40px; height: 40px; margin-bottom: 20px;"></i>
                            <h3 style="font-size: 1.2rem; font-weight: 800; margin-bottom: 15px;">Immersive Canvas</h3>
                            <p style="color: var(--text-dim); font-size: 0.95rem; line-height: 1.6;">A custom-built HTML5 canvas that replicates physical drawing tools with zero latency.</p>
                        </div>
                        <div class="feature-card">
                            <i data-lucide="database" style="color: var(--primary); width: 40px; height: 40px; margin-bottom: 20px;"></i>
                            <h3 style="font-size: 1.2rem; font-weight: 800; margin-bottom: 15px;">Real-time Sync</h3>
                            <p style="color: var(--text-dim); font-size: 0.95rem; line-height: 1.6;">Cloud architecture ensuring artwork is saved incrementally without interrupting the creative flow.</p>
                        </div>
                    </div>
                </div>

                <!-- Gallery Section -->
                <div class="reveal" style="margin-top: 60px;">
                    <h2 style="font-size: 2rem; font-weight: 800; margin-bottom: 30px;">Interface Gallery</h2>
                    <div class="gallery-grid">
                        <div class="gallery-item"><img src="/assets/images/placeholder1.jpg" alt="Gallery Image 1" onerror="this.src='https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&q=80&w=800';"></div>
                        <div class="gallery-item"><img src="/assets/images/placeholder2.jpg" alt="Gallery Image 2" onerror="this.src='https://images.unsplash.com/photo-1618761714954-0b8cd0026356?auto=format&fit=crop&q=80&w=800';"></div>
                        <div class="gallery-item"><img src="/assets/images/placeholder3.jpg" alt="Gallery Image 3" onerror="this.src='https://images.unsplash.com/photo-1558655146-d09347e92766?auto=format&fit=crop&q=80&w=800';"></div>
                        <div class="gallery-item"><img src="/assets/images/placeholder4.jpg" alt="Gallery Image 4" onerror="this.src='https://images.unsplash.com/photo-1561070791-2526d30994b5?auto=format&fit=crop&q=80&w=800';"></div>
                    </div>
                </div>

                <!-- Project Navigation -->
                <div class="reveal" style="margin-top: 80px; padding-top: 50px; border-top: 1px solid var(--border-main); display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 30px;">
                    <a href="#" style="text-decoration: none; display: flex; align-items: center; gap: 20px; transition: 0.3s;" class="nav-prev">
                        <div style="width: 50px; height: 50px; border-radius: 50%; background: var(--bg-card); display: flex; align-items: center; justify-content: center; border: 1px solid var(--border-main);">
                            <i data-lucide="chevron-left" style="color: var(--text-main);"></i>
                        </div>
                        <div>
                            <div style="font-size: 0.8rem; font-weight: 700; text-transform: uppercase; color: var(--text-dim); margin-bottom: 5px;">Previous Project</div>
                            <div style="color: var(--text-main); font-weight: 800; font-size: 1.2rem;">FinTech Dashboard</div>
                        </div>
                    </a>
                    
                    <a href="#" style="text-decoration: none; display: flex; align-items: center; gap: 20px; text-align: right; transition: 0.3s;" class="nav-next">
                        <div>
                            <div style="font-size: 0.8rem; font-weight: 700; text-transform: uppercase; color: var(--text-dim); margin-bottom: 5px;">Next Project</div>
                            <div style="color: var(--text-main); font-weight: 800; font-size: 1.2rem;">E-Commerce Experience</div>
                        </div>
                        <div style="width: 50px; height: 50px; border-radius: 50%; background: var(--bg-card); display: flex; align-items: center; justify-content: center; border: 1px solid var(--border-main);">
                            <i data-lucide="chevron-right" style="color: var(--text-main);"></i>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <style>
        @media (min-width: 1024px) {
            .about-grid { grid-template-columns: 2fr 1fr !important; }
        }
        @media (max-width: 1023px) {
            .about-grid { grid-template-columns: 1fr !important; }
            .glass { position: relative !important; top: 0 !important; }
        }
        .nav-prev:hover i, .nav-next:hover i { color: var(--primary) !important; }
        .nav-prev:hover div:first-child, .nav-next:hover div:last-child { border-color: var(--primary); box-shadow: 0 0 15px var(--primary-glow); }
    </style>

    <?php include_once './UxUI-Back/Needs/footer.php'; ?>
</body>
</html>


