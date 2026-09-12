<?php
$pth = "../";
$active_page = "projects";
$page_title = "Project Node Matrix · Heraforce Nexus";

include '../UxUI-Back/Includes/header.php'; 
?>
<style>
  :root {
    --hera-bg: var(--bg-main, #163022);
    --hera-surface: rgba(10, 12, 18, 0.85);
    --hera-card: rgba(255, 255, 255, 0.03);
    --hera-gold: var(--primary, #d1b88e);
    --hera-text: #ffffff;
    --hera-text-dim: rgba(255, 255, 255, 0.5);
    --hera-border: rgba(212, 188, 143, 0.15);
    --hera-radius-lg: 16px;
    --hera-radius-md: 12px;
  }

  body {
    background: var(--hera-bg);
    font-family: 'Outfit', 'Inter', sans-serif;
    color: var(--hera-text);
    margin: 0; padding: 0;
  }

  .hera-app {
    display: grid;
    grid-template-columns: 248px 1fr;
    grid-template-rows: 64px 1fr;
    min-height: 100vh;
    grid-template-areas:
      "sidebar topbar"
      "sidebar main";
  }

  /* ---------- Topbar ---------- */
  .hera-topbar {
    grid-area: topbar;
    background: var(--hera-surface);
    backdrop-filter: blur(25px);
    -webkit-backdrop-filter: blur(25px);
    border-bottom: 1px solid var(--hera-border);
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 30px;
    position: sticky;
    top: 0;
    z-index: 10;
  }
  
  .hera-topbar-heading h1 {
    font-size: 18px;
    font-weight: 700;
    margin: 0;
    color: transparent;
    background: linear-gradient(90deg, var(--hera-gold) 0%, rgba(212,188,143,0.5) 100%);
    -webkit-background-clip: text;
    background-clip: text;
    letter-spacing: 0.05em;
    text-transform: uppercase;
  }
  
  .hera-topbar-heading p {
    margin: 2px 0 0;
    font-size: 11px;
    color: var(--hera-text-dim);
    letter-spacing: 0.1em;
  }
  
  .hera-topbar-actions {
    display: flex;
    align-items: center;
    gap: 16px;
  }
  
  .hera-icon-btn {
    width: 36px; height: 36px;
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    background: rgba(255, 255, 255, 0.03);
    color: var(--hera-text);
    border: 1px solid var(--hera-border);
    cursor: pointer;
    transition: all 0.2s ease;
  }
  
  .hera-icon-btn:hover {
    background: var(--hera-gold);
    color: #000;
    border-color: var(--hera-gold);
  }
  
  .hera-icon-btn svg { width: 16px; height: 16px; }

  /* ---------- Main Content ---------- */
  .hera-main {
    grid-area: main;
    padding: 40px;
  }

  .hera-breadcrumb {
    font-size: 12px;
    color: var(--hera-text-dim);
    margin-bottom: 24px;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  .hera-breadcrumb span { color: var(--hera-gold); font-weight: 600; }

  /* Add Project Button */
  .hera-btn-add {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 10px 20px;
    background: linear-gradient(135deg, rgba(212, 188, 143, 0.1) 0%, rgba(0,0,0,0) 100%);
    border: 1px solid var(--hera-gold);
    border-radius: var(--hera-radius-md);
    color: var(--hera-gold);
    font-size: 13px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 0 15px rgba(212, 188, 143, 0.1);
  }
  
  .hera-btn-add:hover {
    background: var(--hera-gold);
    color: #000;
    box-shadow: 0 0 25px rgba(212, 188, 143, 0.4);
    transform: translateY(-2px);
  }
  
  .hera-btn-add svg { width: 14px; height: 14px; }

  /* ---------- Main Panel (Data Table) ---------- */
  .hera-panel {
    position: relative;
    background: var(--hera-surface);
    backdrop-filter: blur(25px);
    border-radius: var(--hera-radius-lg);
    border: 1px solid var(--hera-border);
    overflow: hidden;
  }
  
  .hera-panel::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 1px;
    background: linear-gradient(90deg, transparent, var(--hera-gold), transparent);
    opacity: 0.5;
  }

  .hera-panel-header {
    background: rgba(255,255,255,0.02);
    border-bottom: 1px solid var(--hera-border);
    padding: 24px 30px;
    display: flex;
    align-items: center;
    justify-content: space-between;
  }

  .hera-panel-title {
    font-size: 18px;
    font-weight: 600;
    color: #fff;
    display: flex;
    align-items: center;
    gap: 12px;
  }

  .hera-panel-title svg { color: var(--hera-gold); filter: drop-shadow(0 0 8px rgba(212, 188, 143, 0.4)); }

  .hera-table {
    width: 100%;
    border-collapse: collapse;
  }

  .hera-table th {
    text-align: left;
    padding: 16px 30px;
    font-size: 11px;
    color: var(--hera-text-dim);
    text-transform: uppercase;
    letter-spacing: 0.1em;
    border-bottom: 1px solid var(--hera-border);
  }

  .hera-table td {
    padding: 16px 30px;
    font-size: 14px;
    border-bottom: 1px solid rgba(212, 188, 143, 0.05);
    color: #fff;
    vertical-align: middle;
  }

  /* Table Specifics */
  .hera-project-thumb {
    width: 48px;
    height: 48px;
    border-radius: 8px;
    background: rgba(255,255,255,0.05);
    object-fit: cover;
    border: 1px solid rgba(212, 188, 143, 0.2);
  }
  
  
  .hera-project-id {
    font-family: monospace;
    color: var(--hera-text-dim);
    font-size: 12px;
  }

  .hera-project-title {
    font-weight: 600;
    color: #fff;
    display: block;
    margin-bottom: 4px;
  }
  
  .hera-project-tech {
    font-size: 11px;
    color: var(--hera-gold);
    text-transform: uppercase;
    letter-spacing: 0.05em;
  }

  .hera-status-active {
    color: #10b981;
    background: rgba(16, 185, 129, 0.1);
    padding: 4px 10px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 600;
  }

  .hera-status-draft {
    color: #f59e0b;
    background: rgba(245, 158, 11, 0.1);
    padding: 4px 10px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 600;
  }
  
  .hera-action-dots {
    color: var(--hera-text-dim);
    cursor: pointer;
    transition: color 0.2s;
  }
  
  .hera-action-dots:hover {
    color: var(--hera-gold);
  }

  @media (max-width: 900px) {
    .hera-app { grid-template-columns: 1fr; grid-template-areas: "topbar" "main"; }
    .hera-main { padding: 24px; }
    .hera-table th, .hera-table td { padding: 12px; }
  }
</style>

<div data-page="projects" id="my_admin_02_A">

<div class="hera-app">
 <?php include "../UxUI-Back/Includes/Sidebar.php"; ?>

  <header class="hera-topbar">
    <div class="hera-topbar-heading">
      <h1>Command Center</h1>
      <p>System Telemetry & Network Status</p>
    </div>
    <div class="hera-topbar-actions">
      <button class="hera-icon-btn" title="System Alerts">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M6 10a6 6 0 1 1 12 0c0 4 1.5 5.5 1.5 5.5H4.5S6 14 6 10Z"/><path d="M10 19a2 2 0 0 0 4 0"/></svg>
      </button>
      <button class="hera-icon-btn" title="Configuration">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"/></svg>
      </button>
    </div>
  </header>

  <main class="hera-main">
    <div class="hera-breadcrumb">
      <div>Admin Network / <span>Project Integrations</span></div>
      
      <button class="hera-btn-add" onclick="if(typeof my_admin_02_B_OPEN === 'function'){ my_admin_02_B_OPEN(); }">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
        Initialize Project
      </button>
    </div>

    <!-- Active Protocols Table -->
    <section class="hera-panel">
      <div class="hera-panel-header">
        <div class="hera-panel-title">
          <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"/></svg>
          Project Node Matrix
        </div>
      </div>
      <table class="hera-table">
        <thead>
          <tr>
            <th style="width:70px;">Preview</th>
            <th>Project Name</th>
            <th>Show on Web</th>
            <th style="text-align: right;">Actions</th>
          </tr>
        </thead>
        <tbody id="project_list_body">
           <tr>
             <td colspan="4" style="text-align:center; padding: 40px; color:var(--hera-text-dim);">Connecting to Database Matrix...</td>
          </tr>
        </tbody>
      </table>
    </section>

  </main>
</div>
</div>

