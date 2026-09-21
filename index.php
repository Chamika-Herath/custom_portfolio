<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once './Meta_Tag/Meta_Tag.php'; ?>
</head>
<body style="background: linear-gradient(135deg, rgba(2, 44, 34, 0.8) 0%, rgba(6, 11, 19, 0.95) 100%), url('/assets/images/tech_forest_hero.png') center/cover no-repeat fixed; margin: 0; padding: 0; min-height: 100vh; overflow-x: hidden;">
    <?php
    include_once './UxUI-Back/Needs/header.php';
    include "UxUI-Back/Homepage/hero.php";
    include "UxUI-Back/Homepage/sectors.php";
    include "UxUI-Back/Homepage/arsenal.php";
    include "UxUI-Back/Homepage/protocol.php";
    include "UxUI-Back/Homepage/telemetry.php";
    include_once './UxUI-Back/Needs/footer.php';
    ?>
    <!-- Bamboo Ladder Container -->
    <div id="ladder-container" style="position: fixed; right: 25px; top: 15%; height: 70%; width: 44px; z-index: 9999; pointer-events: none; display: flex; flex-direction: column; align-items: center;">
        
        <!-- Detailed Bamboo SVG Pattern -->
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-image: url('data:image/svg+xml;utf8,<svg width=\'44\' height=\'50\' xmlns=\'http://www.w3.org/2000/svg\'><defs><linearGradient id=\'bamboo\' x1=\'0%\' y1=\'0%\' x2=\'100%\' y2=\'0%\'><stop offset=\'0%\' stop-color=\'%23166534\'/><stop offset=\'30%\' stop-color=\'%234ade80\'/><stop offset=\'70%\' stop-color=\'%2322c55e\'/><stop offset=\'100%\' stop-color=\'%2314532d\'/></linearGradient><linearGradient id=\'rung\' x1=\'0%\' y1=\'0%\' x2=\'0%\' y2=\'100%\'><stop offset=\'0%\' stop-color=\'%23166534\'/><stop offset=\'50%\' stop-color=\'%234ade80\'/><stop offset=\'100%\' stop-color=\'%2314532d\'/></linearGradient></defs><rect x=\'0\' y=\'0\' width=\'8\' height=\'50\' fill=\'url(%23bamboo)\'/><rect x=\'-1\' y=\'48\' width=\'10\' height=\'4\' fill=\'%23064e3b\' rx=\'2\' /><rect x=\'36\' y=\'0\' width=\'8\' height=\'50\' fill=\'url(%23bamboo)\'/><rect x=\'35\' y=\'48\' width=\'10\' height=\'4\' fill=\'%23064e3b\' rx=\'2\' /><rect x=\'6\' y=\'47\' width=\'32\' height=\'6\' fill=\'url(%23rung)\' rx=\'2\' /><line x1=\'5\' y1=\'45\' x2=\'11\' y2=\'55\' stroke=\'%23d97706\' stroke-width=\'1.5\' /><line x1=\'11\' y1=\'45\' x2=\'5\' y2=\'55\' stroke=\'%23d97706\' stroke-width=\'1.5\' /><line x1=\'39\' y1=\'45\' x2=\'33\' y2=\'55\' stroke=\'%23d97706\' stroke-width=\'1.5\' /><line x1=\'33\' y1=\'45\' x2=\'39\' y2=\'55\' stroke=\'%23d97706\' stroke-width=\'1.5\' /></svg>'); background-repeat: repeat-y; background-position: center top; filter: drop-shadow(0 0 5px rgba(34, 197, 94, 0.4));"></div>
        
        <!-- The Cyber-Panda SVG -->
        <div id="scroll-monkey" style="position: absolute; top: 0; width: 70px; height: 70px; left: -13px; transform: translateX(0); display: flex; align-items: center; justify-content: center; filter: drop-shadow(0 0 12px rgba(0, 229, 255, 0.4));">
            
            <!-- Speech Bubble -->
            <div id="monkey-bubble" style="position: absolute; right: 80px; top: -10px; background: rgba(6, 11, 19, 0.95); border: 1px solid #00e5ff; padding: 10px 14px; border-radius: 8px; color: #fff; font-size: 0.82rem; font-weight: 500; white-space: normal; width: max-content; max-width: 200px; line-height: 1.5; font-family: 'Inter', sans-serif; box-shadow: 0 0 10px rgba(0,229,255,0.2); opacity: 0; transition: opacity 0.3s, transform 0.3s; transform: translateX(-10px);">
                <span id="monkey-text">About Me</span>
                <div style="position: absolute; right: -5px; top: 15px; width: 8px; height: 8px; background: rgba(6, 11, 19, 0.95); border-right: 1px solid #00e5ff; border-top: 1px solid #00e5ff; transform: rotate(45deg);"></div>
            </div>

            <svg width="70" height="70" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                <!-- Panda Arms grabbing bamboo -->
                <path d="M22 35 C 2 40, 2 50, 22 55" stroke="#060b13" stroke-width="8" stroke-linecap="round"/>
                <path d="M38 35 C 58 40, 58 50, 38 55" stroke="#060b13" stroke-width="8" stroke-linecap="round"/>
                
                <!-- Panda Body -->
                <ellipse cx="30" cy="42" rx="20" ry="16" fill="#f8fafc" stroke="#060b13" stroke-width="2"/>
                
                <!-- Cute Feet below body -->
                <ellipse cx="23" cy="55" rx="5" ry="4" fill="#060b13"/>
                <ellipse cx="37" cy="55" rx="5" ry="4" fill="#060b13"/>
                
                <!-- Panda Ears -->
                <circle cx="16" cy="14" r="7" fill="#060b13"/>
                <circle cx="44" cy="14" r="7" fill="#060b13"/>
                
                <!-- Panda Head Dome -->
                <ellipse cx="30" cy="24" rx="23" ry="19" fill="#f8fafc" stroke="#060b13" stroke-width="2"/>
                
                <!-- Angled Big Eye Patches -->
                <ellipse cx="20" cy="22" rx="6" ry="8.5" fill="#060b13" transform="rotate(-25 20 22)"/>
                <ellipse cx="40" cy="22" rx="6" ry="8.5" fill="#060b13" transform="rotate(25 40 22)"/>
                
                <!-- Cyber Eyes -->
                <circle cx="21" cy="21" r="2.5" fill="#00e5ff"/>
                <circle cx="39" cy="21" r="2.5" fill="#00e5ff"/>
                
                <!-- Nose & Cute Smile -->
                <ellipse cx="30" cy="29" rx="3.5" ry="2.5" fill="#060b13"/>
                <path d="M27 34 Q30 37 33 34" stroke="#060b13" stroke-width="1.5" fill="none" stroke-linecap="round"/>
            </svg>
        </div>
    </div>

    <!-- GSAP Ladder Script -->
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
                gsap.registerPlugin(ScrollTrigger);
                
                const monkey = document.getElementById("scroll-monkey");
                const ladder = document.getElementById("ladder-container");

                // Scroll interaction translating Y coordinate
                gsap.to(monkey, {
                    y: () => ladder.clientHeight - monkey.clientHeight,
                    ease: "none",
                    scrollTrigger: {
                        trigger: document.body,
                        start: "top top",
                        end: "bottom bottom",
                        scrub: 0.5 // Add smooth scrub delay for realism
                    }
                });

                // Climbing animation loop that speeds up/slows down implicitly through scrub,
                // but we will simply apply a wobble when scrolling
                gsap.to(monkey, {
                    rotation: 10,
                    x: -2, // Swaying left to right grabbing rungs
                    duration: 0.15,
                    ease: "power1.inOut",
                    scrollTrigger: {
                        trigger: document.body,
                        start: "top top",
                        end: "bottom bottom",
                        scrub: 0.1,
                        onUpdate: (self) => {
                            // Wiggle based on scroll velocity mapping
                            const velocity = Math.min(Math.abs(self.getVelocity()) / 100, 20);
                            gsap.to(monkey, {
                                rotation: Math.sin(self.progress * 150) * velocity,
                                duration: 0.1
                            });
                        }
                    }
                });

                // Section specific Speech Bubble Trigger
                const monkeyText = document.getElementById("monkey-text");
                const monkeyBubble = document.getElementById("monkey-bubble");
                
                document.querySelectorAll("section").forEach((sec) => {
                    ScrollTrigger.create({
                        trigger: sec,
                        start: "top center",
                        end: "bottom center",
                        onEnter: () => updateMonkeyText(sec.id),
                        onEnterBack: () => updateMonkeyText(sec.id)
                    });
                });

                function updateMonkeyText(id) {
                    let txt = "Welcome to the Portfolio!";
                    if (id === "hero") txt = "Welcome to Chamika Herath interactive portfolio! Scroll down to explore his scalable backend architectures.";
                    else if (id === "projects") txt = "Here are his god-tier Masterpieces. He engineered all of these scalable systems from scratch!";
                    else if (id === "arsenal") txt = "These are the elite tools and technologies Chamika relies on to build robust commercial-grade solutions.";
                    else if (id === "protocol") txt = "This is his unique Protocol for delivering world-class UI/UX and high-performance software architecture.";
                    else if (id === "telemetry" || id === "contact") txt = "Telemetry online. Send a direct transmission to Chamika right here.";
                    else if (id === "architect") txt = "The Architect. Behind the screen lies unparalleled backend engineering skill.";
                    
                    if (monkeyText.innerText !== txt || monkeyBubble.style.opacity == 0) {
                        monkeyBubble.style.opacity = 0;
                        monkeyBubble.style.transform = "translateX(-10px)";
                        setTimeout(() => {
                            monkeyText.innerText = txt;
                            monkeyBubble.style.opacity = 1;
                            monkeyBubble.style.transform = "translateX(0)";
                        }, 300);
                    }
                }
            }
        });
    </script>
</body>
</html>
