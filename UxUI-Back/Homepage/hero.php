<section id="hero" style="display: flex; align-items: center; justify-content: center; padding: 180px 0 100px; position: relative; overflow: hidden; background: transparent;">
    
    <!-- Dark Gradient Overlay for the Cover Photo -->
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(135deg, rgba(6, 11, 19, 0.95) 0%, rgba(6, 11, 19, 0.5) 100%); z-index: 0;"></div>
    
    <!-- Interactive Three.js Particle Grid -->
    <canvas id="hero-gl" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 1; pointer-events: none;"></canvas>
    
    <div class="container" style="position: relative; z-index: 10; width: 100%; max-width: 1200px;">
        <div class="hero-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: center; width: 100%;">
            
            <!-- Left Column: Content -->
            <div class="hero-content parallax-layer" data-speed="0.05" style="display: flex; flex-direction: column; gap: 24px; text-align: left; align-items: flex-start; z-index: 10; transition: transform 0.15s ease-out;">
                <h1 class="hero-reveal" style="font-size: clamp(2.2rem, 4vw, 3.8rem); font-weight: 800; line-height: 1.1; letter-spacing: -1.5px; width: 100%; text-shadow: 0 10px 40px rgba(0,0,0,0.5);">
                    <span style="color: #ffffff;">Engineering</span><br>
                    <span style="background: linear-gradient(90deg, #4ade80 0%, #fff 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Scalable Systems</span><br>
                    <span style="color: #ffffff;">& Seamless Experiences</span>
                </h1>
                
                <p class="hero-reveal" style="max-width: 580px; color: var(--text-dim); font-size: clamp(1.05rem, 1.2vw, 1.15rem); line-height: 1.8; font-weight: 400;">
                    Hi, I'm <span style="color: #ffffff; font-weight: 600;">Chamika Herath</span>, a Results-Driven Web Developer.<br> I specialize in PHP, MySQL, ReactJS, and Node.js to engineer scalable backend architectures and robust commercial-grade software solutions.
                </p>
                
                <div class="hero-reveal" style="display: flex; flex-direction: column; align-items: flex-start; gap: 20px;">
                    <a href="#projects" class="luxury-btn">
                        <span>Explore My Projects</span>
                        <div class="btn-glow"></div>
                    </a>
                    
                    <div style="display: flex; align-items: center; gap: 12px; color: var(--text-dim); font-size: 0.85rem; font-weight: 600;">
                        <i data-lucide="code" style="width: 16px; color: #4ade80;"></i>
                        <span>Bridging high-performance logic with commercial solutions</span>
                    </div>
                </div>
            </div>

            <!-- Right Column: 3D Asset Window -->
            <div class="hero-parallax-scene" id="parallax-scene" style="position: relative; width: 100%; max-width: 440px; margin: 0 auto; display: flex; align-items: center; justify-content: center; perspective: 1000px; transform-style: preserve-3d; cursor: pointer;">
                
                <div class="parallax-layer hero-avatar-reveal" data-speed="0.15" data-z="20px" style="position: relative; z-index: 5; transition: transform 0.2s ease-out; transform-style: preserve-3d; width: 100%;">
                    <div class="portrait-container" style="position: relative; width: 100%; padding-bottom: 100%; border-radius: 50%; overflow: hidden; background: rgba(0, 0, 0, 0.2); box-shadow: 0 0 60px rgba(34, 197, 94, 0.3), -10px -10px 30px rgba(34, 197, 94, 0.05); border: 2px solid rgba(74, 222, 128, 0.5);">
                        <img src="/assets/images/chmika-herath.jpeg" alt="Chamika Herath" style="position: absolute; top:0; left:0; width: 100%; height: 100%; object-fit: cover; transition: 0.8s cubic-bezier(0.16, 1, 0.3, 1);" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
    /* Luxury UI Animations & Components */

    .hero-reveal, .hero-avatar-reveal {
        opacity: 0;
        visibility: hidden;
    }

    /* Glassmorphic Luxury CTA Button */
    .luxury-btn {
        position: relative;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 18px 45px;
        background: rgba(74, 222, 128, 0.05); /* transparent green */
        color: #4ade80;
        text-decoration: none;
        font-weight: 800;
        border-radius: 100px;
        font-size: 0.85rem;
        text-transform: uppercase;
        letter-spacing: 2px;
        border: 1px solid rgba(74, 222, 128, 0.3);
        backdrop-filter: blur(10px);
        overflow: hidden;
        transition: 0.5s cubic-bezier(0.16, 1, 0.3, 1);
        width: fit-content;
    }
    .luxury-btn span { position: relative; z-index: 2; transition: 0.3s; }
    .luxury-btn .btn-glow {
        position: absolute; top: 0; left: -100%; width: 100%; height: 100%;
        background: linear-gradient(90deg, transparent, rgba(74, 222, 128, 0.4), transparent);
        transition: 0.5s; z-index: 1;
    }
    .luxury-btn:hover {
        background: #4ade80;
        color: var(--bg-main);
        box-shadow: 0 20px 40px rgba(74, 222, 128, 0.3);
        transform: translateY(-5px);
        border-color: #4ade80;
    }
    .luxury-btn:hover span { color: #060b13; }
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
            height: 280px !important;
            padding-bottom: 0 !important;
            border-radius: 50% !important;
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

        // --- GSAP TEXT & AVATAR REVEAL TIMELINE ---
        if (typeof gsap !== 'undefined') {
            const heroTl = gsap.timeline({ defaults: { ease: "power4.out" } });
            
            // Set visibility to visible, animate from opacity 0 to opacity 1
            gsap.set(".hero-reveal, .hero-avatar-reveal", { visibility: "visible" });

            // 1. Text elements stagger from bottom up smoothly
            heroTl.fromTo(".hero-reveal", 
                { y: 80, opacity: 0 },
                { y: 0, opacity: 1, duration: 1.5, stagger: 0.15, delay: 0.2 }
            );

            // 2. Avatar deeply elastic pop out animation overlapping the text
            heroTl.fromTo(".hero-avatar-reveal", 
                { scale: 0.4, opacity: 0, rotation: -25 },
                { scale: 1, opacity: 1, rotation: 0, duration: 2.2, ease: "elastic.out(1, 0.6)" },
                "-=1.2"
            );

            // 3. Ambient slow organic floating motion applied continuously to the avatar (on complete to avoid interrupting pop)
            heroTl.add(() => {
                gsap.to(".hero-avatar-reveal", {
                    y: 15,
                    rotation: 2,
                    duration: 3,
                    yoyo: true,
                    repeat: -1,
                    ease: "sine.inOut"
                });
            });
        }

        // --- THREE.JS & GSAP INTEGRATION ---
        if (typeof THREE !== 'undefined' && typeof gsap !== 'undefined') {
            const canvas = document.getElementById('hero-gl');
            if (canvas) {
                const scene = new THREE.Scene();
                const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
                const renderer = new THREE.WebGLRenderer({ canvas: canvas, alpha: true, antialias: true });

                renderer.setSize(window.innerWidth, window.innerHeight);
                renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));

                const particlesGeometry = new THREE.BufferGeometry();
                const particlesCount = 800;
                const posArray = new Float32Array(particlesCount * 3);

                for(let i = 0; i < particlesCount * 3; i++) {
                    posArray[i] = (Math.random() - 0.5) * 15;
                }
                particlesGeometry.setAttribute('position', new THREE.BufferAttribute(posArray, 3));

                const particlesMaterial = new THREE.PointsMaterial({
                    size: 0.03,
                    color: 0x4ade80,
                    transparent: true,
                    opacity: 0.8,
                    blending: THREE.AdditiveBlending
                });

                const particleMesh = new THREE.Points(particlesGeometry, particlesMaterial);
                scene.add(particleMesh);
                camera.position.z = 3;

                let tMouseX = 0;
                let tMouseY = 0;
                window.addEventListener('mousemove', (event) => {
                    tMouseX = (event.clientX / window.innerWidth) * 2 - 1;
                    tMouseY = -(event.clientY / window.innerHeight) * 2 + 1;
                });

                gsap.to(particleMesh.rotation, {
                    y: Math.PI * 2,
                    duration: 50,
                    repeat: -1,
                    ease: "none"
                });

                const clock = new THREE.Clock();

                const tick = () => {
                    const elapsedTime = clock.getElapsedTime();
                    
                    particleMesh.position.y = Math.sin(elapsedTime * 0.5) * 0.1;
                    particleMesh.rotation.x += (tMouseY * 0.15 - particleMesh.rotation.x) * 0.05;
                    particleMesh.rotation.y += (tMouseX * 0.15 - particleMesh.rotation.y) * 0.05;

                    renderer.render(scene, camera);
                    window.requestAnimationFrame(tick);
                }
                tick();

                window.addEventListener('resize', () => {
                    camera.aspect = window.innerWidth / window.innerHeight;
                    camera.updateProjectionMatrix();
                    renderer.setSize(window.innerWidth, window.innerHeight);
                });
            }
        }
    });
</script>


