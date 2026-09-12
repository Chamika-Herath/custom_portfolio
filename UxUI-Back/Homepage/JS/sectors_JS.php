<?php
// JS wrapped as PHP for CMS capability
?>
<script type="text/javascript">
document.addEventListener("DOMContentLoaded", function() {
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "View-List/Homepage/Load_Projects_Homepage.php", true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            try {
                var data = JSON.parse(xhr.responseText);
                const sliderWrapper = document.getElementById("homepage_dynamic_slider");
                let slidesHTML = "";
            
            if(data && data.length > 0 && !data[0].error) {
                
                // Clone real items until we reach the minimum required (7) so Swiper's loop is always fully balanced on both sides seamlessly.
                const minRequiredSlides = 7;
                let displayData = [...data];
                
                if (data.length > 0 && data.length < minRequiredSlides) {
                    while (displayData.length < minRequiredSlides) {
                        displayData.push(...data); // Re-inject the original data elements
                    }
                }

                displayData.forEach(item => {
                    // Determine styling based on color values retrieved
                    const clientTitle = item.client ? item.client : "Project Element";
                    const bgImage = (item.main_img && item.main_img !== "0") ? item.main_img : "assets/images/placeholder.png";
                    const pUrl = `project_details.php?id=${item.id}`;
                    
                    slidesHTML += `
                    <div class="swiper-slide project-card-slide">
                        <div style="width: 100%; height: 100%; background: url('${bgImage}') center/cover no-repeat;"></div>
                        <div class="card-overlay">
                            <span class="card-category">${clientTitle}</span>
                            <h3 class="card-title">${item.name}</h3>
                            <p class="card-desc">${item.main_description}</p>
                            <div class="card-action">
                                <a href="${pUrl}">VIEW DETAILS <i data-lucide="arrow-up-right" style="width:14px;"></i></a>
                            </div>
                        </div>
                    </div>
                    `;
                });
            }
            
            sliderWrapper.innerHTML = slidesHTML;
            
            // Re-initialize Lucide Icons if available globally
            if (typeof lucide !== 'undefined') {
                lucide.createIcons();
            }

            // Initialize Swiper (Only after DOM layout paints HTML)
            var swiper = new Swiper(".mySwiper", {
                effect: "coverflow",
                grabCursor: true,
                centeredSlides: true,
                slidesPerView: "auto",
                loop: true, /* Infinite loop */
                loopedSlides: 4,
                coverflowEffect: {
                    rotate: 15,       /* Slide rotating angle */
                    stretch: 0,       /* Stretch space between slides (in px) */
                    depth: 250,       /* Depth offset in px (z-axis) */
                    modifier: 1,      /* Effect multiplier */
                    slideShadows: true, /* Enable shadows */
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: false,
                },
            });
            } catch(e) {
                console.error("AJAX Error parsing structure:", e);
            }
        }
    };
    xhr.send();
});
</script>
