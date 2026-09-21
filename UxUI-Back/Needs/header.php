<!-- Global canvas placeholder if needed -->
<div class="global-bg-canvas"></div>

<!-- SLdrawing Style Dynamic Island Header (Re-architected) -->
<header id="main-header" style="position: fixed; top: 25px; left: 50%; transform: translateX(-50%); z-index: 1000; background: linear-gradient(135deg, rgba(6, 11, 19, 0.85) 0%, rgba(0, 229, 255, 0.15) 100%); backdrop-filter: blur(25px); -webkit-backdrop-filter: blur(25px); border: 1px solid rgba(0, 229, 255, 0.2); border-radius: 100px; padding: 12px 25px; box-shadow: 0 30px 60px rgba(0,0,0,0.6), 0 0 30px rgba(0, 229, 255, 0.15); transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1), top 0.4s cubic-bezier(0.16, 1, 0.3, 1); display: flex; align-items: center; justify-content: space-between; width: 92%; max-width: 1000px;">
    
    <!-- Logo -->
    <a href="index<?php echo isset($online_offline_extention) ? $online_offline_extention : ''; ?>" class="header-logo" style="text-decoration: none; display: flex; align-items: center; gap: 12px;">
        <img src="/assets/images/heraforce_cyber_queen_logo_1778267022286J.png" alt="HeraForce Logo" style="height: 34px; width: auto; border-radius: 50%; padding: 2px;">
        <span style="font-family: 'Outfit', sans-serif; font-size: 1.15rem; font-weight: 900; letter-spacing: 1px; color: #ffffff;">HERAFORCE</span>
    </a>

    <!-- Central Pill Navigation -->
    <nav class="desktop-nav">
        <ul style="list-style: none; display: flex; gap: 15px; align-items: center; margin: 0; padding: 0;">
            <li><a href="index<?php echo isset($online_offline_extention) ? $online_offline_extention : ''; ?>" class="nav-pill-link">Home</a></li>
            <li class="dropdown" style="position: relative;">
                <a href="#" class="nav-pill-link">About <i data-lucide="chevron-down" style="width: 14px; opacity: 0.6;"></i></a>
                <div class="dropdown-content">
                    <a href="about-heraforce<?php echo isset($online_offline_extention) ? $online_offline_extention : ''; ?>">HeraForce Story</a>
                    <a href="art-creations<?php echo isset($online_offline_extention) ? $online_offline_extention : ''; ?>">Art & Creations</a>
                </div>
            </li>
            <li class="dropdown" style="position: relative;">
                <a href="#" class="nav-pill-link">Portfolio <i data-lucide="chevron-down" style="width: 14px; opacity: 0.6;"></i></a>
                <div class="dropdown-content">
                    <a href="saas-apps<?php echo isset($online_offline_extention) ? $online_offline_extention : ''; ?>">SaaS Applications</a>
                    <a href="innovations<?php echo isset($online_offline_extention) ? $online_offline_extention : ''; ?>">Innovations</a>
                    <a href="client-works<?php echo isset($online_offline_extention) ? $online_offline_extention : ''; ?>">Client Works</a>
                </div>
            </li>
            <li><a href="#contact" class="nav-pill-link">Contact</a></li>
        </ul>
    </nav>

    <!-- Right Side Utility -->
    <div style="display: flex; align-items: center; gap: 15px;">
        <!-- Login Button -->
        <a href="/UxUi/Main/User-Login.php" class="desktop-nav btn-login-pill">
            <i data-lucide="user" style="width: 16px;"></i> Login
        </a>
        
        <!-- Hamburger for Mobile -->
        <button class="mobile-toggle" onclick="toggleMobileMenu()" style="display: none; background: rgba(19, 42, 30, 0.1); border: 1px solid rgba(19, 42, 30, 0.3); padding: 8px; border-radius: 50%; color: #132a1e; cursor: pointer; transition: 0.3s;">
            <i data-lucide="menu"></i>
        </button>
    </div>
</header>

<!-- Mobile Menu Overlay Framework (Retained structure) -->
<div id="mobile-menu-overlay" class="mobile-menu-overlay">
    <div class="mobile-menu-content">
        <!-- Orange Cyberqueen Watermark -->
        <img src="/assets/images/heraforce_cyber_queen_logo_1778267022286J.png" alt="Watermark" style="position: absolute; bottom: -50px; right: -50px; width: 300px; opacity: 0.04; filter: drop-shadow(0 0 15px rgba(56, 189, 248, 0.4)); pointer-events: none; z-index: 1;">
        
        <div class="mobile-menu-header" style="position: relative; z-index: 10;">
            <a href="index<?php echo isset($online_offline_extention) ? $online_offline_extention : ''; ?>" style="text-decoration: none; display: flex; align-items: center; gap: 15px;">
                <img src="/assets/images/heraforce_cyber_queen_logo_1778267022286J.png" alt="Logo" style="height: 38px; width: auto;">
                <span style="font-family: 'Outfit', sans-serif; font-size: 1.3rem; font-weight: 900; color: #fff;">HERAFORCE</span>
            </a>
            <button onclick="toggleMobileMenu()" style="background: none; border: none; color: #38bdf8; cursor: pointer; padding: 5px;">
                <i data-lucide="x" style="width:24px; height:24px;"></i>
            </button>
        </div>
        
        <nav class="mobile-nav-links" style="position: relative; z-index: 10;">
            <a href="index<?php echo isset($online_offline_extention) ? $online_offline_extention : ''; ?>" onclick="toggleMobileMenu()">Home</a>
            
            <div class="mobile-dropdown">
                <div class="mobile-dropdown-trigger" onclick="this.parentElement.classList.toggle('active')">
                    About <i data-lucide="chevron-down"></i>
                </div>
                <div class="mobile-dropdown-links">
                    <a href="about-heraforce<?php echo isset($online_offline_extention) ? $online_offline_extention : ''; ?>" onclick="toggleMobileMenu()">HeraForce Story</a>
                    <a href="art-creations<?php echo isset($online_offline_extention) ? $online_offline_extention : ''; ?>" onclick="toggleMobileMenu()">Art & Creations</a>
                </div>
            </div>
            
            <div class="mobile-dropdown">
                <div class="mobile-dropdown-trigger" onclick="this.parentElement.classList.toggle('active')">
                    Portfolio <i data-lucide="chevron-down"></i>
                </div>
                <div class="mobile-dropdown-links">
                    <a href="saas-apps<?php echo isset($online_offline_extention) ? $online_offline_extention : ''; ?>" onclick="toggleMobileMenu()">SaaS Applications</a>
                    <a href="innovations<?php echo isset($online_offline_extention) ? $online_offline_extention : ''; ?>" onclick="toggleMobileMenu()">Innovations</a>
                    <a href="client-works<?php echo isset($online_offline_extention) ? $online_offline_extention : ''; ?>" onclick="toggleMobileMenu()">Client Works</a>
                </div>
            </div>
            <a href="#contact" onclick="toggleMobileMenu()">Contact</a>
            
            <div style="margin-top: 20px; padding-top: 25px; border-top: 1px solid rgba(56, 189, 248, 0.15);">
                <a href="/UxUi/Main/User-Login.php" onclick="toggleMobileMenu()" style="display: flex; align-items: center; gap: 10px; color: #38bdf8; font-weight: 800;">
                    <i data-lucide="user"></i> Access Terminal
                </a>
            </div>
        </nav>
    </div>
</div>

<style>
    /* ---------------------------------
       DYNAMIC ISLAND & LOGO HOVER STYLES
       --------------------------------- */
    .header-logo img {
        transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275), filter 0.4s;
        filter: drop-shadow(0 0 4px rgba(56, 189, 248, 0.2));
    }
    .header-logo:hover img {
        transform: scale(1.1) rotate(5deg);
        filter: drop-shadow(0 0 15px rgba(56, 189, 248, 0.6));
    }
    .header-logo span {
        transition: color 0.3s, text-shadow 0.3s;
    }
    .header-logo:hover span {
        color: #38bdf8 !important;
        text-shadow: 0 0 12px rgba(56, 189, 248, 0.4);
    }

    /* Capsule Pill Links */
    .nav-pill-link {
        color: rgba(255, 255, 255, 0.85); /* Light cool text */
        text-decoration: none;
        font-weight: 600;
        font-size: 0.9rem;
        display: flex;
        align-items: center;
        gap: 6px;
        padding: 8px 18px;
        border-radius: 100px;
        transition: 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        border: 1px solid transparent;
    }
    .nav-pill-link:hover {
        color: #ffffff;
        background: rgba(0, 229, 255, 0.15);
        border: 1px solid rgba(0, 229, 255, 0.3);
        box-shadow: 0 0 15px rgba(0, 229, 255, 0.1);
    }
    
    /* Login Action Button inside Capsule */
    .btn-login-pill {
        text-decoration: none; 
        display: flex; 
        align-items: center; 
        gap: 8px; 
        padding: 10px 22px; 
        border-radius: 100px; 
        background: rgba(0, 229, 255, 0.1); 
        border: 1px solid rgba(0, 229, 255, 0.3); 
        color: #00e5ff; 
        font-size: 0.9rem; 
        font-weight: 700; 
        transition: 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }
    .btn-login-pill:hover {
        background: #00e5ff;
        color: #060b13;
        box-shadow: 0 8px 25px rgba(0, 229, 255, 0.3);
        transform: translateY(-2px);
    }
    
    /* Dropdown Hover Rotations */
    .dropdown:hover .nav-pill-link i {
        transform: rotate(180deg);
        color: #ffffff;
        opacity: 1 !important;
    }
    .dropdown .nav-pill-link i {
        transition: transform 0.4s ease, color 0.4s ease;
    }

    /* Luxury Dropdown Container - Detached from pill */
    .dropdown-content {
        display: none;
        position: absolute;
        top: calc(100% + 15px); /* Detach gap */
        left: 50%;
        transform: translateX(-50%);
        min-width: 240px;
        background: rgba(6, 11, 19, 0.96); /* Dark Navy Background */
        backdrop-filter: blur(25px);
        -webkit-backdrop-filter: blur(25px);
        border: 1px solid var(--primary);
        border-radius: 16px;
        padding: 12px 0;
        box-shadow: 0 25px 50px rgba(0,0,0,0.8), 0 0 20px rgba(0, 229, 255, 0.15);
        z-index: 10000;
        animation: dropSlideUp 0.35s cubic-bezier(0.16, 1, 0.3, 1);
    }
    
    /* Hover Bridge */
    .dropdown::after {
        content: "";
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        height: 25px;
        z-index: 9999;
    }
    .dropdown:hover .dropdown-content { display: block; }
    
    .dropdown-content a {
        color: rgba(255, 255, 255, 0.75);
        padding: 14px 25px;
        text-decoration: none;
        display: flex;
        align-items: center;
        font-size: 0.9rem;
        font-weight: 500;
        position: relative;
        transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }
    .dropdown-content a::before {
        content: '';
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: var(--primary);
        position: absolute;
        left: 12px;
        opacity: 0;
        transform: scale(0);
        transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }
    .dropdown-content a:hover {
        background: rgba(0, 229, 255, 0.08); /* cyan tint */
        color: #fff;
        padding-left: 32px;
        text-shadow: 0 0 8px rgba(0, 229, 255, 0.3);
    }
    .dropdown-content a:hover::before {
        opacity: 1;
        transform: scale(1);
        box-shadow: 0 0 10px var(--primary);
    }
    
    @keyframes dropSlideUp {
        from { opacity: 0; transform: translate(-50%, 15px); }
        to { opacity: 1; transform: translate(-50%, 0); }
    }

    @media (max-width: 1024px) {
        #main-header {
            width: 95% !important;
            border-radius: 100px !important;
        }
        .desktop-nav { display: none !important; }
        .mobile-toggle { display: block !important; }
    }
    
    /* ---------------------------------
       MOBILE MENU OVERLAY
       --------------------------------- */
    .mobile-menu-overlay {
        position: fixed; top: 0; right: -100%; width: 100%; height: 100vh;
        background: rgba(0, 0, 0, 0.98); backdrop-filter: blur(20px);
        z-index: 10001; transition: 0.5s cubic-bezier(0.77, 0.2, 0.05, 1.0);
        display: flex; justify-content: flex-end;
    }
    .mobile-menu-overlay.active { right: 0; }
    
    .mobile-menu-content {
        width: 100%; max-width: 340px; height: 100%; padding: 40px 30px;
        display: flex; flex-direction: column;
        border-left: 1px solid rgba(56, 189, 248, 0.15);
        background: #08080a;
        box-shadow: -20px 0 50px rgba(0,0,0,0.7);
    }
    .mobile-menu-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 50px; }
    .mobile-nav-links { display: flex; flex-direction: column; gap: 30px; }
    
    .mobile-nav-links > a, .mobile-dropdown-trigger {
        color: #fff; text-decoration: none; font-size: 1.2rem; font-weight: 700;
        opacity: 0.85; transition: 0.3s; display: flex; align-items: center; justify-content: space-between; cursor: pointer;
    }
    .mobile-nav-links > a:hover, .mobile-dropdown-trigger:hover { opacity: 1; color: #38bdf8; text-shadow: 0 0 15px rgba(234,88,12,0.4); }
    
    .mobile-dropdown-links {
        max-height: 0; overflow: hidden; transition: 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        padding-left: 20px; display: flex; flex-direction: column; gap: 20px;
    }
    .mobile-dropdown.active .mobile-dropdown-links { max-height: 500px; margin-top: 25px; }
    .mobile-dropdown.active .mobile-dropdown-trigger i { transform: rotate(180deg); color: #38bdf8; }
    .mobile-dropdown-trigger i { transition: 0.4s; width: 20px; }
    .mobile-dropdown-links a { font-size: 1.05rem; font-weight: 500; opacity: 0.65; color: #fff; text-decoration: none; transition: 0.3s; }
    .mobile-dropdown-links a:hover { opacity: 1; color: #38bdf8; }
</style>

<!-- Scroll Tracking Logic for Dynamic Island -->
<script>
    function toggleMobileMenu() {
        const overlay = document.getElementById('mobile-menu-overlay');
        overlay.classList.toggle('active');
        document.body.style.overflow = overlay.classList.contains('active') ? 'hidden' : 'auto';
        if(overlay.classList.contains('active') && typeof lucide !== 'undefined') { lucide.createIcons(); }
    }

    // Scroll Tracking for Dynamic Island Floating Hide/Reveal
    document.addEventListener('DOMContentLoaded', () => {
        let lastScrollY = window.scrollY;
        const header = document.getElementById('main-header');
        
        window.addEventListener('scroll', () => {
            const currentScrollY = window.scrollY;
            
            // If scrolling down aggressively, hide the island slightly upwards
            if (currentScrollY > lastScrollY && currentScrollY > 150) {
                header.style.transform = 'translate(-50%, -150%)';
            } else {
                // Scrolling up -> reveal island
                header.style.transform = 'translate(-50%, 0)';
            }
            
            // Subtle compacting when not at the absolute top
            if (currentScrollY > 50) {
                header.style.background = 'linear-gradient(135deg, rgba(6,11,19,0.95) 0%, rgba(0,119,255,0.7) 100%)';
                header.style.padding = '10px 25px';
            } else {
                header.style.background = 'linear-gradient(135deg, rgba(6, 11, 19, 0.85) 0%, rgba(0, 229, 255, 0.15) 100%)';
                header.style.padding = '12px 25px';
            }
            
            lastScrollY = currentScrollY;
        }, { passive: true });
    });
</script>
