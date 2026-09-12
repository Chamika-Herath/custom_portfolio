<section id="contact" style="padding: 120px 0; background: transparent; position: relative; overflow: hidden;">
    <!-- Background Decor -->
    <div style="position: absolute; bottom: -10%; left: -10%; width: 400px; height: 400px; background: radial-gradient(circle, var(--primary-glow) 0%, transparent 70%); filter: blur(100px); opacity: 0.15; z-index: 1;"></div>

    <div class="container" style="position: relative; z-index: 10;">
        <div style="display: grid; grid-template-columns: 1fr; gap: 80px; align-items: center;" class="contact-grid">
            <div>
                <div style="font-weight: 800; text-transform: uppercase; letter-spacing: 2px; color: var(--primary); font-size: 0.85rem; margin-bottom: 20px;">Contact Me</div>
                <h2 class="reveal" style="font-size: clamp(2.2rem, 5vw, 3.5rem); font-weight: 900; line-height: 1.1; margin-bottom: 30px; letter-spacing: -2px; color: var(--text-main);">Let's discuss <br><span style="color: var(--primary);">your vision.</span></h2>
                <p style="color: var(--text-dim); font-size: 1.1rem; line-height: 1.7; margin-bottom: 45px;">
                    Whether you have a specific project in mind or just want to explore creative possibilities, feel free to reach out. I am always open to discussing new ideas, innovations, or collaborations.
                </p>

                <div style="display: grid; gap: 30px;">
                    <div style="display: flex; align-items: center; gap: 20px;">
                        <div style="width: 60px; height: 60px; background: var(--bg-card); border: 1px solid var(--border-main); border-radius: 20px; display: flex; align-items: center; justify-content: center; color: var(--primary); backdrop-filter: blur(10px);">
                            <i data-lucide="mail" style="width: 22px; height: 22px;"></i>
                        </div>
                        <div>
                            <div style="font-size: 0.8rem; font-weight: 800; text-transform: uppercase; color: var(--text-dim); letter-spacing: 0.5px;">Email Address</div>
                            <div style="font-weight: 700; font-size: 1.1rem; color: var(--text-main);">chamika@heraforce.com</div>
                        </div>
                    </div>
                    <div style="display: flex; align-items: center; gap: 20px;">
                        <div style="width: 60px; height: 60px; background: var(--bg-card); border: 1px solid var(--border-main); border-radius: 20px; display: flex; align-items: center; justify-content: center; color: var(--primary); backdrop-filter: blur(10px);">
                            <i data-lucide="map-pin" style="width: 22px; height: 22px;"></i>
                        </div>
                        <div>
                            <div style="font-size: 0.8rem; font-weight: 800; text-transform: uppercase; color: var(--text-dim); letter-spacing: 0.5px;">Current Location</div>
                            <div style="font-weight: 700; font-size: 1.1rem; color: var(--text-main);">Colombo, Sri Lanka</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="reveal" style="background: var(--bg-card); padding: clamp(30px, 5vw, 60px); border-radius: 40px; border: 1px solid var(--border-main); box-shadow: 0 30px 60px var(--shadow-main); backdrop-filter: blur(10px);">
                <form action="api/contact_process.php" method="POST" style="display: grid; gap: 25px;">
                    <div style="display: grid; gap: 10px;">
                        <label style="font-size: 0.85rem; font-weight: 800; color: var(--text-dim); text-transform: uppercase; letter-spacing: 1px;">Full Name</label>
                        <input type="text" name="name" required placeholder="Hera Force" style="width: 100%; background: rgba(255, 255, 255, 0.02); border: 1px solid var(--border-main); padding: 20px; border-radius: 15px; font-weight: 600; outline: none; color: var(--text-main); transition: 0.3s;" onfocus="this.style.borderColor='var(--primary)'; this.style.background='rgba(255, 255, 255, 0.05)'" onblur="this.style.borderColor='var(--border-main)'; this.style.background='rgba(255, 255, 255, 0.02)'">
                    </div>
                    <div style="display: grid; gap: 10px;">
                        <label style="font-size: 0.85rem; font-weight: 800; color: var(--text-dim); text-transform: uppercase; letter-spacing: 1px;">Email Address</label>
                        <input type="email" name="email" required placeholder="contact@heraforce.com" style="width: 100%; background: rgba(255, 255, 255, 0.02); border: 1px solid var(--border-main); padding: 20px; border-radius: 15px; font-weight: 600; outline: none; color: var(--text-main); transition: 0.3s;" onfocus="this.style.borderColor='var(--primary)'; this.style.background='rgba(255, 255, 255, 0.05)'" onblur="this.style.borderColor='var(--border-main)'; this.style.background='rgba(255, 255, 255, 0.02)'">
                    </div>
                    <div style="display: grid; gap: 10px;">
                        <label style="font-size: 0.85rem; font-weight: 800; color: var(--text-dim); text-transform: uppercase; letter-spacing: 1px;">Message</label>
                        <textarea name="message" required placeholder="Tell me about your vision..." style="width: 100%; background: rgba(255, 255, 255, 0.02); border: 1px solid var(--border-main); padding: 20px; border-radius: 15px; font-weight: 600; outline: none; color: var(--text-main); transition: 0.3s; height: 150px; resize: none;" onfocus="this.style.borderColor='var(--primary)'; this.style.background='rgba(255, 255, 255, 0.05)'" onblur="this.style.borderColor='var(--border-main)'; this.style.background='rgba(255, 255, 255, 0.02)'"></textarea>
                    </div>
                    <button type="submit" class="btn-primary" style="margin-top: 10px; width: 100%; justify-content: center; font-size: 1.1rem; padding: 20px;">Send Message <i data-lucide="send"></i></button>
                </form>
            </div>
        </div>
    </div>
</section>

<style>
    @media (min-width: 1024px) {
        .contact-grid { grid-template-columns: 1fr 1.3fr !important; gap: 80px !important; }
    }
</style>


