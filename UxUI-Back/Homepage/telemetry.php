<section id="telemetry" style="padding: 100px 0; background: rgba(2, 44, 34, 0.4); position: relative; overflow: hidden; border-top: 1px solid rgba(16, 185, 129, 0.2);">
    
    <!-- Background Decor -->
    <div style="position: absolute; right: 0; bottom: 0; width: 60vw; height: 100%; background: url('/assets/images/user_suit.jpg') center/cover no-repeat; opacity: 0.05; filter: grayscale(100%); mix-blend-mode: overlay; pointer-events: none;"></div>

    <div class="container" style="max-width: 1400px; width: 90%; margin: 0 auto; position: relative; z-index: 10;">
        
        <div class="reveal telemetry-grid" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 40px; text-align: center; background: rgba(0,0,0,0.2); border: 1px solid rgba(255,255,255,0.05); border-radius: 20px; padding: 60px 40px; backdrop-filter: blur(10px);">
            
            <div class="stat-box">
                <div class="counter" data-target="500" style="font-family: 'Outfit', sans-serif; font-size: clamp(3rem, 5vw, 4.5rem); font-weight: 900; color: var(--primary); line-height: 1;">0</div>
                <div style="color: #fff; font-size: 2rem; font-weight: 700; color: var(--primary); margin-top: -10px;">+</div>
                <div style="color: rgba(255,255,255,0.6); font-size: 0.95rem; font-weight: 600; text-transform: uppercase; letter-spacing: 2px; margin-top: 15px;">Hours of Masterclasses</div>
            </div>
            
            <div class="stat-box" style="border-left: 1px solid rgba(255,255,255,0.1); border-right: 1px solid rgba(255,255,255,0.1);">
                <div class="counter" data-target="99" style="font-family: 'Outfit', sans-serif; font-size: clamp(3rem, 5vw, 4.5rem); font-weight: 900; color: var(--primary); line-height: 1;">0</div>
                <div style="color: #fff; font-size: 2rem; font-weight: 700; color: var(--primary); margin-top: -10px;">.9%</div>
                <div style="color: rgba(255,255,255,0.6); font-size: 0.95rem; font-weight: 600; text-transform: uppercase; letter-spacing: 2px; margin-top: 15px;">Target Runtime Uptime</div>
            </div>

            <div class="stat-box">
                <div class="counter" data-target="10000" style="font-family: 'Outfit', sans-serif; font-size: clamp(3rem, 5vw, 4.5rem); font-weight: 900; color: var(--primary); line-height: 1;">0</div>
                <div style="color: #fff; font-size: 2rem; font-weight: 700; color: var(--primary); margin-top: -10px;">+</div>
                <div style="color: rgba(255,255,255,0.6); font-size: 0.95rem; font-weight: 600; text-transform: uppercase; letter-spacing: 2px; margin-top: 15px;">Lines of Architecture</div>
            </div>

        </div>

    </div>
</section>

<style>
    @media (max-width: 900px) {
        .telemetry-grid { grid-template-columns: 1fr !important; gap: 60px !important; padding: 50px 20px !important; }
        .stat-box { border: none !important; }
        .stat-box:not(:last-child) { border-bottom: 1px solid rgba(255,255,255,0.1) !important; padding-bottom: 40px; }
    }
</style>

<script>
    // JS Number Counter Logic
    document.addEventListener("DOMContentLoaded", () => {
        const counters = document.querySelectorAll('.counter');
        const speed = 200; 

        const animateCounters = () => {
            counters.forEach(counter => {
                const updateCount = () => {
                    const target = +counter.getAttribute('data-target');
                    const count = +counter.innerText;
                    const inc = target / speed;

                    if (count < target) {
                        counter.innerText = Math.ceil(count + inc);
                        setTimeout(updateCount, 15);
                    } else {
                        // Format large numbers with commas if needed
                        counter.innerText = target.toLocaleString();
                    }
                };
                updateCount();
            });
        };

        // Create an Intersection Observer to trigger counting only when scrolled into view
        const observer = new IntersectionObserver((entries, obs) => {
            entries.forEach(entry => {
                if(entry.isIntersecting) {
                    animateCounters();
                    obs.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });
        
        const grid = document.querySelector('.telemetry-grid');
        if(grid) {
            observer.observe(grid);
        }
    });
</script>
