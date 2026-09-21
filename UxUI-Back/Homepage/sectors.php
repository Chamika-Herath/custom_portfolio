<section id="projects" style="padding: 100px 0; background: rgba(6, 11, 19, 0.1); position: relative; overflow: hidden; border-top: 1px solid rgba(0, 229, 255, 0.1);">
    <div style="max-width: 1600px; width: 100%; margin: 0 auto; position: relative; z-index: 10;">
        
        <div style="padding: 0 5%; margin-bottom: 50px; text-align: center;">
            <h2 class="reveal" style="font-size: clamp(2rem, 4vw, 3rem); font-weight: 800; color: var(--primary); letter-spacing: -1px; margin: 0;">Masterpieces</h2>
            <p style="color: var(--text-dim); margin-top: 15px; font-size: 1rem; max-width: 600px; margin-left: auto; margin-right: auto;">Explore our curated selection of high-end digital products, SaaS applications, and interactive artwork.</p>
        </div>

        <!-- 3D Coverflow Slider Container -->
        <div class="swiper-container mySwiper" style="width: 100%; padding-top: 20px; padding-bottom: 70px;">
            <div class="swiper-wrapper" id="homepage_dynamic_slider">
                <!-- Dynamically hydrated slides via JS go here -->
            </div>
            
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Navigation -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
        
        <!-- Controls area -->
        <div style="display: flex; flex-direction: column; align-items: center; margin-top: 20px;">
            <div class="reveal">
                <a href="art-creations<?php echo isset($online_offline_extention) ? $online_offline_extention : ''; ?>" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 40px; background: transparent; border: 1px solid rgba(212, 188, 143, 0.4); color: var(--primary); text-decoration: none; font-weight: 700; border-radius: 8px; font-size: 0.85rem; transition: 0.3s; text-transform: uppercase; letter-spacing: 1.5px;" onmouseover="this.style.background='rgba(212, 188, 143, 0.1)'; this.style.borderColor='var(--primary)';" onmouseout="this.style.background='transparent'; this.style.borderColor='rgba(212, 188, 143, 0.4)';">
                    VIEW MORE PORTFOLIOS
                </a>
            </div>
        </div>
        
    </div>
</section>

<!-- Include Swiper CDN -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<style>
    /* Swiper Base Dimensions */
    .swiper-container {
        width: 100%;
        overflow: hidden; /* Necessary for swiper to hide overflow */
    }

    .swiper-slide {
        background-position: center;
        background-size: cover;
        width: 340px; 
        height: 420px;
        border-radius: 16px;
        overflow: hidden;
        border: 1px solid rgba(212,188,143,0.3);
        box-shadow: 0 25px 50px rgba(0,0,0,0.5);
        position: relative;
        transition: border-color 0.4s;
    }

    .swiper-slide-active {
        border-color: var(--primary);
        box-shadow: 0 40px 70px rgba(0,0,0,0.7), 0 0 30px rgba(212,188,143,0.3);
    }

    /* Card Details Overlay */
    .card-overlay {
        position: absolute;
        bottom: 0; left: 0; width: 100%; 
        padding: 30px 25px 25px; 
        background: linear-gradient(to top, rgba(231,221,196,0.98) 0%, rgba(231,221,196,0.85) 65%, transparent 100%); 
        display: flex; flex-direction: column; justify-content: flex-end;
        transition: 0.4s;
    }
    
    /* Modify specific slide backgrounds manually within the markup if needed, but styling text directly: */
    .card-category { font-size: 0.7rem; color: #132a1e; font-weight: 800; text-transform: uppercase; letter-spacing: 1.2px; margin-bottom: 4px; }
    .card-title { font-size: 1.4rem; color: #132a1e; font-weight: 900; margin: 0 0 8px; }
    .card-desc { color: #3b423f; font-size: 0.85rem; margin-bottom: 12px; font-weight: 500; line-height: 1.4; }
    .card-action a { color: #132a1e; font-weight: 800; font-size: 0.75rem; text-decoration: none; display: flex; align-items: center; gap: 4px; }
    
    /* Swiper Navigation Customization to match Matte Gold */
    .swiper-button-next, .swiper-button-prev {
        color: var(--bg-main) !important;
        background: var(--primary);
        width: 50px !important;
        height: 50px !important;
        border-radius: 50%;
        box-shadow: 0 10px 20px rgba(0,0,0,0.4);
        transition: 0.3s;
        border: 2px solid rgba(255,255,255,0.2);
    }
    .swiper-button-next:hover, .swiper-button-prev:hover {
        background: #fff;
        transform: scale(1.1);
    }
    .swiper-button-next::after, .swiper-button-prev::after {
        font-size: 20px !important;
        font-weight: 900;
    }

    /* Swiper Pagination */
    .swiper-pagination-bullet {
        background: rgba(255,255,255,0.3) !important;
        width: 12px !important;
        height: 12px !important;
        opacity: 1 !important;
        transition: 0.3s;
        border: 1px solid rgba(212,188,143,0.5);
    }
    .swiper-pagination-bullet-active {
        background: var(--primary) !important;
        transform: scale(1.3);
        box-shadow: 0 0 10px rgba(212, 188, 143, 0.6);
        border: 1px solid var(--bg-main);
    }

    /* Responsive adjustments */
    @media (max-width: 1024px) {
        .swiper-slide {
            width: 320px;
            height: 400px;
        }
    }

    @media (max-width: 768px) {
        .swiper-slide {
            width: 280px;
            height: 380px;
        }
        .card-title { font-size: 1.4rem; }
        .card-overlay { padding: 30px 20px 20px; }
        .swiper-button-next, .swiper-button-prev {
            display: none !important; /* Hide arrows on mobile to reduce clutter, use swipe */
        }
    }
</style>

<?php include_once 'UxUI-Back/Homepage/JS/sectors_JS.php'; ?>
