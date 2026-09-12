<!-- ===================================================================
     hera-sidebar — Reusable sidebar component (Heraforce Admin)
     =================================================================== -->

<style>
  :root {
    --hera-sidebar-bg: rgba(10, 12, 18, 0.85);
    --hera-sidebar-gold: var(--primary, #d1b88e);
    --hera-sidebar-gold-hover: rgba(212, 188, 143, 0.15);
    --hera-sidebar-gold-active: rgba(212, 188, 143, 0.25);
    --hera-sidebar-text: rgba(255, 255, 255, 0.8);
    --hera-sidebar-text-active: #ffffff;
    --hera-sidebar-border: rgba(212, 188, 143, 0.15);
    --hera-sidebar-radius-sm: 8px;
  }

  .hera-sidebar {
    grid-area: sidebar;
    background: var(--hera-sidebar-bg);
    backdrop-filter: blur(25px);
    -webkit-backdrop-filter: blur(25px);
    color: var(--hera-sidebar-text);
    display: flex;
    flex-direction: column;
    padding: 26px 18px;
    position: sticky;
    top: 0;
    height: 100vh;
    font-family: 'Outfit', 'Inter', sans-serif;
    box-sizing: border-box;
    border-right: 1px solid var(--hera-sidebar-border);
  }

  .hera-sidebar-brand {
    display: flex;
    justify-content: flex-start;
    align-items: center;
    padding: 18px 0 26px 18px;
    margin-bottom: 22px;
    border-bottom: 1px solid var(--hera-sidebar-border);
    text-decoration: none;
  }

  .hera-sidebar-brand-text {
    line-height: 1.2;
  }
  
  .hera-sidebar-brand-text strong {
    display: block;
    font-weight: 700;
    font-size: 16px;
    letter-spacing: 0.05em;
    color: var(--hera-sidebar-gold);
    text-transform: uppercase;
  }
  
  .hera-sidebar-brand-text span {
    display: block;
    font-size: 10px;
    letter-spacing: 0.15em;
    text-transform: uppercase;
    color: rgba(255, 255, 255, 0.4);
    margin-top: 4px;
  }

  .hera-sidebar-nav {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    gap: 6px;
    flex: 1;
  }

  .hera-sidebar-nav-item a {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 12px 14px;
    border-radius: var(--hera-sidebar-radius-sm);
    color: var(--hera-sidebar-text);
    text-decoration: none;
    font-size: 14px;
    font-weight: 500;
    border-left: 3px solid transparent;
    transition: all 0.2s ease;
  }

  .hera-sidebar-nav-item a:hover {
    background: var(--hera-sidebar-gold-hover);
    color: var(--hera-sidebar-text-active);
  }

  .hera-sidebar-nav-item.hera-sidebar-active a {
    background: var(--hera-sidebar-gold-active);
    color: var(--hera-sidebar-gold);
    border-left-color: var(--hera-sidebar-gold);
    font-weight: 600;
  }

  .hera-sidebar-nav-icon {
    width: 18px;
    height: 18px;
    flex: 0 0 18px;
    opacity: 0.9;
  }

  .hera-sidebar-foot {
    padding-top: 24px;
    margin-top: 18px;
    border-top: 1px solid var(--hera-sidebar-border);
    font-size: 11px;
    color: rgba(255, 255, 255, 0.3);
    line-height: 1.6;
    letter-spacing: 0.02em;
  }

  @media (max-width: 900px) {
    .hera-sidebar {
      display: none;
    }
  }
</style>

<aside class="hera-sidebar">
  <a href="#" class="hera-sidebar-brand">
    <div class="hera-sidebar-brand-mark" style="width: 42px; height: 42px; margin-right: 12px; border-radius: 50%; overflow: hidden; border: 1px solid var(--hera-sidebar-border);">
      <img src="https://heraforce.com/assets/images/heraforce_cyber_queen_logo_1778267022286J.png" style="width: 100%; height: 100%; object-fit: cover;" onerror="this.style.display='none'">
    </div>
    <div class="hera-sidebar-brand-text">
      <strong>HERAFORCE</strong>
      <span>Admin Framework</span>
    </div>
  </a>

  <ul class="hera-sidebar-nav">
    <li class="hera-sidebar-nav-item" data-page="dashboard" onclick="if(typeof my_admin_01_A_OPEN === 'function'){ my_admin_01_A_OPEN(); } if(typeof close_mobile_sidebar === 'function'){ close_mobile_sidebar(); }">
      <a href="javascript:void(0);"><svg class="hera-sidebar-nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="9" cy="8" r="3.4"/><path d="M2.5 20c1-4 3.4-6 6.5-6s5.5 2 6.5 6"/><circle cx="18" cy="9" r="2.4"/><path d="M15.8 14c2.4.2 4 1.9 4.7 5.2"/></svg>Dashboard</a>
    </li>
    <li class="hera-sidebar-nav-item" data-page="projects" onclick="if(typeof my_admin_02_A_OPEN === 'function'){ my_admin_02_A_OPEN(); } if(typeof close_mobile_sidebar === 'function'){ close_mobile_sidebar(); }">
      <a href="javascript:void(0);"><svg class="hera-sidebar-nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3.5" y="4" width="17" height="16" rx="1.6"/><path d="M8 2.5v3M16 2.5v3M3.5 9.5h17"/></svg>My Projects</a>
    </li>
    <li class="hera-sidebar-nav-item" data-page="blogs" onclick="if(typeof my_admin_03_A_OPEN === 'function'){ my_admin_03_A_OPEN(); } if(typeof close_mobile_sidebar === 'function'){ close_mobile_sidebar(); }">
      <a href="javascript:void(0);"><svg class="hera-sidebar-nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="8.5"/><path d="M12 7.5V12l3 2"/></svg>Blogs</a>
    </li>
    <li class="hera-sidebar-nav-item" data-page="settings">
      <a href="#"><svg class="hera-sidebar-nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="6" width="18" height="12" rx="1.8"/><path d="M3 10h18"/></svg>Configuration</a>
    </li>
  </ul>

  <div class="hera-sidebar-foot">
    © 2026 Heraforce<br>SLdrawing Architecture
  </div>
</aside>

<script>
  (function heraSidebarInit(){
    const current = document.body.getAttribute('data-page');
    if(!current) return;
    document.querySelectorAll('.hera-sidebar-nav-item').forEach(function(item){
      item.classList.toggle('hera-sidebar-active', item.getAttribute('data-page') === current);
    });
  })();
</script>
<!-- Heraforce Universal Async Uploader Engine -->
<script src="<?php echo $pth; ?>UxUI-Back/my_admin/Global_Assets/Global_Uploader.js"></script>