<?php
// Strict CSR structure: Wait for JS to hit the API, no Server-Side PHP DB execution needed.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once './Meta_Tag/Meta_Tag.php'; ?>
    <title>HeraForce | Encrypted Load</title>
    
    <style>
        :root {
            --paper-bg: #e5d9c5;
            --ink-black: #1a1a1a;
            --ink-fade: #4a4a4a;
        }
        
        /* Force Vintage Background Globally for this specific page */
        html, body {
            background-color: var(--paper-bg) !important;
            background-image: url('https://www.transparenttextures.com/patterns/old-wall.png');
            color: var(--ink-black) !important;
        }

        .p-hero {
            position: relative;
            width: 100%;
            height: clamp(50vh, 65vh, 700px);
            display: flex;
            align-items: flex-end;
            padding: 80px 5%;
            margin-top: 0px; 
            overflow: hidden;
            border-bottom: 2px solid var(--ink-black);
        }

        /* Hero Image forced into Vintage multiply blend */
        #pd_hero {
            position: relative;
        }
        
        #pd_hero::before {
            content: '';
            position: absolute;
            inset: 0;
            background-image: inherit; /* Copies BG from parent */
            background-size: cover;
            background-position: center;
            filter: grayscale(100%) contrast(140%) sepia(40%);
            mix-blend-mode: multiply;
            opacity: 0.6;
            z-index: 0;
        }

        .p-hero-overlay {
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: linear-gradient(to top, var(--paper-bg) 0%, transparent 60%);
            z-index: 1;
        }

        .p-hero-content {
            position: relative;
            z-index: 2;
            max-width: 1400px;
            margin: 0 auto;
            width: 100%;
            text-align: center;
        }

        .p-badge {
            display: none; 
            background: transparent;
            border: 1px solid var(--ink-black);
            color: var(--ink-black);
            padding: 4px 15px;
            border-radius: 0;
            font-size: 0.85rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 20px;
        }

        .p-title {
            font-size: clamp(3rem, 8vw, 7.5rem);
            font-weight: 900;
            color: var(--ink-black);
            line-height: 1;
            margin: 0;
            letter-spacing: -2px;
            font-family: 'Outfit', sans-serif;
            text-shadow: none;
        }

        /* NEWSPAPER EDITORIAL ARCHITECTURE */
        .editorial-wrapper {
            padding: 60px 0 100px;
            background: transparent;
        }

        .nw-grid {
            column-count: 3;
            column-gap: 50px;
            column-rule: 1px solid var(--ink-black);
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 5%;
        }

        @media(max-width: 1200px) {
            .nw-grid { column-count: 2; column-gap: 40px; }
        }
        
        @media(max-width: 768px) {
            .nw-grid { column-count: 1; column-gap: 30px; column-rule: none; }
            .p-title { font-size: clamp(3rem, 12vw, 5rem); }
        }

        .nw-item {
            break-inside: avoid;
            page-break-inside: avoid;
            margin-bottom: 40px;
            display: inline-block; 
            width: 100%;
        }

        /* Text Typographies inside Editorial Flow */
        .p-highlight {
            font-size: clamp(1.6rem, 3vw, 2.2rem);
            color: var(--p-main-color);
            font-weight: 900;
            line-height: 1.35;
            margin: 0 0 25px 0;
            letter-spacing: -0.5px;
        }

        .p-body-text {
            color: var(--ink-fade);
            font-size: 1.1rem;
            line-height: 1.8;
            font-weight: 500;
            margin-bottom: 25px;
            font-family: 'Inter', serif;
        }

        /* Imagery Flow - Vintage Print Style with smooth colors */
        .nw-img {
            width: 100%;
            height: auto;
            border-radius: 4px;
            border: 1px solid var(--ink-black);
            box-shadow: none;
            display: block;
            filter: grayscale(40%) contrast(110%) sepia(20%);
            mix-blend-mode: multiply; /* Blends dark ink into paper */
            padding: 4px;
            background: rgba(255,255,255,0.1); 
            transition: 0.5s;
        }
        
        .nw-img:hover {
            filter: grayscale(0%) contrast(100%) sepia(0%);
            border-color: var(--p-main-color);
        }

        /* Editorial Feature Cards */
        .nw-feature-card {
            background: transparent;
            border: 1px solid var(--ink-black);
            border-radius: 4px;
            padding: 30px;
            position: relative;
            overflow: hidden;
            box-shadow: 6px 6px 0px rgba(0,0,0,0.1); /* Harsh offset shadow */
            margin-bottom: 10px;
        }

        .p-feat-icon {
            width: 55px; height: 55px;
            border-radius: 4px;
            margin-bottom: 20px;
            background-size: cover;
            background-position: center;
            border: 1px solid var(--ink-black);
            filter: grayscale(100%) contrast(150%);
            mix-blend-mode: multiply;
        }

        /* Reveal animations */
        .reveal {
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.8s ease-out;
        }
        
        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }
        
        .delay-1 { transition-delay: 0.1s; }
        .delay-2 { transition-delay: 0.2s; }
        
        /* Vintage Buttons */
        .p-btn-return {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 14px 40px;
            background: var(--ink-black);
            border: 2px solid var(--ink-black);
            color: var(--paper-bg);
            font-weight: 800;
            text-decoration: none;
            border-radius: 50px;
            font-size: 0.9rem;
            letter-spacing: 2px;
            text-transform: uppercase;
            transition: all 0.3s;
        }

        .p-btn-return:hover {
            background: transparent;
            color: var(--ink-black);
        }

        .p-btn-live {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 12px 30px;
            background: var(--ink-black);
            border: 2px solid var(--ink-black);
            color: var(--paper-bg);
            font-weight: 800;
            text-decoration: none;
            border-radius: 50px;
            font-size: 0.85rem;
            letter-spacing: 2px;
            text-transform: uppercase;
            transition: all 0.3s;
            margin-top: 30px;
        }

        .p-btn-live:hover {
            background: transparent;
            color: var(--ink-black);
        }
    </style>
</head>
<body>
    <?php include_once './UxUI-Back/Needs/header.php'; ?>

    <!-- Dynamic Loading Hero Base -->
    <section class="p-hero" id="pd_hero">
        <div class="p-hero-overlay"></div>
        <div class="p-hero-content reveal">
            <div class="p-badge" id="pd_client_badge"></div>
            <h1 class="p-title" id="pd_title">Loading Module...</h1>
            <a href="#" target="_blank" id="pd_live_btn" class="p-btn-live" style="display:none;">VIEW LIVE PROJECT <i data-lucide="external-link" style="width: 18px; margin-left: 8px;"></i></a>
        </div>
    </section>

    <!-- Unified Editorial Flow Engine -->
    <section class="editorial-wrapper">
        <div class="nw-grid" id="pd_editorial_flow">
            <!-- Interleaved Text, Imagery, and Architecture dynamically generated by JS -->
            <div class="nw-item reveal delay-1">
                <h3 class="p-highlight">Retrieving Database Parameters...</h3>
                <p class="p-body-text">Please wait while the project nodes are decoded and integrated into the primary newspaper flow securely.</p>
            </div>
        </div>
    </section>

    <!-- Return action -->
    <div class="reveal" style="text-align: center; margin-bottom: 120px;">
        <a href="index.php" class="p-btn-return"><span>RETURN SECURELY</span></a>
    </div>

    <?php include_once './UxUI-Back/Needs/footer.php'; ?>
    <?php include_once './UxUI-Back/Homepage/JS/project_details_JS.php'; ?>
</body>
</html>
