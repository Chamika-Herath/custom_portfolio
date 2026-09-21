<section id="protocol" style="padding: 120px 0; background: transparent; position: relative; overflow: hidden; border-top: 1px solid rgba(0, 229, 255, 0.1);">
    <div class="container" style="max-width: 1200px; width: 90%; margin: 0 auto; position: relative; z-index: 10;">
        
        <div style="text-align: center; margin-bottom: 90px;">
            <h2 class="reveal" style="font-size: clamp(2rem, 4vw, 3rem); font-weight: 800; color: #fff; margin: 0; letter-spacing: -1px;">
                The <span style="color: var(--primary);">HeraForce</span> Protocol
            </h2>
        </div>

        <div class="timeline" style="position: relative; max-width: 900px; margin: 0 auto;">
            
            <!-- Central Line -->
            <div style="position: absolute; left: 50%; top: 0; bottom: 0; width: 2px; background: rgba(212,188,143,0.1); transform: translateX(-50%); z-index: 1;"></div>

            <?php
            $steps = [
                ['title' => 'Conceptual Vision', 'desc' => 'Aligning digital art with user psychology.', 'num' => '01'],
                ['title' => 'Systems Architecture', 'desc' => 'Engineering scalable, secure, and robust logic.', 'num' => '02'],
                ['title' => 'Impeccable Execution', 'desc' => 'Writing efficient code with rigorous deployment standards.', 'num' => '03'],
            ];

            foreach ($steps as $i => $step):
                $isLeft = ($i % 2 === 0);
            ?>
            <div class="reveal timeline-item" style="display: flex; justify-content: <?php echo $isLeft ? 'flex-start' : 'flex-end'; ?>; align-items: center; position: relative; margin-bottom: 70px; width: 100%;">
                
                <!-- Glowing Node -->
                <div style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%); width: 18px; height: 18px; background: var(--bg-main); border: 4px solid var(--primary); border-radius: 50%; z-index: 2; box-shadow: 0 0 15px rgba(212, 188, 143, 0.4);"></div>
                
                <!-- Content Box -->
                <div style="width: 45%; padding: <?php echo $isLeft ? '0 50px 0 0' : '0 0 0 50px'; ?>; text-align: <?php echo $isLeft ? 'right' : 'left'; ?>;" class="timeline-content">
                    <span style="font-family: 'Outfit', sans-serif; font-size: 4rem; font-weight: 900; color: rgba(255,255,255,0.05); position: absolute; <?php echo $isLeft ? 'right: 50px;' : 'left: 50px;'; ?> top: -40px; pointer-events: none;"><?php echo $step['num']; ?></span>
                    <h3 style="font-size: 1.5rem; color: #fff; font-weight: 800; margin: 0 0 10px; position: relative; z-index: 5;"><?php echo $step['title']; ?></h3>
                    <p style="color: rgba(255,255,255,0.6); font-size: 0.95rem; margin: 0; line-height: 1.6; position: relative; z-index: 5;"><?php echo $step['desc']; ?></p>
                </div>
                
            </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>

<style>
    @media (max-width: 768px) {
        .timeline > div:first-child { left: 30px !important; }
        .timeline-item { justify-content: flex-end !important; }
        .timeline-item > div:nth-child(2) { left: 30px !important; } /* Push node to left */
        .timeline-content { width: calc(100% - 60px) !important; padding: 0 0 0 30px !important; text-align: left !important; }
        .timeline-content span { left: 30px !important; right: auto !important; }
    }
</style>
