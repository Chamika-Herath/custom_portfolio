<section id="video-showcase" style="padding: clamp(80px, 12vh, 120px) 0; background: rgba(6, 11, 19, 0.3); position: relative; overflow: hidden; border-top: 1px solid rgba(16, 185, 129, 0.2);">
    <!-- Cinematic Overlay -->
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(to bottom, #000000 0%, rgba(0, 0, 0,0.55) 50%, #000000 100%); opacity: 0.95; z-index: 1; pointer-events: none;"></div>
    <!-- Decorative background element -->
    <div style="position: absolute; top: 50%; left: -10%; width: 500px; height: 500px; background: radial-gradient(circle, rgba(56, 189, 248, 0.05) 0%, transparent 70%); filter: blur(80px); z-index: 2; pointer-events: none;"></div>

    <div class="container" style="position: relative; z-index: 10; max-width: 1400px;">
        <div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 60px; gap: 30px; flex-wrap: wrap;" class="video-header">
            <div style="max-width: 700px;">
                <h2 class="reveal" style="font-size: clamp(2.2rem, 5vw, 3.5rem); font-weight: 800; color: var(--text-main); margin-bottom: 20px; line-height: 1.1;">
                    Visual <span style="color: var(--primary);">Masterpieces</span> <br> & Video Insights
                </h2>
                <p class="reveal" style="color: var(--text-dim); font-size: clamp(1rem, 2vw, 1.15rem); line-height: 1.6; font-weight: 400;">
                    Experience my digital creations in motion. From cinematic project reveals to technical deep-dives into my innovation process.
                </p>
            </div>
            <a href="https://www.youtube.com/@HeraForce-r4i" target="_blank" class="reveal" style="padding: 15px 35px; border: 1px solid var(--border-main); border-radius: 12px; color: var(--text-main); text-decoration: none; font-weight: 700; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px; display: flex; align-items: center; gap: 10px; background: var(--bg-card); transition: 0.3s;" onmouseover="this.style.background='var(--bg-card-hover)'; this.style.borderColor='var(--primary)'" onmouseout="this.style.background='var(--bg-card)'; this.style.borderColor='var(--border-main)'">
                YouTube Channel <i data-lucide="external-link" style="width: 16px;"></i>
            </a>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(min(100%, 450px), 1fr)); gap: 40px;" class="video-grid">
            <!-- Video 1 -->
            <div class="video-card reveal" style="background: var(--bg-card); border: 1px solid var(--border-main); border-radius: 28px; overflow: hidden; transition: 0.5s cubic-bezier(0.4, 0, 0.2, 1); cursor: pointer;" 
                 onclick="openVideoModal('https://www.youtube.com/embed/ScMzIvxBSi4', 'The HeraForce Design Protocol')"
                 onmouseover="this.style.borderColor='var(--primary)'; this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 40px var(--shadow-main)'; this.querySelector('.play-btn').style.transform='translate(-50%, -50%) scale(1.1)'; this.querySelector('.play-btn').style.background='var(--primary)'; this.querySelector('.play-btn').style.color='#000000'; this.querySelector('.play-btn').style.boxShadow='0 0 25px var(--primary)'; this.querySelector('.video-thumb').style.transform='scale(1.05)';" 
                 onmouseout="this.style.borderColor='var(--border-main)'; this.style.transform='translateY(0)'; this.style.boxShadow='none'; this.querySelector('.play-btn').style.transform='translate(-50%, -50%) scale(1)'; this.querySelector('.play-btn').style.background='rgba(0, 0, 0, 0.7)'; this.querySelector('.play-btn').style.color='var(--primary)'; this.querySelector('.play-btn').style.boxShadow='0 0 15px rgba(56, 189, 248, 0.2)'; this.querySelector('.video-thumb').style.transform='scale(1)';">
                <div style="position: relative; padding-top: 56.25%; background: #000; overflow: hidden;">
                    <img src="/assets/images/video_design_thumb.png" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; transition: 0.5s;" class="video-thumb">
                    <!-- Play Button Overlay -->
                    <div class="play-btn" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 70px; height: 70px; border-radius: 50%; background: rgba(0, 0, 0, 0.7); border: 2px solid var(--primary); display: flex; align-items: center; justify-content: center; color: var(--primary); transition: 0.4s cubic-bezier(0.4, 0, 0.2, 1); box-shadow: 0 0 15px rgba(56, 189, 248, 0.2); z-index: 5;">
                        <i data-lucide="play" style="width: 28px; height: 28px; fill: currentColor; margin-left: 4px;"></i>
                    </div>
                </div>
                <div style="padding: clamp(25px, 5vw, 35px);">
                    <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 15px;">
                        <span style="padding: 4px 12px; background: rgba(56, 189, 248, 0.1); color: var(--primary); font-size: 0.75rem; font-weight: 800; border-radius: 6px; text-transform: uppercase; letter-spacing: 1px;">Innovation</span>
                        <span style="color: var(--text-dim); font-size: 0.8rem;">• 12 Mins</span>
                    </div>
                    <h3 style="color: var(--text-main); font-size: clamp(1.2rem, 3vw, 1.5rem); font-weight: 700; margin-bottom: 12px; line-height: 1.3;">The HeraForce Design Protocol</h3>
                    <p style="color: var(--text-dim); font-size: 0.95rem; line-height: 1.6;">Discover how I combine obsidian aesthetics with royal gold accents to create unique digital experiences.</p>
                </div>
            </div>

            <!-- Video 2 -->
            <div class="video-card reveal" style="background: var(--bg-card); border: 1px solid var(--border-main); border-radius: 28px; overflow: hidden; transition: 0.5s cubic-bezier(0.4, 0, 0.2, 1); cursor: pointer;" 
                 onclick="openVideoModal('https://www.youtube.com/embed/M7lc1UVf-VE', 'SaaS Application Architecture')"
                 onmouseover="this.style.borderColor='var(--primary)'; this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 40px var(--shadow-main)'; this.querySelector('.play-btn').style.transform='translate(-50%, -50%) scale(1.1)'; this.querySelector('.play-btn').style.background='var(--primary)'; this.querySelector('.play-btn').style.color='#000000'; this.querySelector('.play-btn').style.boxShadow='0 0 25px var(--primary)'; this.querySelector('.video-thumb').style.transform='scale(1.05)';" 
                 onmouseout="this.style.borderColor='var(--border-main)'; this.style.transform='translateY(0)'; this.style.boxShadow='none'; this.querySelector('.play-btn').style.transform='translate(-50%, -50%) scale(1)'; this.querySelector('.play-btn').style.background='rgba(0, 0, 0, 0.7)'; this.querySelector('.play-btn').style.color='var(--primary)'; this.querySelector('.play-btn').style.boxShadow='0 0 15px rgba(56, 189, 248, 0.2)'; this.querySelector('.video-thumb').style.transform='scale(1)';">
                <div style="position: relative; padding-top: 56.25%; background: #000; overflow: hidden;">
                    <img src="/assets/images/video_saas_thumb.png" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; transition: 0.5s;" class="video-thumb">
                    <!-- Play Button Overlay -->
                    <div class="play-btn" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 70px; height: 70px; border-radius: 50%; background: rgba(0, 0, 0, 0.7); border: 2px solid var(--primary); display: flex; align-items: center; justify-content: center; color: var(--primary); transition: 0.4s cubic-bezier(0.4, 0, 0.2, 1); box-shadow: 0 0 15px rgba(56, 189, 248, 0.2); z-index: 5;">
                        <i data-lucide="play" style="width: 28px; height: 28px; fill: currentColor; margin-left: 4px;"></i>
                    </div>
                </div>
                <div style="padding: clamp(25px, 5vw, 35px);">
                    <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 15px;">
                        <span style="padding: 4px 12px; background: rgba(56, 189, 248, 0.1); color: var(--primary); font-size: 0.75rem; font-weight: 800; border-radius: 6px; text-transform: uppercase; letter-spacing: 1px;">Showcase</span>
                        <span style="color: var(--text-dim); font-size: 0.8rem;">• 8 Mins</span>
                    </div>
                    <h3 style="color: var(--text-main); font-size: clamp(1.2rem, 3vw, 1.5rem); font-weight: 700; margin-bottom: 12px; line-height: 1.3;">SaaS Application Architecture</h3>
                    <p style="color: var(--text-dim); font-size: 0.95rem; line-height: 1.6;">A deep dive into the engineering behind my high-performance SaaS platforms and innovations.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Luxury Fullscreen Video Modal -->
<div id="luxuryVideoModal" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.95); backdrop-filter: blur(25px); z-index: 9999; display: none; align-items: center; justify-content: center; opacity: 0; transition: opacity 0.4s ease;">
    <!-- Close Button -->
    <button onclick="closeVideoModal()" style="position: absolute; top: clamp(20px, 4vw, 40px); right: clamp(20px, 4vw, 40px); background: rgba(255, 255, 255, 0.05); border: 1px solid var(--border-main); color: var(--text-main); width: 60px; height: 60px; border-radius: 50%; cursor: pointer; display: flex; align-items: center; justify-content: center; transition: 0.3s; z-index: 10000;" onmouseover="this.style.background='var(--primary)'; this.style.color='#000000'; this.style.borderColor='var(--primary)';" onmouseout="this.style.background='rgba(255, 255, 255, 0.05)'; this.style.color='var(--text-main)'; this.style.borderColor='var(--border-main)';">
        <i data-lucide="x" style="width: 24px; height: 24px;"></i>
    </button>

    <!-- Modal Content Box -->
    <div style="width: 90%; max-width: 1000px; transform: scale(0.9); transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1); display: flex; flex-direction: column; gap: 20px;" id="modalContentBox">
        <!-- Badge Info -->
        <div style="background: rgba(56, 189, 248, 0.08); border: 1px solid rgba(56, 189, 248, 0.2); border-radius: 12px; padding: 12px 20px; display: flex; align-items: center; gap: 15px; justify-content: space-between; flex-wrap: wrap;">
            <div style="display: flex; align-items: center; gap: 10px;">
                <span style="width: 8px; height: 8px; border-radius: 50%; background: #38BDF8; display: inline-block; animation: pulseGlow 1.5s infinite;"></span>
                <span style="color: var(--primary); font-size: 0.8rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">Development Preview Player</span>
            </div>
            <span style="color: var(--text-dim); font-size: 0.8rem;">Note: Swap iframe src in projects.php / video-showcase.php once you publish your videos.</span>
        </div>

        <!-- Video Player Frame Wrapper -->
        <div style="position: relative; padding-top: 56.25%; background: #000; border-radius: 20px; overflow: hidden; border: 1px solid var(--border-main); box-shadow: 0 30px 60px rgba(0, 0, 0, 0.8), 0 0 40px rgba(56, 189, 248, 0.1);">
            <iframe id="modalIframe" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: none;" src="" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
        
        <!-- Video Title Overlay -->
        <h3 id="modalVideoTitle" style="color: var(--text-main); font-size: clamp(1.2rem, 3vw, 1.8rem); font-weight: 800; margin: 0; text-align: left; letter-spacing: -0.5px;"></h3>
    </div>
</div>

<script>
    function openVideoModal(embedUrl, videoTitle) {
        const modal = document.getElementById('luxuryVideoModal');
        const contentBox = document.getElementById('modalContentBox');
        const iframe = document.getElementById('modalIframe');
        const titleEl = document.getElementById('modalVideoTitle');

        // Set content
        iframe.src = embedUrl + "?autoplay=1&rel=0";
        titleEl.textContent = videoTitle;

        // Open animation
        modal.style.display = 'flex';
        // force layout reflow
        modal.offsetHeight; 
        modal.style.opacity = '1';
        contentBox.style.transform = 'scale(1)';

        // Ensure lucide icons are updated
        if (typeof lucide !== 'undefined') {
            lucide.createIcons();
        }
    }

    function closeVideoModal() {
        const modal = document.getElementById('luxuryVideoModal');
        const contentBox = document.getElementById('modalContentBox');
        const iframe = document.getElementById('modalIframe');

        // Close animation
        modal.style.opacity = '0';
        contentBox.style.transform = 'scale(0.9)';
        
        setTimeout(() => {
            modal.style.display = 'none';
            iframe.src = ''; // Stop video playback
        }, 400);
    }

    // Close on clicking outside modal content box
    document.getElementById('luxuryVideoModal').addEventListener('click', function(e) {
        if (e.target === this) {
            closeVideoModal();
        }
    });

    // Close on Escape key press
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeVideoModal();
        }
    });
</script>

<style>
    @media (max-width: 768px) {
        .video-header { text-align: center; justify-content: center !important; }
        .video-header div { max-width: 100% !important; }
    }
    
    @keyframes pulseGlow {
        0% { transform: scale(1); opacity: 0.6; box-shadow: 0 0 0 0 rgba(56, 189, 248, 0.4); }
        70% { transform: scale(1.1); opacity: 1; box-shadow: 0 0 0 8px rgba(56, 189, 248, 0); }
        100% { transform: scale(1); opacity: 0.6; box-shadow: 0 0 0 0 rgba(56, 189, 248, 0); }
    }
</style>


