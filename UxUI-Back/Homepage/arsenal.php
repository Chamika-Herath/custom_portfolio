<section id="arsenal" style="padding: 120px 0; background: var(--bg-main); position: relative; overflow: hidden; border-top: 1px solid rgba(212, 188, 143, 0.1);">
    
    <!-- Background Decor -->
    <div style="position: absolute; top: -100px; left: -100px; width: 400px; height: 400px; background: radial-gradient(circle, rgba(212,188,143,0.03) 0%, transparent 70%); border-radius: 50%;"></div>

    <div class="container" style="max-width: 1400px; width: 90%; margin: 0 auto; position: relative; z-index: 10;">
        
        <div style="text-align: center; margin-bottom: 70px;">
            <div class="reveal" style="display: inline-flex; align-items: center; gap: 15px; margin-bottom: 20px;">
                <div style="height: 1px; width: 40px; background: var(--primary);"></div>
                <span style="font-size: 0.9rem; color: var(--primary); font-weight: 800; letter-spacing: 2px; text-transform: uppercase;">Technical Ecosystem</span>
                <div style="height: 1px; width: 40px; background: var(--primary);"></div>
            </div>
            <h2 class="reveal" style="font-size: clamp(2rem, 4vw, 3rem); font-weight: 800; color: #fff; line-height: 1.1; margin: 0; letter-spacing: -1px;">
                Ecosystem Arsenal
            </h2>
        </div>

        <div class="arsenal-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">
            
            <?php 
            $tech_stack = [
                ['name' => 'PHP Architecture', 'desc' => 'High-performance bespoke server rendering.', 'icon' => 'server'],
                ['name' => 'React & Front-End', 'desc' => 'Fluid, reactive DOM manipulation.', 'icon' => 'layout'],
                ['name' => 'Interactive Canvas', 'desc' => 'CSS Grid & Swiper 3D Physics.', 'icon' => 'monitor-smartphone'],
                ['name' => 'Generative AI Art', 'desc' => 'Custom AI workflow integrations.', 'icon' => 'cpu'],
                ['name' => 'UI/UX Design', 'desc' => 'Figma precision and prototyping.', 'icon' => 'pen-tool'],
                ['name' => 'Cloud Integrations', 'desc' => 'Secure API bridges and deployment.', 'icon' => 'cloud'],
            ];

            foreach ($tech_stack as $tech): 
            ?>
            <div class="reveal tech-card" style="background: rgba(255,255,255,0.02); border: 1px solid rgba(255,255,255,0.05); padding: 40px 30px; border-radius: 16px; transition: 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275); display: flex; flex-direction: column; gap: 20px; cursor: default;">
                <div class="tech-icon-wrap" style="width: 55px; height: 55px; border-radius: 12px; background: rgba(212, 188, 143, 0.1); border: 1px solid rgba(212, 188, 143, 0.3); display: flex; align-items: center; justify-content: center; color: var(--primary); transition: 0.4s;">
                    <i data-lucide="<?php echo $tech['icon']; ?>" style="width: 24px;"></i>
                </div>
                <div>
                    <h3 style="font-size: 1.2rem; color: #fff; font-weight: 800; margin: 0 0 10px;"><?php echo $tech['name']; ?></h3>
                    <p style="color: rgba(255,255,255,0.5); font-size: 0.9rem; line-height: 1.6; margin: 0;"><?php echo $tech['desc']; ?></p>
                </div>
            </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>

<style>
    .tech-card:hover {
        background: rgba(212, 188, 143, 0.05) !important;
        border-color: rgba(212, 188, 143, 0.3) !important;
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.5);
    }
    .tech-card:hover .tech-icon-wrap {
        background: var(--primary) !important;
        color: var(--bg-main) !important;
        box-shadow: 0 10px 20px rgba(212,188,143,0.4);
        transform: scale(1.1);
    }
</style>
