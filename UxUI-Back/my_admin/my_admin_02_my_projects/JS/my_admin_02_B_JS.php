<script type="text/javascript">
// Globals for storing multi-array data
let gallery_file_array = [];
let feature_count = 0;

function renderMainCoverPreview(inputElement) {
    if (inputElement.files && inputElement.files[0]) {
        let file = inputElement.files[0];
        let reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById("proj_B_cover_upload_state").style.display = "none";
            document.getElementById("proj_B_cover_preview_state").style.display = "block";
            document.getElementById("proj_B_cover_img").src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
}

function removeMainCover() {
    let input = document.getElementById("proj_B_file");
    input.value = ""; // Clear file
    document.getElementById("proj_B_cover_upload_state").style.display = "block";
    document.getElementById("proj_B_cover_preview_state").style.display = "none";
    document.getElementById("proj_B_cover_img").src = "";
}

function renderGalleryPreviews(inputElement) {
    if (inputElement.files.length === 0) return;
    
    // Append instead of overriding, so users can add images separately
    gallery_file_array = gallery_file_array.concat(Array.from(inputElement.files));
    redrawGalleryPreviews();
    
    // Reset file input so same files can be chosen again if needed
    inputElement.value = ""; 
}

function redrawGalleryPreviews() {
    const previewContainer = document.getElementById("gallery_preview_array");
    previewContainer.innerHTML = "";
    
    gallery_file_array.forEach((file, index) => {
        if (!file.type.startsWith("image/")) return;
        
        let reader = new FileReader();
        reader.onload = function(e) {
            let glassCard = document.createElement("div");
            glassCard.style = "aspect-ratio: 1; border-radius: 8px; overflow: hidden; border: 1px solid var(--hera-border); position: relative; background: rgba(0,0,0,0.4);";
            
            let img = document.createElement("img");
            img.src = e.target.result;
            img.style = "width: 100%; height: 100%; object-fit: cover; opacity:0.8;";
            
            let delBtn = document.createElement("button");
            delBtn.type = "button";
            delBtn.innerHTML = "&#10005;";
            delBtn.style = "position:absolute; top:6px; right:6px; background:rgba(0,0,0,0.7); border:1px solid rgba(255,255,255,0.2); color:#fff; border-radius:50%; width:20px; height:20px; font-size:10px; cursor:pointer; display:flex; align-items:center; justify-content:center;";
            delBtn.onclick = function() { removeGalleryItem(index); };
            
            glassCard.appendChild(img);
            glassCard.appendChild(delBtn);
            previewContainer.appendChild(glassCard);
        };
        reader.readAsDataURL(file);
    });
}

function removeGalleryItem(index) {
    gallery_file_array.splice(index, 1);
    redrawGalleryPreviews();
}

function addFeatureNode() {
    feature_count++;
    const current_id = feature_count;
    const container = document.getElementById("feature_nodes_container");
    
    let featureDiv = document.createElement("div");
    featureDiv.id = "feature_block_" + current_id;
    featureDiv.style = "padding: 24px; background: rgba(255,255,255,0.02); border:1px solid var(--hera-border); border-radius:12px; display:flex; flex-direction:column; gap:16px; position:relative;";
    
    featureDiv.innerHTML = `
        <button type="button" onclick="document.getElementById('feature_block_${current_id}').remove();" style="position:absolute; top:12px; right:12px; background:transparent; border:none; color:var(--hera-text-dim); cursor:pointer; font-size:16px; transition:0.2s;">&#10005;</button>
        
        <div style="margin-bottom:4px;">
           <label class="hera-form-label" style="display:block; margin-bottom:8px;">Feature Name</label>
           <input type="text" id="feat_name_${current_id}" class="hera-input" style="width:100%; border-color: rgba(212,188,143,0.3); padding:12px 14px; font-size:13px;" placeholder="e.g. Real-Time Tracking">
        </div>
        
        <div style="margin-bottom:4px;">
           <label class="hera-form-label" style="display:block; margin-bottom:8px;">Feature Description</label>
           <input type="text" id="feat_desc_${current_id}" class="hera-input" style="width:100%; border-color: rgba(212,188,143,0.3); padding:12px 14px; font-size:13px;" placeholder="Short descriptive detail...">
        </div>
        
        <div>
           <label class="hera-form-label" style="display:block; margin-bottom:8px;">Icon / Visual Mapping</label>
           
           <div style="display:flex; align-items:center; gap:16px;">
               <!-- Upload Button State -->
               <div id="feat_upload_state_${current_id}" style="display:flex; align-items:center;">
                   <button type="button" class="hera-btn-back" onclick="document.getElementById('feat_img_${current_id}').click();" style="padding:8px 16px; font-size:11px;">Upload Feature Icon</button>
               </div>
               
               <!-- Preview State -->
               <div id="feat_preview_state_${current_id}" style="display:none; align-items:center; gap:12px;">
                   <div style="width:48px; height:48px; border-radius:8px; border:1px solid var(--hera-border); overflow:hidden; background:rgba(0,0,0,0.4);">
                       <img id="feat_preview_img_${current_id}" src="" style="width:100%; height:100%; object-fit:cover;">
                   </div>
                   <button type="button" onclick="removeFeatureIcon(${current_id})" style="background:transparent; border:none; color:var(--hera-gold); font-size:11px; cursor:pointer; text-decoration:underline;">Remove</button>
               </div>
               
               <input type="file" id="feat_img_${current_id}" accept="image/*" style="display:none;" onchange="renderFeatureIconPreview(this, ${current_id});">
           </div>
        </div>
    `;
    
    container.appendChild(featureDiv);
}

function renderFeatureIconPreview(inputElement, id) {
    if (inputElement.files && inputElement.files[0]) {
        let file = inputElement.files[0];
        let reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById("feat_upload_state_" + id).style.display = "none";
            document.getElementById("feat_preview_state_" + id).style.display = "flex";
            document.getElementById("feat_preview_img_" + id).src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
}

function removeFeatureIcon(id) {
    let input = document.getElementById("feat_img_" + id);
    input.value = ""; 
    document.getElementById("feat_upload_state_" + id).style.display = "flex";
    document.getElementById("feat_preview_state_" + id).style.display = "none";
    document.getElementById("feat_preview_img_" + id).src = "";
}

async function my_admin_02_B_SUBMIT() {
    var projName = document.getElementById("proj_B_name").value;
    var projTech = document.getElementById("proj_B_tech").value;
    var projMainDesc = document.getElementById("proj_B_main_desc").value;
    var projLongDesc = document.getElementById("proj_B_long_desc").value;
    var projUrl = document.getElementById("proj_B_project_url").value;
    var projSeoKeywords = document.getElementById("proj_B_seo_keywords").value;
    var projSeoDesc = document.getElementById("proj_B_seo_description").value;
    var projMainColor = document.getElementById("proj_B_main_color").value;
    var projSecondaryColor = document.getElementById("proj_B_secondary_color").value;
    var projShow = document.getElementById("proj_B_show").checked;
    
    var coverInput = document.getElementById("proj_B_file");
    var coverFile = (coverInput && coverInput.files && coverInput.files[0]) ? coverInput.files[0] : null;

    if (!projName) { alert("Project Name cannot be empty."); return; }
    if (!coverFile) { alert("Please allocate a Core Cover Image for the matrix."); return; }

    var fd = new FormData();
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
    fd.append("image_uploder_image", coverFile);
    
    // Append Gallery Files
    for (let i = 0; i < gallery_file_array.length; i++) {
        fd.append("gallery_files[]", gallery_file_array[i]);
    }

    // Append Features dynamically
    // We scrape all current feature blocks safely.
    var featureBlocks = document.querySelectorAll("[id^='feature_block_']");
    var featureDataList = [];
    
    featureBlocks.forEach((block, index) => {
        // Extract the unique ID from DOM element e.g. 'feature_block_3' -> '3'
        let fid = block.id.replace('feature_block_', '');
        
        let fName = document.getElementById("feat_name_" + fid).value;
        let fDesc = document.getElementById("feat_desc_" + fid).value;
        let fImgInput = document.getElementById("feat_img_" + fid);
        
        let fImgFile = (fImgInput && fImgInput.files && fImgInput.files[0]) ? fImgInput.files[0] : null;
        
        if(fName.trim() !== "") {
            // Push definition payload
            featureDataList.push({ name: fName, desc: fDesc, fileKey: "feat_img_file_" + index });
            
            // Map file directly into FormData with strict fileKey referencing
            if(fImgFile) {
                fd.append("feat_img_file_" + index, fImgFile);
            }
        }
    });
    
    fd.append("features_json", JSON.stringify(featureDataList));

    console.log("Transmitting Mega-Payload to Core Logic...");

    $.ajax({
        url: "<?php echo $pth; ?>View-List/Projects/Create_New_Project.php",
        type: "POST",
        data: fd,
        processData: false,
        contentType: false,
        cache: false,
        success: function(response) {
            console.log("Raw Sync JSON:", response);
            try {
                var json_response = JSON.parse(response);
                if (json_response[0].error === "0") {
                    alert("System Node Upgraded: Multi-Relational Data Synchronized Successfully!");
                    
                    // Cleanup arrays
                    gallery_file_array = [];
                    feature_count = 0;
                    document.getElementById("feature_nodes_container").innerHTML = "";
                    document.getElementById("gallery_preview_array").innerHTML = "";

                    // Nullify logic states
                    document.getElementById("proj_B_name").value = "";
                    document.getElementById("proj_B_tech").value = "";
                    document.getElementById("proj_B_main_desc").value = "";
                    document.getElementById("proj_B_long_desc").value = "";
                    document.getElementById("proj_B_project_url").value = "";
                    document.getElementById("proj_B_seo_keywords").value = "";
                    document.getElementById("proj_B_seo_description").value = "";
                    document.getElementById("proj_B_main_color").value = "#000000";
                    document.getElementById("proj_B_secondary_color").value = "#000000";
                    document.getElementById("proj_B_cover_upload_state").style.display = "block";
                    document.getElementById("proj_B_cover_preview_state").style.display = "none";
                    document.getElementById("proj_B_cover_img").src = "";
                    document.getElementById("proj_B_file").value = "";
                    
                    if (typeof my_admin_02_A_OPEN === 'function') { my_admin_02_A_OPEN(); }
                } else {
                    alert("System Sink Error: " + json_response[0].error);
                }
            } catch(e) {
                alert("Core Framework Exception: Data formatting failed during parsing.");
            }
        },
        error: function(xhr, status, error) {
            alert("Network link dropped: " + error);
        }
    });
}
</script>
