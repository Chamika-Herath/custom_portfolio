<?php
$pth = "../";
$active_page = "projects";
$page_title = "Initialize Project Node · Heraforce Nexus";

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
    margin-bottom: 30px;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  .hera-breadcrumb span { color: var(--hera-gold); font-weight: 600; }
  
  .hera-btn-back {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 10px 16px;
    background: transparent;
    border: 1px solid var(--hera-border);
    border-radius: var(--hera-radius-md);
    color: var(--hera-text);
    font-size: 12px;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    cursor: pointer;
    transition: all 0.2s ease;
  }
  
  .hera-btn-back:hover {
    background: rgba(255,255,255,0.05);
    border-color: rgba(255,255,255,0.3);
  }

  /* ---------- Form Panel ---------- */
  .hera-form-panel {
    position: relative;
    background: var(--hera-surface);
    backdrop-filter: blur(25px);
    border-radius: var(--hera-radius-lg);
    border: 1px solid var(--hera-border);
    overflow: hidden;
    padding: 40px;
    max-width: 800px;
    margin: 0 auto;
  }
  
  .hera-form-panel::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 1px;
    background: linear-gradient(90deg, transparent, var(--hera-gold), transparent);
    opacity: 0.5;
  }

  .hera-form-title {
    font-size: 24px;
    font-weight: 700;
    color: #fff;
    margin: 0 0 8px 0;
    letter-spacing: 0.02em;
  }
  
  .hera-form-subtitle {
    font-size: 13px;
    color: var(--hera-text-dim);
    margin: 0 0 40px 0;
    letter-spacing: 0.02em;
  }

  /* Structural Grid for Form */
  .hera-form-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 24px;
  }

  /* Input Groups */
  .hera-form-group {
    display: flex;
    flex-direction: column;
    gap: 8px;
  }

  .hera-form-label {
    font-size: 12px;
    font-weight: 600;
    color: var(--hera-text-dim);
    text-transform: uppercase;
    letter-spacing: 0.1em;
  }

  .hera-input {
    background: rgba(255, 255, 255, 0.03);
    border: 1px solid var(--hera-border);
    border-radius: var(--hera-radius-md);
    padding: 16px 20px;
    color: #fff;
    font-family: 'Inter', sans-serif;
    font-size: 15px;
    transition: all 0.3s ease;
  }

  .hera-input:focus {
    outline: none;
    border-color: var(--hera-gold);
    background: rgba(255, 255, 255, 0.06);
    box-shadow: 0 0 0 3px rgba(212, 188, 143, 0.1);
  }

  .hera-input::placeholder {
    color: rgba(255, 255, 255, 0.2);
  }

  /* File Upload Zone */
  .hera-file-zone {
    border: 2px dashed var(--hera-border);
    border-radius: var(--hera-radius-md);
    background: rgba(255, 255, 255, 0.01);
    padding: 40px;
    text-align: center;
    cursor: pointer;
    transition: all 0.3s ease;
  }
  
  .hera-file-zone:hover {
    border-color: var(--hera-gold);
    background: rgba(212, 188, 143, 0.03);
  }

  .hera-file-icon {
    color: var(--hera-gold);
    margin-bottom: 12px;
    opacity: 0.8;
  }

  .hera-file-text {
    font-size: 14px;
    color: #fff;
    font-weight: 500;
    margin-bottom: 4px;
  }

  .hera-file-subtext {
    font-size: 12px;
    color: var(--hera-text-dim);
  }

  /* Toggle Switch */
  .hera-toggle-wrap {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 16px 20px;
    background: rgba(255, 255, 255, 0.02);
    border-radius: var(--hera-radius-md);
    border: 1px solid var(--hera-border);
  }

  .hera-toggle-label {
    font-size: 14px;
    color: #fff;
    font-weight: 500;
  }

  .hera-toggle {
    position: relative;
    width: 48px;
    height: 26px;
  }
  
  .hera-toggle input {
    opacity: 0;
    width: 0;
    height: 0;
  }
  
  .hera-toggle-slider {
    position: absolute;
    cursor: pointer;
    top: 0; left: 0; right: 0; bottom: 0;
    background-color: rgba(255,255,255,0.1);
    transition: .4s;
    border-radius: 34px;
  }
  
  .hera-toggle-slider:before {
    position: absolute;
    content: "";
    height: 18px;
    width: 18px;
    left: 4px;
    bottom: 4px;
    background-color: white;
    transition: .4s;
    border-radius: 50%;
  }
  
  .hera-toggle input:checked + .hera-toggle-slider {
    background-color: var(--hera-gold);
    box-shadow: 0 0 15px rgba(212, 188, 143, 0.4);
  }
  
  .hera-toggle input:checked + .hera-toggle-slider:before {
    transform: translateX(22px);
  }

  /* Submit Button */
  .hera-form-footer {
    margin-top: 40px;
    padding-top: 30px;
    border-top: 1px solid var(--hera-border);
    display: flex;
    justify-content: flex-end;
  }
  
  .hera-btn-submit {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 14px 28px;
    background: linear-gradient(135deg, rgba(212, 188, 143, 0.2) 0%, rgba(0,0,0,0) 100%);
    border: 1px solid var(--hera-gold);
    border-radius: var(--hera-radius-md);
    color: var(--hera-gold);
    font-size: 14px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 0 20px rgba(212, 188, 143, 0.1);
  }

  .hera-btn-submit:hover {
    background: var(--hera-gold);
    color: #000;
    box-shadow: 0 0 30px rgba(212, 188, 143, 0.5);
    transform: translateY(-2px);
  }

  @media (max-width: 900px) {
    .hera-app { grid-template-columns: 1fr; grid-template-areas: "topbar" "main"; }
    .hera-main { padding: 24px; }
    .hera-form-panel { padding: 24px; }
  }
</style>

<div data-page="projects" id="my_admin_02_B"">

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
      <div>Admin Network / Project Integrations / <span>Deploy Node</span></div>
      
      <button class="hera-btn-back" onclick="if(typeof my_admin_02_A_OPEN === 'function'){ my_admin_02_A_OPEN(); }">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="16" height="16"><path d="m15 18-6-6 6-6"/></svg>
        Return to Matrix
      </button>
    </div>

    <form class="hera-form-panel">
      
      <h2 class="hera-form-title">Initialize Project Node</h2>
      <p class="hera-form-subtitle">Enter telemetry and visual data to integrate a new asset into the matrix array.</p>

      <div class="hera-form-grid">
        
        <!-- Cover Art Zone -->
        <div class="hera-form-group">
          <label class="hera-form-label">Cover Visual Pipeline</label>
          
          <!-- Upload State -->
          <div class="hera-file-zone" id="proj_B_cover_upload_state" onclick="document.getElementById('proj_B_file').click();">
            <svg class="hera-file-icon" viewBox="0 0 24 24" width="36" height="36" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="17 8 12 3 7 8"/><line x1="12" y1="3" x2="12" y2="15"/></svg>
            <div class="hera-file-text" id="proj_B_filename_txt">Drag & Drop Image Asset</div>
            <div class="hera-file-subtext">JPG, PNG or WEBP (Max 5MB)</div>
          </div>
          
          <!-- Preview State -->
          <div id="proj_B_cover_preview_state" style="display:none; position:relative; width: 100%; border-radius: 12px; overflow: hidden; border: 1px solid var(--hera-border); aspect-ratio: 16/9; background: rgba(0,0,0,0.4);">
             <img id="proj_B_cover_img" src="" style="width: 100%; height: 100%; object-fit: cover; opacity: 0.9;">
             <button type="button" onclick="removeMainCover()" style="position: absolute; top: 12px; right: 12px; background: rgba(0,0,0,0.6); color: #fff; border: 1px solid rgba(255,255,255,0.2); border-radius: 4px; padding: 6px 12px; font-size: 11px; cursor: pointer; backdrop-filter: blur(4px);">Remove Cover</button>
          </div>
          
          <input type="file" id="proj_B_file" style="display:none;" accept="image/*" onchange="renderMainCoverPreview(this);">
        </div>

        <!-- Project ID (Readonly Display) -->
        <div class="hera-form-group" style="margin-top: 10px;">
          <label class="hera-form-label">Node Identifier</label>
          <input type="text" class="hera-input" value="#PRJ-<?= rand(1000, 9999) ?> (Auto-Generated)" disabled style="opacity: 0.5; background: rgba(0,0,0,0.2);">
        </div>

        <!-- Project Name -->
        <div class="hera-form-group">
          <label class="hera-form-label">Project Name</label>
          <input type="text" id="proj_B_name" class="hera-input" placeholder="e.g. Studio Canvas Engine">
        </div>

        <!-- Tech Stack / Client -->
        <div class="hera-form-group">
          <label class="hera-form-label">Client Name</label>
          <input type="text" id="proj_B_tech" class="hera-input" placeholder="e.g. Acme Corp">
        </div>

        <!-- Small Title Description -->
        <div class="hera-form-group">
          <label class="hera-form-label">Synopsis (Short Description)</label>
          <input type="text" id="proj_B_main_desc" class="hera-input" placeholder="Brief 1-sentence hook...">
        </div>
        
        <!-- Long Description -->
        <div class="hera-form-group">
          <label class="hera-form-label">Detailed Project Architecture</label>
          <textarea id="proj_B_long_desc" class="hera-input" style="min-height: 120px; resize: vertical;" placeholder="Elaborate on the project details, execution schema, and challenges..."></textarea>
        </div>

        <!-- Project URL -->
        <div class="hera-form-group">
          <label class="hera-form-label">Live Project URL</label>
          <input type="url" id="proj_B_project_url" class="hera-input" placeholder="e.g. https://www.heraforce.com">
        </div>

        <!-- SEO META: Keywords -->
        <div class="hera-form-group">
          <label class="hera-form-label">SEO Keywords</label>
          <input type="text" id="proj_B_seo_keywords" class="hera-input" placeholder="e.g. web application, UI design, heraforce network">
        </div>

        <!-- SEO META: Description -->
        <div class="hera-form-group">
          <label class="hera-form-label">SEO Meta Description</label>
          <textarea id="proj_B_seo_description" class="hera-input" style="min-height: 80px; resize: vertical;" placeholder="Search engine description tag content..."></textarea>
        </div>

        <!-- Theme Colors -->
        <div style="display: flex; gap: 20px; margin-bottom: 20px;">
          <div class="hera-form-group" style="flex: 1; margin-bottom: 0;">
            <label class="hera-form-label">Primary Brand Color</label>
            <input type="color" id="proj_B_main_color" class="hera-input" style="height: 48px; padding: 5px; cursor: pointer;">
          </div>
          <div class="hera-form-group" style="flex: 1; margin-bottom: 0;">
            <label class="hera-form-label">Secondary Brand Color</label>
            <input type="color" id="proj_B_secondary_color" class="hera-input" style="height: 48px; padding: 5px; cursor: pointer;">
          </div>
        </div>

        <!-- Dynamic Gallery System -->
        <div class="hera-form-group" style="margin-top: 20px;">
          <label class="hera-form-label" style="display:flex; justify-content:space-between; align-items:center;">
             Project Assets Gallery
             <button type="button" class="hera-btn-back" onclick="document.getElementById('proj_B_gallery').click();" style="padding: 4px 10px; font-size:10px;">Select Images</button>
          </label>
          <div id="gallery_preview_array" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(100px, 1fr)); gap: 12px; margin-top:8px;">
            <!-- JS Inject Images Here -->
          </div>
          <input type="file" id="proj_B_gallery" multiple accept="image/*" style="display:none;" onchange="renderGalleryPreviews(this);">
        </div>
        
        <hr style="border-color: var(--hera-border); margin: 30px 0; opacity:0.5;">

        <!-- Dynamic Features Array -->
        <div class="hera-form-group">
           <label class="hera-form-label" style="display:flex; justify-content:space-between; align-items:center;">
             Project Key Features
             <button type="button" class="hera-btn-submit" onclick="addFeatureNode()" style="padding: 6px 14px; background: rgba(212,188,143,0.1); font-size:10px; color:var(--hera-gold);">+ Add Feature</button>
           </label>
           
           <div id="feature_nodes_container" style="display:flex; flex-direction:column; gap:16px;">
              <!-- JS Spawns Feature Cards Here -->
           </div>
        </div>

        <hr style="border-color: var(--hera-border); margin: 30px 0; opacity:0.5;">

        <!-- Visibility Toggle -->
        <div class="hera-form-group">
          <label class="hera-form-label">Deployment Status</label>
          <div class="hera-toggle-wrap">
            <span class="hera-toggle-label">Push to public routing array (Show on Web)</span>
            <label class="hera-toggle">
              <input type="checkbox" id="proj_B_show" checked>
              <span class="hera-toggle-slider"></span>
            </label>
          </div>
        </div>

      </div>

      <!-- Submit Footer -->
      <div class="hera-form-footer">
        <button type="button" class="hera-btn-submit" onclick="my_admin_02_B_SUBMIT();">
          <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
          Deploy Project
        </button>
      </div>

    </form>

  </main>
</div>
</div>

