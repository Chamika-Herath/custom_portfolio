<?php
$pth = "../";
$active_page = "dashboard";
$page_title = "Command Center · Heraforce Nexus";

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
    color: var(--hera-gold);
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
  }
  .hera-breadcrumb span { color: var(--hera-gold); font-weight: 600; }

  /* ---------- Dashboard Grid (Artistic) ---------- */
  .hera-dashboard-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
    margin-bottom: 40px;
  }

  .hera-stat-card {
    position: relative;
    background: linear-gradient(145deg, rgba(255,255,255,0.05) 0%, rgba(0,0,0,0) 100%), var(--hera-card);
    backdrop-filter: blur(25px);
    border: 1px solid var(--hera-border);
    border-radius: var(--hera-radius-lg);
    padding: 28px;
    display: flex;
    flex-direction: column;
    gap: 16px;
    overflow: hidden;
    transition: transform 0.3s ease, border-color 0.3s ease;
  }

  /* Artistic Glow Effect inside cards */
  .hera-stat-card::before {
    content: '';
    position: absolute;
    top: -50px;
    right: -50px;
    width: 150px;
    height: 150px;
    background: radial-gradient(circle, var(--hera-gold) 0%, rgba(0,0,0,0) 70%);
    opacity: 0.1;
    border-radius: 50%;
    pointer-events: none;
    transition: opacity 0.4s ease, transform 0.4s ease;
  }
  
  .hera-stat-card:hover {
    transform: translateY(-3px);
    border-color: rgba(212, 188, 143, 0.4);
  }
  
  .hera-stat-card:hover::before {
    opacity: 0.2;
    transform: scale(1.2);
  }

  .hera-stat-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: var(--hera-text-dim);
    font-size: 13px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    z-index: 1;
  }

  .hera-stat-icon {
    color: var(--hera-gold);
    filter: drop-shadow(0 0 8px rgba(212, 188, 143, 0.4));
  }

  .hera-stat-value {
    font-size: 38px;
    font-weight: 800;
    color: transparent;
    background: linear-gradient(90deg, #fff 0%, var(--hera-gold) 100%);
    -webkit-background-clip: text;
    background-clip: text;
    font-variant-numeric: tabular-nums;
    z-index: 1;
    letter-spacing: -0.02em;
  }

  /* ---------- Main Panel (Artistic) ---------- */
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

  .hera-panel-title svg { color: var(--hera-gold); }

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
  }

  .hera-status-active {
    color: #10b981;
    background: rgba(16, 185, 129, 0.1);
    padding: 4px 10px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 600;
  }

  @media (max-width: 900px) {
    .hera-app { grid-template-columns: 1fr; grid-template-areas: "topbar" "main"; }
    .hera-dashboard-grid { grid-template-columns: 1fr; }
    .hera-main { padding: 24px; }
  }
</style>

<div data-page="dashboard" id="my_admin_01_A">
<div class="hera-app">
  <?php include "../UxUI-Back/Includes/Sidebar.php"; ?>

  <header class="hera-topbar">
    <div class="hera-topbar-heading">
      <h1 style="background: linear-gradient(90deg, var(--hera-gold) 0%, rgba(212,188,143,0.5) 100%); -webkit-background-clip: text; color: transparent;">Command Center</h1>
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
    <p class="hera-breadcrumb">Admin Network / <span>System Telemetry</span></p>

    <!-- Telemetry Cards -->
    <div class="hera-dashboard-grid">
      <div class="hera-stat-card">
        <div class="hera-stat-header">
          Active Nodes <svg class="hera-stat-icon" viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
        </div>
        <div class="hera-stat-value">94.2%</div>
      </div>
      <div class="hera-stat-card">
        <div class="hera-stat-header">
          Data Packets <svg class="hera-stat-icon" viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/><polyline points="3.27 6.96 12 12.01 20.73 6.96"/><line x1="12" y1="22.08" x2="12" y2="12"/></svg>
        </div>
        <div class="hera-stat-value">1,492</div>
      </div>
      <div class="hera-stat-card">
        <div class="hera-stat-header">
          Security Integrity <svg class="hera-stat-icon" viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
        </div>
        <div class="hera-stat-value">Optimum</div>
      </div>
    </div>

    <!-- Active Protocols Table -->
    <section class="hera-panel">
      <div class="hera-panel-header">
        <div class="hera-panel-title">
          <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
          Active Cloud Protocols
        </div>
      </div>
      <table class="hera-table">
        <thead>
          <tr>
            <th>Protocol Engine</th>
            <th>Deployment Region</th>
            <th>Uptime</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>HeraCore Auth Service</td>
            <td>us-east-1 (N. Virginia)</td>
            <td>99.99%</td>
            <td><span class="hera-status-active">Running</span></td>
          </tr>
          <tr>
            <td>SLdrawing Asset Renderer</td>
            <td>eu-west-3 (Paris)</td>
            <td>99.95%</td>
            <td><span class="hera-status-active">Running</span></td>
          </tr>
          <tr>
            <td>Financial Payment Bridge</td>
            <td>ap-southeast-1 (Singapore)</td>
            <td>100.0%</td>
            <td><span class="hera-status-active">Running</span></td>
          </tr>
        </tbody>
      </table>
    </section>

  </main>
</div>
</div>
