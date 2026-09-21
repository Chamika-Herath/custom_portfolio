<?php 
include_once __DIR__ . '/../imports/needs/session_setup.php'; 

// --- DYNAMIC SEO ENGINE ---
$base_url = "https://heraforce.com";
$current_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$clean_path = rtrim($current_path, '/');
$canonical_url = $base_url . ($clean_path ?: '');

// Default values (Homepage)
$page_title = $page_title ?? "HeraForce | Personal Brand, Innovations & Portfolio of Chamika Herath";
$page_desc = $page_desc ?? "Discover HeraForce, the personal brand of Chamika Herath. Explore a premium synthesis of digital art, high-end software, custom SaaS, and experimental innovations.";
$page_key = $page_key ?? "heraforce, chamika herath, personal portfolio, digital art, high-end software, custom saas, design innovations, ui/ux design, web developer sri lanka, kiu sri lanka, interactive creations";
$page_img = $page_img ?? "$base_url/assets/images/heraforce_og_preview_1200x630.png";
?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Search Engine Verification -->
<meta name="google-site-verification" content="ADD_YOUR_GOOGLE_CODE_HERE" />
<meta name="msvalidate.01" content="ADD_YOUR_BING_CODE_HERE" />
<meta name="yandex-verification" content="ADD_YOUR_YANDEX_CODE_HERE" />

<!-- Robots Control -->
<meta name="robots" content="noindex, nofollow">
<meta name="bingbot" content="noindex, nofollow">

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-594R9S58LB"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-594R9S58LB');
</script>

<!-- SEO Meta Tags -->
<title><?php echo $page_title; ?></title>
<link rel="canonical" href="<?php echo $canonical_url; ?>">
<meta name="description" content="<?php echo $page_desc; ?>">
<meta name="keywords" content="<?php echo $page_key; ?>">
<meta name="author" content="Chamika Herath">
<meta name="theme-color" content="#000000">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:locale" content="en_US">
<meta property="og:url" content="<?php echo $canonical_url; ?>">
<meta property="og:title" content="<?php echo $page_title; ?>">
<meta property="og:description" content="<?php echo $page_desc; ?>">
<meta property="og:image" content="<?php echo $page_img; ?>">
<meta property="og:image:secure_url" content="<?php echo $page_img; ?>">
<meta property="og:image:type" content="image/png">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:alt" content="HeraForce Preview">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="<?php echo $canonical_url; ?>">
<meta property="twitter:title" content="<?php echo $page_title; ?>">
<meta property="twitter:description" content="<?php echo $page_desc; ?>">
<meta property="twitter:image" content="<?php echo $page_img; ?>">
<meta property="twitter:image:alt" content="HeraForce Preview">
<link rel="image_src" href="<?php echo $page_img; ?>">

<!-- Favicon -->
<link rel="icon" type="image/png" href="/assets/images/heraforce_cyber_queen_logo_1778267022286J.png">
<link rel="shortcut icon" href="/assets/images/heraforce_cyber_queen_logo_1778267022286J.png">
<link rel="apple-touch-icon" sizes="180x180" href="/assets/images/heraforce_cyber_queen_logo_1778267022286J.png">
<meta itemprop="image" content="<?php echo $page_img; ?>">

<!-- Google Fonts: Inter & Outfit -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&family=Outfit:wght@400;700;900&display=swap" rel="stylesheet">

<!-- Lucide Icons -->
<script src="https://unpkg.com/lucide@latest"></script>

<!-- GSAP & Three.js Libraries -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

<style>
    :root {
        /* Brand Colors */
        --primary: #00e5ff; /* Cyan glowing */
        --primary-glow: rgba(0, 229, 255, 0.4);
        --gradient: linear-gradient(135deg, #00e5ff 0%, #0077ff 50%, #4a00e0 100%);
        
        /* Dark Theme Variables */
        --bg-main: #060b13; /* Deep navy/slate */
        --bg-card: rgba(255, 255, 255, 0.03); /* Slight lightening for cards */
        --bg-card-hover: rgba(255, 255, 255, 0.06); /* Brighter hover */
        --text-main: #ffffff;
        --text-dim: #9ba4b5; /* cool tinted light grey */
        --border-main: rgba(0, 229, 255, 0.15); /* Cyan tinted border */
        --nav-bg: rgba(6, 11, 19, 0.85); /* Navy nav background */
        --nav-sticky: rgba(6, 11, 19, 0.95); /* Deeper navy sticky background */
        --glass-bg: rgba(6, 11, 19, 0.6);
        --shadow-main: rgba(0, 0, 0, 0.8);
    }

    * { margin: 0; padding: 0; box-sizing: border-box; }
    
    html, body { 
        background-color: var(--bg-main);
        color: var(--text-main); 
        font-family: 'Inter', system-ui, -apple-system, sans-serif; 
        overflow-x: hidden;
        scroll-behavior: smooth;
    }

    /* Hardware-accelerated fixed global background layer */
    .global-bg-canvas {
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        background: url('/assets/images/hero_background.png') center/cover no-repeat;
        z-index: -10;
        pointer-events: none;
        will-change: transform;
    }

    h1, h2, h3, .font-heading { font-family: 'Outfit', sans-serif; }

    .container { width: 90%; max-width: 1300px; margin: 0 auto; }

    .glass { 
        background: var(--glass); 
        backdrop-filter: blur(20px); 
        -webkit-backdrop-filter: blur(20px);
        border: 1px solid var(--glass-border); 
        box-shadow: var(--shadow); 
    }

    .btn-primary { 
        background: var(--gradient); 
        color: #fff; 
        border-radius: 14px; 
        padding: 15px 30px; 
        border: none; 
        font-weight: 700; 
        cursor: pointer; 
        transition: 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        box-shadow: 0 10px 20px var(--primary-glow);
    }
    .btn-primary:hover { 
        transform: translateY(-5px) scale(1.02); 
        box-shadow: 0 15px 30px var(--primary-glow);
    }

    /* Animated background elements (Regal Glows) */
    .bg-glow {
        position: fixed;
        width: 700px;
        height: 700px;
        border-radius: 50%;
        background: radial-gradient(circle, var(--primary-glow) 0%, transparent 70%);
        filter: blur(120px);
        z-index: -1;
        pointer-events: none;
        opacity: 0.3;
    }

    /* Peacock Feather Decoration (Subtle) */
    .hera-pattern {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url('https://www.transparenttextures.com/patterns/royal-feather.png');
        opacity: 0.03;
        z-index: -1;
        pointer-events: none;
    }

    /* Reveal Animations (Premium Awwwards Blur Glide) */
    .reveal { 
        opacity: 0; 
        transform: translateY(50px); 
        filter: blur(8px);
        transition: opacity 1.4s cubic-bezier(0.16, 1, 0.3, 1), transform 1.4s cubic-bezier(0.16, 1, 0.3, 1), filter 1.4s cubic-bezier(0.16, 1, 0.3, 1); 
        will-change: transform, opacity, filter;
    }
    .reveal.active { 
        opacity: 1; 
        transform: translateY(0); 
        filter: blur(0);
    }

    /* Custom Scrollbar */
    ::-webkit-scrollbar { width: 10px; }
    ::-webkit-scrollbar-track { background: var(--bg-main); }
    ::-webkit-scrollbar-thumb { background: rgba(0, 229, 255, 0.2); border-radius: 5px; }
    ::-webkit-scrollbar-thumb:hover { background: var(--primary); }

    /* Responsive Grid Helper */
    .responsive-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 30px;
    }
    @media (min-width: 768px) {
        .responsive-grid { grid-template-columns: repeat(2, 1fr); }
    }
    @media (min-width: 1024px) {
        .responsive-grid { gap: 40px; }
    }
</style>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "WebSite",
      "@id": "<?php echo $base_url; ?>/#website",
      "url": "<?php echo $base_url; ?>/",
      "name": "HeraForce",
      "description": "Elite UI/UX Design & Web Development in Sri Lanka",
      "publisher": { "@id": "<?php echo $base_url; ?>/#organization" },
      "potentialAction": [{
        "@type": "SearchAction",
        "target": {
          "@type": "EntryPoint",
          "urlTemplate": "<?php echo $base_url; ?>/?s={search_term_string}"
        },
        "query-input": "required name=search_term_string"
      }]
    },
    {
      "@type": "Organization",
      "@id": "<?php echo $base_url; ?>/#organization",
      "name": "HeraForce",
      "url": "<?php echo $base_url; ?>/",
      "logo": {
        "@type": "ImageObject",
        "url": "<?php echo $base_url; ?>/assets/images/heraforce_cyber_queen_logo_1778267022286J.png"
      },
      "sameAs": [
        "https://www.facebook.com/HeraForceCreation",
        "https://www.youtube.com/@HeraForce-r4i",
        "https://www.linkedin.com/in/chamika-herath/",
        "https://github.com/Chamika-Herath"
      ]
    },
    {
      "@type": "Person",
      "name": "Chamika Herath",
      "url": "<?php echo $base_url; ?>/",
      "jobTitle": "Full Stack Developer & UI/UX Designer",
      "worksFor": { "@id": "<?php echo $base_url; ?>/#organization" },
      "alumniOf": {
        "@type": "CollegeOrUniversity",
        "name": "KIU Sri Lanka"
      }
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "<?php echo $base_url; ?>/"
        }
        <?php if($clean_path && $clean_path !== '/index'): ?>
        ,{
          "@type": "ListItem",
          "position": 2,
          "name": "<?php echo ucwords(str_replace(['-', '/'], [' ', ''], $clean_path)); ?>",
          "item": "<?php echo $canonical_url; ?>"
        }
        <?php endif; ?>
      ]
    }
  ]
}
</script>

<div class="bg-glow" style="bottom: -200px; right: -200px; background: radial-gradient(circle, rgba(155, 77, 255, 0.1) 0%, transparent 70%);"></div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Automated staggered transition delays for grids to create a high-end, cascading scroll flow
        const grids = document.querySelectorAll('.video-grid, .projects-grid, .responsive-grid, .contact-grid');
        grids.forEach(grid => {
            const reveals = grid.querySelectorAll('.reveal');
            reveals.forEach((el, index) => {
                el.style.transitionDelay = `${index * 0.12}s`;
            });
        });

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if(entry.isIntersecting) {
                    entry.target.classList.add('active');
                }
            });
        }, { threshold: 0.12 });
        
        document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
        
        if (typeof lucide !== 'undefined') {
            lucide.createIcons();
        }
    });
</script>


