<?php
// PHP wrapper for inline HTML script injection
?>
<script type="text/javascript">
document.addEventListener("DOMContentLoaded", function() {
    const urlParams = new URLSearchParams(window.location.search);
    const projectId = urlParams.get('id');
    
    if(!projectId) {
        window.location.href = "index.php";
        return;
    }
    
    const fd = new FormData();
    fd.append("id", projectId);
    
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "View-List/Homepage/Load_Project_Details_AJAX.php", true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            try {
                var data = JSON.parse(xhr.responseText);
                if(data.error) {
                    window.location.href = "index.php"; // Bounce if invalid ID
                    return;
                }
            
            // CSS Variable Bindings (Transforms the page theme natively)
            document.documentElement.style.setProperty('--p-main-color', data.core.main_color);
            document.documentElement.style.setProperty('--p-sec-color', data.core.secondary_color);            
            document.title = `HeraForce | ${data.core.name}`;
            
            // Hydrate Core Element Shell
            const heroEl = document.getElementById("pd_hero");
            const titleEl = document.getElementById("pd_title");
            const clientBadge = document.getElementById("pd_client_badge");
            const highlightEl = document.getElementById("pd_highlight");
            const bodyEl = document.getElementById("pd_body_text");
            
            if (heroEl) heroEl.style.backgroundImage = `url('${data.core.main_img}')`;
            if (titleEl) titleEl.innerText = data.core.name;
            
            if (clientBadge) {
                if(data.core.client) {
                    clientBadge.innerText = data.core.client;
                    clientBadge.style.display = "inline-block";
                } else {
                    clientBadge.style.display = "none";
                }
            }
            
            if (highlightEl) highlightEl.innerText = data.core.main_description;
            if (bodyEl) bodyEl.innerText = data.core.description;
            
            const liveBtn = document.getElementById("pd_live_btn");
            if (liveBtn && data.core.project_url && data.core.project_url !== "0" && data.core.project_url.trim() !== "") {
                liveBtn.href = data.core.project_url;
                liveBtn.style.display = "inline-flex";
                if(typeof lucide !== 'undefined') lucide.createIcons();
            }
            
            // Structural Injection: Unified Editorial Flow (Newspaper Layout)
            const flowEl = document.getElementById("pd_editorial_flow");
            if(flowEl) {
                let html = "";
                let gIndex = 0;
                let delay = 1;
                
                // 1. Highlight Box
                if (data.core.main_description) {
                    html += `<div class="nw-item reveal delay-${(delay%3)+1}">
                        <h3 class="p-highlight">${data.core.main_description}</h3>
                    </div>`;
                    delay++;
                }
                
                // 2. Drop an initial gallery image early 
                if (data.gallery && data.gallery.length > gIndex) {
                    html += `<div class="nw-item reveal delay-${(delay%3)+1}">
                        <img src="${data.gallery[gIndex].img_url}" class="nw-img" loading="lazy" />
                    </div>`;
                    gIndex++;
                    delay++;
                }

                // 3. Body text interwoven with images
                if (data.core.description) {
                    const paras = data.core.description.split("\n");
                    paras.forEach((p) => {
                        let text = p.trim();
                        if(text !== '') {
                            html += `<div class="nw-item reveal delay-${(delay%3)+1}">
                                <p class="p-body-text">${text}</p>
                            </div>`;
                            delay++;
                            
                            // Splice an image dynamically after paragraphs to create organic newspaper flow
                            if (data.gallery && data.gallery.length > gIndex) {
                                html += `<div class="nw-item reveal delay-${(delay%3)+1}">
                                    <img src="${data.gallery[gIndex].img_url}" class="nw-img" loading="lazy" />
                                </div>`;
                                gIndex++;
                                delay++;
                            }
                        }
                    });
                }

                // 4. Inject Features organically 
                if (data.features && data.features.length > 0) {
                    html += `<div class="nw-item reveal delay-${(delay%3)+1}">
                        <h2 style="color:var(--ink-black); font-size:clamp(1.8rem, 3vw, 2.5rem); font-weight:900; border-left: 5px solid var(--p-main-color); padding-left: 15px; margin-bottom: 20px;">Architecture</h2>
                    </div>`;
                    delay++;
                    
                    data.features.forEach((f) => {
                        html += `
                        <div class="nw-item reveal delay-${(delay%3)+1}">
                            <div class="nw-feature-card">
                                 <div class="p-feat-icon" style="background-image: url('${f.feture_img}');"></div>
                                 <h3 style="color:var(--ink-black); font-size:1.4rem; margin: 0 0 15px; font-weight:800;">${f.feature_name}</h3>
                                 <p style="color:var(--ink-fade); margin:0; line-height:1.6; font-size:1.05rem; font-weight:500;">${f.feature_dis}</p>
                            </div>
                        </div>
                        `;
                        delay++;
                        
                        // Drop another image following feature blocks 
                        if (data.gallery && data.gallery.length > gIndex) {
                            html += `<div class="nw-item reveal delay-${(delay%3)+1}">
                                <img src="${data.gallery[gIndex].img_url}" class="nw-img" loading="lazy" />
                            </div>`;
                            gIndex++;
                            delay++;
                        }
                    });
                }

                // 5. Append any remaining gallery images at the end
                if (data.gallery) {
                    while (gIndex < data.gallery.length) {
                        html += `<div class="nw-item reveal delay-${(delay%3)+1}">
                            <img src="${data.gallery[gIndex].img_url}" class="nw-img" loading="lazy" />
                        </div>`;
                        gIndex++;
                        delay++;
                    }
                }
                
                flowEl.innerHTML = html;
            }
            
            // Sync JS logic for Reveal CSS Classes once painted
            triggerReveals();
            
            } catch(e) {
                console.error("AJAX parsing error:", e);
                window.location.href = "index.php";
            }
        }
    };
    xhr.send(fd);

    // Scroll Reveal Listener
    function triggerReveals() {
        const reveals = document.querySelectorAll('.reveal');
        const revealOnScroll = () => {
            const windowHeight = window.innerHeight;
            for (let i = 0; i < reveals.length; i++) {
                const elementTop = reveals[i].getBoundingClientRect().top;
                const elementVisible = 50;
                if (elementTop < windowHeight - elementVisible) {
                    reveals[i].classList.add('active');
                }
            }
        };
        
        window.addEventListener('scroll', revealOnScroll, {passive: true});
        setTimeout(revealOnScroll, 100); 
    }
});
</script>