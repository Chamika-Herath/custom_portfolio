<script type="text/javascript">
let existing_gallery_array_edit = [];
let gallery_file_array_edit = [];
let feature_count_edit = 0;

function renderMainCoverPreview_Edit(inputElement) {
    if (inputElement.files && inputElement.files[0]) {
        let file = inputElement.files[0];
        let reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById("proj_C_cover_upload_state").style.display = "none";
            document.getElementById("proj_C_cover_preview_state").style.display = "block";
            document.getElementById("proj_C_cover_preview_img").src = e.target.result;
            document.getElementById("proj_C_cover_remove_btn").style.display = "block";
        };
        reader.readAsDataURL(file);
    }
}

function removeMainCover_Edit() {
    let input = document.getElementById("proj_C_file");
    input.value = ""; 

    document.getElementById("proj_C_cover_upload_state").style.display = "block";
    document.getElementById("proj_C_cover_preview_state").style.display = "none";
    document.getElementById("proj_C_cover_remove_btn").style.display = "none";
    document.getElementById("proj_C_cover_preview_img").src = "";
    
    // Flag core engine to nuke existing db picture if they hit save
    document.getElementById("proj_C_remove_main_cover").value = "1";
}

function renderGalleryPreviews_Edit(inputElement) {
    if (inputElement.files.length === 0) return;
    
    // In edit mode, when they select new gallery files it appends them locally.
    gallery_file_array_edit = gallery_file_array_edit.concat(Array.from(inputElement.files));
    redrawGalleryPreviews_Edit();
    inputElement.value = ""; 
}

function redrawGalleryPreviews_Edit() {
    const previewContainer = document.getElementById("gallery_preview_array_edit");
    previewContainer.innerHTML = "";
    
    // 1. Draw existing server images
    existing_gallery_array_edit.forEach((url, index) => {
        let glassCard = document.createElement("div");
        glassCard.style = "aspect-ratio: 1; border-radius: 8px; overflow: hidden; border: 1px solid var(--hera-border); position: relative; background: rgba(0,0,0,0.4);";
        
        let img = document.createElement("img");
        img.src = "<?php echo $pth; ?>../" + url;
        img.style = "width: 100%; height: 100%; object-fit: cover; opacity:0.8;";
        
        let delBtn = document.createElement("button");
        delBtn.type = "button";
        delBtn.innerHTML = "&#10005;";
        delBtn.style = "position:absolute; top:6px; right:6px; background:rgba(0,0,0,0.7); border:1px solid rgba(255,255,255,0.2); color:#fff; border-radius:50%; width:20px; height:20px; font-size:10px; cursor:pointer; display:flex; align-items:center; justify-content:center;";
        delBtn.onclick = function() { removeExistingGalleryItem_Edit(index); };
        
        glassCard.appendChild(img);
        glassCard.appendChild(delBtn);
        previewContainer.appendChild(glassCard);
    });

    // 2. Draw newly added local files
    gallery_file_array_edit.forEach((file, index) => {
        if (!file.type.startsWith("image/")) return;
        
        let glassCard = document.createElement("div");
        glassCard.style = "aspect-ratio: 1; border-radius: 8px; overflow: hidden; border: 1px solid var(--hera-border); position: relative; background: rgba(0,0,0,0.4);";
        
        let img = document.createElement("img");
        img.style = "width: 100%; height: 100%; object-fit: cover; opacity:0.8;";
        
        let reader = new FileReader();
        reader.onload = function(e) { img.src = e.target.result; };
        reader.readAsDataURL(file);
        
        let delBtn = document.createElement("button");
        delBtn.type = "button";
        delBtn.innerHTML = "&#10005;";
        delBtn.style = "position:absolute; top:6px; right:6px; background:rgba(0,0,0,0.7); border:1px solid rgba(255,255,255,0.2); color:#fff; border-radius:50%; width:20px; height:20px; font-size:10px; cursor:pointer; display:flex; align-items:center; justify-content:center;";
        delBtn.onclick = function() { removeGalleryItem_Edit(index); };
        
        glassCard.appendChild(img);
        glassCard.appendChild(delBtn);
        previewContainer.appendChild(glassCard);
    });

    // 3. Add the generic upload proxy block
    let uploadCard = document.createElement("div");
    uploadCard.style = "aspect-ratio: 1; border-radius: 8px; border: 2px dashed rgba(212,188,143,0.4); display:flex; flex-direction:column; align-items:center; justify-content:center; cursor:pointer; transition:all 0.3s ease; background:rgba(255,255,255,0.01);";
    uploadCard.onmouseover = function() { this.style.borderColor = "var(--hera-gold)"; this.style.background = "rgba(212, 188, 143, 0.05)"; };
    uploadCard.onmouseout = function() { this.style.borderColor = "rgba(212,188,143,0.4)"; this.style.background = "rgba(255,255,255,0.01)"; };
    uploadCard.onclick = function() { document.getElementById('proj_C_gallery').click(); };
    uploadCard.innerHTML = `<svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="var(--hera-gold)" stroke-width="1.5"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="17 8 12 3 7 8"/><line x1="12" y1="3" x2="12" y2="15"/></svg><div style="font-size:11px; color:var(--hera-gold); margin-top:8px; text-transform:uppercase; font-weight:600; letter-spacing:0.05em;">Upload</div>`;
    previewContainer.appendChild(uploadCard);
}

function removeGalleryItem_Edit(index) {
    gallery_file_array_edit.splice(index, 1);
    redrawGalleryPreviews_Edit();
}

function removeExistingGalleryItem_Edit(index) {
    existing_gallery_array_edit.splice(index, 1);
    redrawGalleryPreviews_Edit();
}

function addFeatureNode_Edit(f_name = "", f_desc = "", f_img = "") {
    feature_count_edit++;
    const current_id = feature_count_edit;
    const container = document.getElementById("feature_nodes_container_edit");
    
    let featureDiv = document.createElement("div");
    featureDiv.id = "feature_block_edit_" + current_id;
    featureDiv.style = "padding: 24px; background: rgba(255,255,255,0.02); border:1px solid var(--hera-border); border-radius:12px; display:flex; flex-direction:column; gap:16px; position:relative;";
    
    // Determine initial image states based on Database value
    let initial_upload_display = "flex";
    let initial_preview_display = "none";
    let initial_img_src = "";
    
    if(f_img && f_img !== "0") {
        initial_upload_display = "none";
        initial_preview_display = "flex";
        initial_img_src = `<?php echo $pth; ?>../${f_img}`;
    }

    // Save native DB state in case of discard
    const original_src = initial_img_src;
    // We attach it dynamically to window or dataset for retrieval during "Remove"
    featureDiv.dataset.originalSrc = original_src;
    
    featureDiv.innerHTML = `
        <button type="button" onclick="document.getElementById('feature_block_edit_${current_id}').remove();" style="position:absolute; top:12px; right:12px; background:transparent; border:none; color:var(--hera-text-dim); cursor:pointer; font-size:16px; transition:0.2s;">&#10005;</button>
        
        <div style="margin-bottom:4px;">
           <label class="hera-form-label" style="display:block; margin-bottom:8px;">Feature Name</label>
           <input type="text" id="feat_name_edit_${current_id}" class="hera-input" style="width:100%; border-color: rgba(212,188,143,0.3); padding:12px 14px; font-size:13px;" value="${f_name.replace(/"/g, '&quot;')}">
        </div>
        
        <div style="margin-bottom:4px;">
           <label class="hera-form-label" style="display:block; margin-bottom:8px;">Feature Description</label>
           <input type="text" id="feat_desc_edit_${current_id}" class="hera-input" style="width:100%; border-color: rgba(212,188,143,0.3); padding:12px 14px; font-size:13px;" value="${f_desc.replace(/"/g, '&quot;')}">
        </div>
        
        <div>
           <label class="hera-form-label" style="display:block; margin-bottom:8px;">Icon / Visual Mapping</label>
           
           <div style="display:flex; align-items:center; gap:16px;">
               <!-- Upload Button State -->
               <div id="feat_upload_state_edit_${current_id}" style="display:${initial_upload_display}; align-items:center;">
                   <button type="button" class="hera-btn-back" onclick="document.getElementById('feat_img_edit_${current_id}').click();" style="padding:8px 16px; font-size:11px;">Upload Feature Icon</button>
               </div>
               
                <!-- Preview State -->
               <div id="feat_preview_state_edit_${current_id}" style="display:${initial_preview_display}; align-items:center; gap:12px;">
                   <div style="width:48px; height:48px; border-radius:8px; border:1px solid var(--hera-border); overflow:hidden; background:rgba(0,0,0,0.4);">
                       <img id="feat_preview_img_edit_${current_id}" src="${initial_img_src}" style="width:100%; height:100%; object-fit:cover;">
                   </div>
                   <button type="button" id="feat_remove_btn_edit_${current_id}" onclick="removeFeatureIcon_Edit(${current_id})" style="background:rgba(0,0,0,0.6); padding:4px 8px; border-radius:4px; border:1px solid rgba(255,255,255,0.2); color:var(--hera-gold); font-size:11px; cursor:pointer;">Remove Icon</button>
               </div>
               
               <input type="file" id="feat_img_edit_${current_id}" accept="image/*" style="display:none;" onchange="renderFeatureIconPreview_Edit(this, ${current_id});">
           </div>
        </div>
    `;
    
    container.appendChild(featureDiv);
}

function renderFeatureIconPreview_Edit(inputElement, id) {
    if (inputElement.files && inputElement.files[0]) {
        let file = inputElement.files[0];
        let reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById("feat_upload_state_edit_" + id).style.display = "none";
            document.getElementById("feat_preview_state_edit_" + id).style.display = "flex";
            document.getElementById("feat_preview_img_edit_" + id).src = e.target.result;
            document.getElementById("feat_remove_btn_edit_" + id).innerText = "Remove"; // It's a local override now
        };
        reader.readAsDataURL(file);
    }
}

function removeFeatureIcon_Edit(id) {
    let input = document.getElementById("feat_img_edit_" + id);
    input.value = ""; 
    
    const wrapper = document.getElementById("feature_block_edit_" + id);
    // Erase the dataset track natively so backend sees "0"
    wrapper.dataset.originalSrc = ""; 
    
    // Safe empty state
    document.getElementById("feat_upload_state_edit_" + id).style.display = "flex";
    document.getElementById("feat_preview_state_edit_" + id).style.display = "none";
    document.getElementById("feat_preview_img_edit_" + id).src = "";
}

function my_admin_02_C_OPEN(proj_id) {
    // Reveal panel natively using standard framework assumption or hardcoded display
    if(typeof my_admin_close_all === 'function') my_admin_close_all();
    
    const panel = document.getElementById("my_admin_02_C");
    if(panel) { panel.style.display = "block"; }

    // Clear Previous State
    document.getElementById("proj_C_hidden_id").value = proj_id;
    document.getElementById("proj_C_display_id").value = "#PRJ-" + proj_id;
    document.getElementById("proj_C_name").value = "Loading Matrix...";
    document.getElementById("proj_C_tech").value = "";
    document.getElementById("proj_C_main_desc").value = "";
    document.getElementById("proj_C_long_desc").value = "";
    document.getElementById("proj_C_project_url").value = "";
    document.getElementById("proj_C_seo_keywords").value = "";
    document.getElementById("proj_C_seo_description").value = "";
    document.getElementById("proj_C_main_color").value = "#000000";
    document.getElementById("proj_C_secondary_color").value = "#000000";
    
    document.getElementById("gallery_preview_array_edit").innerHTML = "";
    document.getElementById("feature_nodes_container_edit").innerHTML = "";
    
    document.getElementById("proj_C_cover_upload_state").style.display = "block";
    document.getElementById("proj_C_cover_preview_state").style.display = "none";
    document.getElementById("proj_C_cover_preview_img").src = "";
    document.getElementById("proj_C_cover_remove_btn").style.display = "none";
    document.getElementById("proj_C_file").value = ""; 
    document.getElementById("proj_C_remove_main_cover").value = "0"; 
    document.getElementById("proj_C_gallery").value = ""; 
    window.original_cover_url = "";
    
    gallery_file_array_edit = [];
    existing_gallery_array_edit = [];
    feature_count_edit = 0;

    var fd = new FormData();
    fd.append("id", proj_id);

    // Initial Hydration Polling
    $.ajax({
        url: "<?php echo $pth; ?>View-List/Projects/Load_Project_Single.php",
        type: "POST",
        data: fd, processData: false, contentType: false,
        success: function(res) {
            try {
                let j = JSON.parse(res);
                if(j[0].error === "0") {
                    let core = j[0].core;
                    
                    document.getElementById("proj_C_name").value = core.name;
                    document.getElementById("proj_C_tech").value = core.client;
                    document.getElementById("proj_C_main_desc").value = core.main_desc;
                    document.getElementById("proj_C_long_desc").value = core.long_desc;
                    document.getElementById("proj_C_project_url").value = core.project_url;
                    document.getElementById("proj_C_seo_keywords").value = core.seo_keywords;
                    document.getElementById("proj_C_seo_description").value = core.seo_description;
                    document.getElementById("proj_C_main_color").value = core.main_color? core.main_color : "#000000";
                    document.getElementById("proj_C_secondary_color").value = core.secondary_color? core.secondary_color : "#000000";
                    document.getElementById("proj_C_show").checked = (core.show_on_web == "1");

                    if(core.main_img && core.main_img !== "0") {
                        window.original_cover_url = "<?php echo $pth; ?>../" + core.main_img;
                        document.getElementById("proj_C_cover_upload_state").style.display = "none"; // HIDE upload
                        document.getElementById("proj_C_cover_preview_state").style.display = "block";
                        document.getElementById("proj_C_cover_preview_img").src = window.original_cover_url;
                        document.getElementById("proj_C_cover_remove_btn").style.display = "block"; // WE NOW PERMIT DELETION!
                    }

                    // Populate Existing Gallery Array & Redraw
                    if(j[0].gallery.length > 0) {
                        j[0].gallery.forEach(imgData => {
                            existing_gallery_array_edit.push(imgData.img_url);
                        });
                    }
                    redrawGalleryPreviews_Edit();
                    
                    // Render Existing Features
                    if(j[0].features.length > 0) {
                        j[0].features.forEach(feat => {
                            addFeatureNode_Edit(feat.name, feat.desc, feat.img);
                        });
                    }
                    
                } else {
                    alert("Hydration Error: " + j[0].error);
                }
            } catch(e) {
                alert("CRITICAL ERROR: Failed to parse Project Hydration Array.");
            }
        }
    });
}

async function my_admin_02_C_SUBMIT() {
    var projId = document.getElementById("proj_C_hidden_id").value;
    var projName = document.getElementById("proj_C_name").value;
    var projTech = document.getElementById("proj_C_tech").value;
    var projMainDesc = document.getElementById("proj_C_main_desc").value;
    var projLongDesc = document.getElementById("proj_C_long_desc").value;
    var projUrl = document.getElementById("proj_C_project_url").value;
    var projSeoKeywords = document.getElementById("proj_C_seo_keywords").value;
    var projSeoDesc = document.getElementById("proj_C_seo_description").value;
    var projMainColor = document.getElementById("proj_C_main_color").value;
    var projSecondaryColor = document.getElementById("proj_C_secondary_color").value;
    var projShow = document.getElementById("proj_C_show").checked;
    
    var coverInput = document.getElementById("proj_C_file");
    var coverFile = (coverInput && coverInput.files && coverInput.files[0]) ? coverInput.files[0] : null;
    
    var nukeCoverFlag = document.getElementById("proj_C_remove_main_cover").value;

    if (!projName) { alert("Project Name cannot be empty."); return; }

    var fd = new FormData();
    fd.append("action", "UPDATE");
    fd.append("id", projId);
    fd.append("val_name", projName);
    fd.append("val_description", projLongDesc);
    fd.append("val_main_description", projMainDesc);
    fd.append("val_client", projTech);
    fd.append("val_show", projShow ? "1" : "0");
    fd.append("val_project_url", projUrl);
    fd.append("val_seo_keywords", projSeoKeywords);
    fd.append("val_seo_description", projSeoDesc);
    fd.append("val_main_color", projMainColor);
    fd.append("val_secondary_color", projSecondaryColor);
    fd.append("nuke_main_cover", nukeCoverFlag); // Pass flag to backend

    if(coverFile) {
        fd.append("image_uploder_image", coverFile);
    }
    
    // Append Local Gallery Override Files
    for (let i = 0; i < gallery_file_array_edit.length; i++) {
        fd.append("gallery_files[]", gallery_file_array_edit[i]);
    }
    
    // Append Kept Gallery Files JSON
    fd.append("kept_gallery", JSON.stringify(existing_gallery_array_edit));

    // Append Mutated Feature Nodes
    var featureBlocks = document.querySelectorAll("[id^='feature_block_edit_']");
    var featureDataList = [];
    
    featureBlocks.forEach((block, index) => {
        let fid = block.id.replace('feature_block_edit_', '');
        let fName = document.getElementById("feat_name_edit_" + fid).value;
        let fDesc = document.getElementById("feat_desc_edit_" + fid).value;
        let fImgInput = document.getElementById("feat_img_edit_" + fid);
        
        let originalDbSrc = block.dataset.originalSrc ? block.dataset.originalSrc.replace("<?php echo $pth; ?>../", "") : "0";
        if(originalDbSrc === "") originalDbSrc = "0";

        let fImgFile = (fImgInput && fImgInput.files && fImgInput.files[0]) ? fImgInput.files[0] : null;
        
        if(fName.trim() !== "") {
            featureDataList.push({ name: fName, desc: fDesc, fileKey: "feat_img_file_" + index, originalImg: originalDbSrc });
            if(fImgFile) {
                fd.append("feat_img_file_" + index, fImgFile);
            }
        }
    });
    
    fd.append("features_json", JSON.stringify(featureDataList));

    console.log("Transmitting Project Update Matrix to Core...");

    $.ajax({
        url: "<?php echo $pth; ?>View-List/Projects/Update_Project.php",
        type: "POST",
        data: fd, processData: false, contentType: false,
        success: function(res) {
            try {
                let j = JSON.parse(res);
                if (j[0].error === "0") {
                    alert("System Node Upgraded: Project Successfully Mutated!");
                    if (typeof my_admin_02_A_OPEN === 'function') { my_admin_02_A_OPEN(); }
                } else { alert("Sink Mutation Error: " + j[0].error); }
            } catch(e) { alert("Core Framework Exception: Data formatting failed."); }
        },
        error: function(xhr, status, error) { alert("Network dropped."); }
    });
}
</script>
