<section id="projects" style="padding: clamp(80px, 12vh, 120px) 0; background: transparent; position: relative; overflow: hidden; transition: 0.3s; border-top: 1px solid rgba(0, 229, 255, 0.1);">
    <!-- Cinematic Overlay (Lighter to show the bright starry mountains) -->
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(to bottom, #000000 0%, rgba(0, 0, 0,0.25) 50%, #000000 100%); opacity: 0.8; z-index: 1; pointer-events: none;"></div>

    <div class="container" style="position: relative; z-index: 10; max-width: 1400px;">
        <div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: clamp(50px, 10vh, 80px); gap: 30px; flex-wrap: wrap;" class="projects-header">
            <div style="max-width: 700px;">
                <div style="font-weight: 800; text-transform: uppercase; letter-spacing: 3px; color: var(--primary); font-size: 0.75rem; margin-bottom: 20px;">Masterpieces Showcase</div>
                <h2 class="reveal" style="font-size: clamp(2.2rem, 5vw, 3.5rem); font-weight: 900; line-height: 1.1; margin-bottom: 0; letter-spacing: -2px; color: var(--text-main);">Portfolio <span style="color: var(--primary);">Masterpieces.</span></h2>
            </div>
            
            <!-- Project Pager (Hidden on very small mobile for space) -->
            <div style="display: flex; gap: 15px;" class="project-pager">
                <button style="width: 50px; height: 50px; border-radius: 50%; border: 1px solid var(--border-main); background: var(--bg-card); cursor: pointer; transition: 0.3s; display: flex; align-items: center; justify-content: center; color: var(--text-main); backdrop-filter: blur(10px);" onmouseover="this.style.borderColor='var(--primary)'; this.style.color='var(--primary)'" onmouseout="this.style.borderColor='var(--border-main)'; this.style.color='var(--text-main)'">
                    <i data-lucide="chevron-left" style="width: 20px;"></i>
                </button>
                <button style="width: 50px; height: 50px; border-radius: 50%; border: 1px solid var(--border-main); background: var(--bg-card); cursor: pointer; transition: 0.3s; display: flex; align-items: center; justify-content: center; color: var(--text-main); backdrop-filter: blur(10px);" onmouseover="this.style.borderColor='var(--primary)'; this.style.color='var(--primary)'" onmouseout="this.style.borderColor='var(--border-main)'; this.style.color='var(--text-main)'">
                    <i data-lucide="chevron-right" style="width: 20px;"></i>
                </button>
            </div>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(min(100%, 400px), 1fr)); gap: 30px;" class="projects-grid">
            <!-- Project 1 -->
            <a href="https://sldrawing.com/" target="_blank" class="reveal" style="text-decoration: none; color: inherit; display: block;">
                <div style="border-radius: 28px; overflow: hidden; background: var(--bg-card); height: clamp(400px, 60vh, 500px); position: relative; transition: 0.5s cubic-bezier(0.4, 0, 0.2, 1); border: 1px solid var(--border-main);" onmouseover="this.style.transform='translateY(-15px)'; this.style.borderColor='var(--primary)'; this.style.boxShadow='0 30px 60px var(--shadow-main)'; this.querySelector('.project-bg').style.opacity='0.55'" onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='var(--border-main)'; this.style.boxShadow='none'; this.querySelector('.project-bg').style.opacity='0.35'">
                    <div class="project-bg" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: url('https://sldrawing.com/assets/images/tutorial_portrait_1773936991179.png') center/cover no-repeat; opacity: 0.35; transition: 0.5s;"></div>
                    <div style="position: absolute; bottom: 0; left: 0; width: 100%; padding: clamp(25px, 5vw, 45px); background: linear-gradient(to top, var(--bg-main) 30%, transparent);">
                        <div style="display: flex; gap: 10px; margin-bottom: 15px;">
                            <span style="font-size: 0.65rem; font-weight: 800; color: var(--primary); text-transform: uppercase; letter-spacing: 1.5px; padding: 4px 10px; background: rgba(56, 189, 248, 0.1); border-radius: 6px;">Digital Art</span>
                        </div>
                        <h3 style="font-size: clamp(1.5rem, 4vw, 2rem); font-weight: 800; margin-bottom: 10px; color: var(--text-main); letter-spacing: -1px;">HERAFORCE System</h3>
                        <p style="color: var(--text-dim); margin-bottom: 25px; font-size: clamp(0.95rem, 2vw, 1.1rem); line-height: 1.5;">Master digital art with expert-led tutorials and AI-assisted grading. Join a community of legends today.</p>
                        <div style="display: flex; align-items: center; gap: 8px; color: var(--primary); font-weight: 700; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 1px;">
                            View Masterpiece <i data-lucide="arrow-right" style="width: 16px;"></i>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Project 2 -->
            <a href="#" class="reveal" style="text-decoration: none; color: inherit; display: block;">
                <div style="border-radius: 28px; overflow: hidden; background: var(--bg-card); height: clamp(400px, 60vh, 500px); position: relative; transition: 0.5s cubic-bezier(0.4, 0, 0.2, 1); border: 1px solid var(--border-main);" onmouseover="this.style.transform='translateY(-15px)'; this.style.borderColor='var(--primary)'; this.style.boxShadow='0 30px 60px var(--shadow-main)'; this.querySelector('.project-bg-2').style.opacity='0.55'" onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='var(--border-main)'; this.style.boxShadow='none'; this.querySelector('.project-bg-2').style.opacity='0.35'">
                    <div class="project-bg-2" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: url('/assets/images/royal_marketplace.png') center/cover no-repeat; opacity: 0.35; transition: 0.5s;"></div>
                    <div style="position: absolute; bottom: 0; left: 0; width: 100%; padding: clamp(25px, 5vw, 45px); background: linear-gradient(to top, var(--bg-main) 30%, transparent);">
                        <div style="display: flex; gap: 10px; margin-bottom: 15px;">
                            <span style="font-size: 0.65rem; font-weight: 800; color: var(--primary); text-transform: uppercase; letter-spacing: 1.5px; padding: 4px 10px; background: rgba(56, 189, 248, 0.1); border-radius: 6px;">E-Commerce</span>
                        </div>
                        <h3 style="font-size: clamp(1.5rem, 4vw, 2rem); font-weight: 800; margin-bottom: 10px; color: var(--text-main); letter-spacing: -1px;">Royal Marketplace</h3>
                        <p style="color: var(--text-dim); margin-bottom: 25px; font-size: clamp(0.95rem, 2vw, 1.1rem); line-height: 1.5;">Premium digital commerce experience tailored for high-end luxury brands.</p>
                        <div style="display: flex; align-items: center; gap: 8px; color: var(--primary); font-weight: 700; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 1px;">
                            View Masterpiece <i data-lucide="arrow-right" style="width: 16px;"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        
        <!-- Pager Dots -->
        <div style="display: flex; justify-content: center; gap: 12px; margin-top: clamp(50px, 8vh, 80px);">
            <div style="width: 45px; height: 4px; border-radius: 10px; background: var(--primary); box-shadow: 0 0 15px rgba(56, 189, 248, 0.3);"></div>
            <div style="width: 12px; height: 4px; border-radius: 10px; background: var(--border-main);"></div>
            <div style="width: 12px; height: 4px; border-radius: 10px; background: var(--border-main);"></div>
        </div>
    </div>
</section>

<style>
    @media (max-width: 768px) {
        .projects-header { text-align: center; justify-content: center !important; }
        .projects-header div { max-width: 100% !important; }
        .project-pager { display: none !important; }
    }
</style>


