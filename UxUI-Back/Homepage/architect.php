<section id="architect" style="padding: 120px 0; background: var(--bg-main); position: relative; overflow: hidden; border-top: 1px solid rgba(212, 188, 143, 0.1);">
    <div class="container" style="max-width: 1400px; width: 90%; margin: 0 auto; position: relative; z-index: 10;">
        
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center;" class="architect-grid">
            
            <!-- Left Side: Portrait -->
            <div class="reveal architect-img-wrapper" style="position: relative; border-radius: 20px; overflow: hidden; height: 600px; box-shadow: 20px 20px 60px rgba(0,0,0,0.8);">
                <div style="position: absolute; inset: 0; background: linear-gradient(0deg, var(--bg-main) 0%, transparent 40%); z-index: 2;"></div>
                <img src="/assets/images/user_suit.jpg" alt="Chamika Herath" style="width: 100%; height: 100%; object-fit: cover; filter: grayscale(50%) contrast(1.2); transition: 0.5s;" onmouseover="this.style.filter='grayscale(0%) contrast(1)'" onmouseout="this.style.filter='grayscale(50%) contrast(1.2)'">
            </div>

            <!-- Right Side: Content -->
            <div class="reveal architect-content" style="display: flex; flex-direction: column; gap: 30px;">
                <div style="display: flex; align-items: center; gap: 15px;">
                    <div style="height: 1px; width: 60px; background: var(--primary);"></div>
                    <span style="font-size: 0.9rem; color: var(--primary); font-weight: 800; letter-spacing: 2px; text-transform: uppercase;">The Architect</span>
                </div>
                
                <h2 style="font-size: clamp(2.5rem, 4vw, 3.8rem); font-weight: 900; color: #fff; line-height: 1.1; margin: 0; letter-spacing: -1px;">
                    Synthesizing physical art and <span style="color: var(--primary);">bespoke logic.</span>
                </h2>
                
                <p style="color: rgba(255,255,255,0.7); font-size: 1.1rem; line-height: 1.8; font-weight: 400; max-width: 500px;">
                    I am Chamika Herath, a multidisciplinary Systems Architect and Designer. My vision is to build platforms that aren't just functionally flawless, but emotionally engaging. By merging high-fidelity digital art with rigorous full-stack engineering, I create environments that redefine luxury performance on the web.
                </p>
                
                <div style="margin-top: 20px; display: inline-block;">
                    <!-- Elegant script signature simulation -->
                    <div style="font-family: 'Times New Roman', serif; font-size: 2.5rem; font-style: italic; color: rgba(212, 188, 143, 0.8);">
                        C. Herath
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<style>
    @media (max-width: 991px) {
        .architect-grid { grid-template-columns: 1fr !important; gap: 40px !important; }
        .architect-img-wrapper { height: 450px !important; order: 2; }
        .architect-content { order: 1; text-align: left; }
    }
</style>
