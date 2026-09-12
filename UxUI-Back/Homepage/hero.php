<section id="hero" style="display: flex; align-items: center; justify-content: center; padding: 180px 0 100px; position: relative; overflow: hidden; background: var(--bg-main);">
    
    <!-- Ambient Luxury Blur Orbs -->
    <div class="ambient-orb" style="position: absolute; top: -10%; left: -5%; width: 600px; height: 600px; background: rgba(212, 188, 143, 0.08); filter: blur(150px); border-radius: 50%; z-index: 1; pointer-events: none; animation: floatOrb 20s ease-in-out infinite alternate;"></div>
    <div class="ambient-orb" style="position: absolute; bottom: -20%; right: -10%; width: 700px; height: 700px; background: rgba(19, 42, 30, 0.4); filter: blur(150px); border-radius: 50%; z-index: 1; pointer-events: none; animation: floatOrb 25s ease-in-out infinite alternate-reverse;"></div>
    
    <div class="container" style="position: relative; z-index: 10; width: 100%; max-width: 1200px;">
        <div class="hero-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: center; width: 100%;">
            
            <!-- Left Column: Content -->
            <div class="hero-content parallax-layer" data-speed="0.05" style="display: flex; flex-direction: column; gap: 24px; text-align: left; align-items: flex-start; z-index: 10; transition: transform 0.15s ease-out;">
                <h1 class="entrance-anim" style="--delay: 1; font-size: clamp(2.2rem, 4vw, 3.8rem); font-weight: 800; line-height: 1.1; letter-spacing: -1.5px; width: 100%; text-shadow: 0 10px 40px rgba(0,0,0,0.5);">
                    <span style="color: #ffffff;">Where Art,</span><br>
                    <span style="background: linear-gradient(90deg, var(--primary) 0%, #fff 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Innovation & Elite</span><br>
                    <span style="color: #ffffff;">Engineering Converge</span>
                </h1>
                
                <p class="entrance-anim" style="--delay: 2; max-width: 580px; color: var(--text-dim); font-size: clamp(1.05rem, 1.2vw, 1.15rem); line-height: 1.8; font-weight: 400;">
                    Welcome to the personal portfolio of <span style="color: #ffffff; font-weight: 600;"><?php echo $company_info->get_compnay_name(); ?></span>.<br> Explore a curated canvas of interactive digital art, experimental tech innovations, and high-performance software systems.
                </p>
                
                <div class="entrance-anim" style="--delay: 3; display: flex; flex-direction: column; align-items: flex-start; gap: 20px;">
                    <a href="#projects" class="luxury-btn">
                        <span>View Integrated Portfolio</span>
                        <div class="btn-glow"></div>
                    </a>
                    
                    <div style="display: flex; align-items: center; gap: 12px; color: var(--text-dim); font-size: 0.85rem; font-weight: 600;">
                        <i data-lucide="eye" style="width: 16px; color: var(--primary);"></i>
                        <span>Witness the horizon of design power and absolute logic</span>
                    </div>
                </div>
            </div>

            <!-- Right Column: 3D Asset Window -->
            <div class="hero-parallax-scene" id="parallax-scene" style="position: relative; width: 100%; max-width: 440px; margin: 0 auto; display: flex; align-items: center; justify-content: center; perspective: 1000px; transform-style: preserve-3d; cursor: pointer;">
                
                <div class="parallax-layer reveal" data-speed="0.15" data-z="20px" style="position: relative; z-index: 5; transition: transform 0.2s ease-out; transform-style: preserve-3d; width: 100%;">
                    <div class="portrait-container" style="position: relative; width: 100%; padding-bottom: 100%; border-radius: 30px; overflow: hidden; background: rgba(0, 0, 0, 0.2); box-shadow: 0 40px 80px rgba(0,0,0,0.6), -10px -10px 30px rgba(212, 188, 143, 0.05);">
                        <img src="/assets/images/wooden_queen_portrait.png" alt="HeraForce Queen Core Asset" style="position: absolute; top:0; left:0; width: 100%; height: 100%; object-fit: cover; transition: 0.8s cubic-bezier(0.16, 1, 0.3, 1);" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
    /* Luxury UI Animations & Components */
    @keyframes floatOrb {
        0% { transform: translate(0, 0) scale(1); }
        100% { transform: translate(80px, 50px) scale(1.1); }
    }

    .entrance-anim {
        opacity: 0;
        transform: translateY(40px);
        animation: smoothEntrance 1.2s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        animation-delay: calc(var(--delay) * 0.15s);
    }
    
    @keyframes smoothEntrance {
        100% { opacity: 1; transform: translateY(0); }
    }

    /* Glassmorphic Luxury CTA Button */
    .luxury-btn {
        position: relative;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 18px 45px;
        background: rgba(212, 188, 143, 0.05); /* very transparent gold */
        color: var(--primary);
        text-decoration: none;
        font-weight: 800;
        border-radius: 100px;
        font-size: 0.85rem;
        text-transform: uppercase;
        letter-spacing: 2px;
        border: 1px solid rgba(212, 188, 143, 0.3);
        backdrop-filter: blur(10px);
        overflow: hidden;
        transition: 0.5s cubic-bezier(0.16, 1, 0.3, 1);
        width: fit-content;
    }
    .luxury-btn span { position: relative; z-index: 2; transition: 0.3s; }
    .luxury-btn .btn-glow {
        position: absolute; top: 0; left: -100%; width: 100%; height: 100%;
        background: linear-gradient(90deg, transparent, rgba(212, 188, 143, 0.4), transparent);
        transition: 0.5s; z-index: 1;
    }
    .luxury-btn:hover {
        background: var(--primary);
        color: var(--bg-main);
        box-shadow: 0 20px 40px rgba(212, 188, 143, 0.3);
        transform: translateY(-5px);
        border-color: var(--primary);
    }
    .luxury-btn:hover span { color: #10241a; }
    .luxury-btn:hover .btn-glow { left: 100%; transition: 0.7s; }

    /* CSS Rotating Seal Keyframes */

    /* Desktop and Mobile Responsive Grids */
    @media (min-width: 1024px) {
        .hero-grid { 
            grid-template-columns: 1.15fr 0.85fr !important; 
            gap: 40px !important; 
        }
        .hero-content { 
            align-items: flex-start !important; 
            text-align: left !important; 
        }
        .hero-content h1, .hero-content p { 
            margin-left: 0 !important; 
        }
        .br-mobile {
            display: none !important;
        }
    }
    
    @media (max-width: 1023px) {
        #hero { 
            padding-top: 140px !important; 
        }
        .hero-grid { 
            grid-template-columns: 1fr !important; 
            gap: 60px !important; 
        }
        .hero-content { 
            align-items: center !important; 
            text-align: center !important; 
        }
        .hero-parallax-scene {
            width: 100% !important;
            max-width: 440px !important;
            height: auto !important;
        }
        .portrait-container {
            width: 280px !important;
            height: 340px !important;
            padding-bottom: 0 !important;
            border-radius: 20px !important;
            margin: 0 auto !important;
        }
    }

    @media (max-width: 480px) {
        .hero-grid { 
            gap: 40px !important;
        }
        #hero { padding-top: 100px !important; }
        .btn-login-pill { padding: 8px 16px !important; font-size: 0.85rem !important; }
    }

    @media (max-width: 768px) {
        .scroll-indicator { display: none !important; }
        #hero { padding-top: 120px !important; padding-bottom: 40px !important; }
    }
</style>

<!-- Lightweight interactive mouse-move and scroll parallax logic -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const scene = document.getElementById('parallax-scene');
        const layers = document.querySelectorAll('.parallax-layer');
        const decors = document.querySelectorAll('.parallax-glow-decor, .parallax-glow-decor-2');

        // Combined parallax effect only active on desktop sizes for performance optimization
        if (window.innerWidth >= 1024) {
            let mouseX = 0, mouseY = 0;
            let targetMouseX = 0, targetMouseY = 0;
            let scrollY = window.scrollY;
            let targetScrollY = window.scrollY;
            let isRunning = false;

            // Track mouse movements relative to the center of the scene
            window.addEventListener('mousemove', (e) => {
                const rect = scene.getBoundingClientRect();
                const sceneCenterX = rect.left + rect.width / 2;
                const sceneCenterY = rect.top + rect.height / 2;
                targetMouseX = e.clientX - sceneCenterX;
                targetMouseY = e.clientY - sceneCenterY;
                
                startLoop();
            });

            // Smoothly track page scroll
            window.addEventListener('scroll', () => {
                targetScrollY = window.scrollY;
                startLoop();
            }, { passive: true });

            // Reset coordinates on mouse leave
            scene.addEventListener('mouseleave', () => {
                targetMouseX = 0;
                targetMouseY = 0;
                startLoop();
            });

            function startLoop() {
                if (!isRunning) {
                    isRunning = true;
                    requestAnimationFrame(updateParallax);
                }
            }

            // Unified, ultra-smooth requestAnimationFrame animation loop
            function updateParallax() {
                // If hero is scrolled completely out of view, pause loop to save resources
                if (targetScrollY > window.innerHeight) {
                    isRunning = false;
                    return;
                }

                // Smooth LERP (Linear Interpolation) for perfect ease-out animations
                const dMouseX = targetMouseX - mouseX;
                const dMouseY = targetMouseY - mouseY;
                const dScrollY = targetScrollY - scrollY;

                mouseX += dMouseX * 0.08;
                mouseY += dMouseY * 0.08;
                scrollY += dScrollY * 0.08;

                layers.forEach(layer => {
                    const speed = parseFloat(layer.getAttribute('data-speed')) || 0;
                    const zDepth = layer.getAttribute('data-z') || '0px';
                    
                    // Mouse shift
                    const xOffset = mouseX * speed * 0.08;
                    const yOffset = mouseY * speed * 0.08;
                    
                    // Scroll shift: move elements upwards as we scroll down to enhance the 3D parallax effect
                    const scrollOffset = -scrollY * speed * 0.35;
                    
                    layer.style.transform = `translate3d(${xOffset}px, ${yOffset + scrollOffset}px, ${zDepth})`;
                });

                decors.forEach((decor, idx) => {
                    const factor = (idx + 1) * 0.02;
                    const scrollOffset = -scrollY * 0.15;
                    decor.style.transform = `translate3d(${mouseX * factor}px, ${mouseY * factor + scrollOffset}px, 0)`;
                });

                // Stop loop if coordinates have fully settled
                if (Math.abs(dMouseX) < 0.1 && Math.abs(dMouseY) < 0.1 && Math.abs(dScrollY) < 0.1) {
                    mouseX = targetMouseX;
                    mouseY = targetMouseY;
                    scrollY = targetScrollY;
                    isRunning = false;
                } else {
                    requestAnimationFrame(updateParallax);
                }
            }

            // Start the interactive loop initially
            startLoop();
        }
    });
</script>


