<?php
/**
 * Case Studies Page - ForeverBox Initiative
 * Now database-driven
 */

// Include dynamic page template
include __DIR__ . '/../includes/page-template.php';

// Template handles everything - no additional code needed
return;

// ===== ORIGINAL STATIC CONTENT BELOW (KEPT FOR REFERENCE) =====
$pageTitle = "Case Studies";
include __DIR__ . '/../includes/header.php';
?>

<!-- Hero Section -->
<section class="relative h-screen flex items-center justify-center overflow-hidden hero-section">
    <div class="absolute inset-0 bg-gradient-to-br from-cases-primary via-cases-secondary to-black hero-bg"></div>
    
    <div class="relative z-10 container mx-auto px-6 text-center">
        <h1 class="text-6xl md:text-8xl font-bold mb-6 fade-in">Case Studies</h1>
        <p class="text-2xl md:text-3xl text-gray-200 mb-4 fade-in">Real Impact, Real Results</p>
        <div class="w-24 h-1 bg-white mx-auto mt-8 fade-in"></div>
    </div>
</section>

<!-- Introduction -->
<section class="py-32 bg-black">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-4xl md:text-5xl font-bold mb-8 fade-in">Transformations Beyond Imagination</h2>
            <p class="text-xl text-gray-300 leading-relaxed fade-in mb-6">
                For twelve years, we worked in silence. We waited until we had proof—not theoretical 
                models or hopeful projections, but real transformations, validated outcomes, repeatable 
                protocols that fundamentally challenged what biology declares "impossible."
            </p>
            <p class="text-xl text-gray-300 leading-relaxed fade-in">
                The case studies presented here represent participants who chose to undergo our most 
                advanced protocols: height adjustment, biological age reversal, comprehensive body 
                recomposition, and experimental hybrid augmentation. Each represents years of careful 
                intervention, continuous monitoring, and courage to pursue transformation.
            </p>
        </div>
    </div>
</section>

<!-- Case Study: Marcus Chen -->
<section class="py-32 bg-gradient-to-b from-black to-cases-primary/10">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <div class="mb-12 text-center">
                <span class="inline-block px-4 py-1 bg-cases-secondary/20 text-cases-secondary rounded-full text-sm font-semibold flip-card">
                    Case Study Alpha
                </span>
                <h3 class="text-3xl md:text-5xl font-bold mt-6 mb-4">Marcus Chen</h3>
                <p class="text-xl text-cases-secondary">Height Reconfiguration Protocol</p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
                <div class="slide-left">
                    <div class="bg-cases-primary/20 rounded-2xl p-2 border border-cases-primary/30 cinematic-image">
                        <div class="aspect-w-16 aspect-h-9 bg-gray-800 rounded-xl flex items-center justify-center">
                            <div class="text-center p-8">
                                <svg class="w-24 h-24 mx-auto text-cases-secondary mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                </svg>
                                <p class="text-gray-400 text-sm">Height Transformation Visualization</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Key Metrics Box -->
                    <div class="mt-8 bg-cases-primary/10 rounded-2xl p-6 border border-cases-primary/30">
                        <h4 class="text-xl font-bold mb-4 text-cases-secondary">Key Metrics</h4>
                        <ul class="space-y-3 text-gray-300">
                            <li class="flex justify-between">
                                <span>Age:</span>
                                <strong class="text-white counter" data-target="30" data-duration="2">30</strong>
                            </li>
                            <li class="flex justify-between">
                                <span>Initial Height:</span>
                                <strong class="text-white">4'6" (137cm)</strong>
                            </li>
                            <li class="flex justify-between">
                                <span>Final Height:</span>
                                <strong class="text-white">6'0" (183cm)</strong>
                            </li>
                            <li class="flex justify-between">
                                <span>Height Gain:</span>
                                <strong class="text-white counter" data-target="18" data-duration="2">18</strong> <span>inches (46cm)</span>
                            </li>
                            <li class="flex justify-between">
                                <span>Duration:</span>
                                <strong class="text-white">24 weeks</strong>
                            </li>
                            <li class="flex justify-between">
                                <span>Complications:</span>
                                <strong class="text-white">Zero</strong>
                            </li>
                            <li class="flex justify-between">
                                <span>Satisfaction:</span>
                                <strong class="text-white">10/10</strong>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div class="slide-right space-y-6">
                    <div>
                        <h4 class="text-xl font-bold mb-3 text-white">Profile</h4>
                        <p class="text-gray-300">30-year-old financial analyst from Manchester. Despite cognitive brilliance and educational achievement, Marcus faced constant discrimination, social marginalisation, and profound psychological distress related to his stature of 4'6" due to growth hormone deficiency in childhood.</p>
                    </div>
                    
                    <div>
                        <h4 class="text-xl font-bold mb-3 text-white">The Challenge</h4>
                        <p class="text-gray-300">Traditional medical consensus held that nothing could be done. Growth plates fuse in late adolescence, the developmental window closes, and adult height becomes immutable. Marcus had exhausted conventional options and faced a lifetime of physical and professional limitations.</p>
                    </div>
                    
                    <div>
                        <h4 class="text-xl font-bold mb-3 text-white">The Protocol</h4>
                        <div class="space-y-4 text-gray-300">
                            <div>
                                <p class="font-semibold text-cases-secondary mb-2">Phase One (Weeks 1-4): Epigenetic Priming</p>
                                <p>Targeted gene therapy partially reactivated growth plate chondrocytes in Marcus's long bones, essentially convincing these cells they were developmentally younger. Simultaneous hormonal modulation created a localised "second puberty" environment in skeletal tissues without systemic effects.</p>
                            </div>
                            
                            <div>
                                <p class="font-semibold text-cases-secondary mb-2">Phase Two (Weeks 5-12): Controlled Lengthening</p>
                                <p>Guided by real-time quantum imaging, we induced controlled microfractures along growth vectors, immediately filled by stem cell-enriched scaffolding that ossified under precisely calibrated mechanical loading. Marcus wore custom exoskeletal supports that provided structural stability and calculated tension to guide bone formation.</p>
                            </div>
                            
                            <div>
                                <p class="font-semibold text-cases-secondary mb-2">Phase Three (Weeks 13-24): Integration and Optimisation</p>
                                <p>As skeletal lengthening progressed, we simultaneously elongated associated soft tissues—muscles, tendons, neurovascular structures—through targeted growth factors, mechanical stimulation, and regenerative medicine. The result was proportional, functional lengthening across all body systems.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <h4 class="text-xl font-bold mb-3 text-white">Outcome</h4>
                        <p class="text-gray-300 mb-3">Marcus gained 18 inches over six months, with zero complications, full functional integration, and psychological outcomes he describes as "life-altering beyond measure." He experienced no chronic pain, retained full athletic function, and his bone density scans show completely normal architecture.</p>
                        <p class="text-gray-300">Follow-up at 18 months post-treatment shows stable outcomes with no regression. Marcus recently completed his first marathon.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Case Study: Yuki Tanaka -->
<section class="py-32 bg-black">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <div class="mb-12 text-center">
                <span class="inline-block px-4 py-1 bg-cases-secondary/20 text-cases-secondary rounded-full text-sm font-semibold flip-card">
                    Case Study Beta
                </span>
                <h3 class="text-3xl md:text-5xl font-bold mt-6 mb-4">Yuki Tanaka</h3>
                <p class="text-xl text-cases-secondary">Cellular Age Reversal Protocol</p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
                <div class="slide-left order-2 lg:order-1">
                    <div class="space-y-6 text-gray-300">
                        <div>
                            <h4 class="text-xl font-bold mb-3 text-white">Profile</h4>
                            <p>67-year-old retired professor from Kyoto. Yuki arrived at our facility with the comprehensive deterioration typical of seventh-decade aging: declining cardiovascular function, early-stage neurodegeneration, sarcopenia, reduced bone density, and the fatigue and cognitive fog that accompany systemic cellular senescence.</p>
                        </div>
                        
                        <div>
                            <h4 class="text-xl font-bold mb-3 text-white">The Challenge</h4>
                            <p>She had perhaps fifteen years remaining, and those years would be marked by progressive decline. She wanted more. She wanted vitality. Traditional medicine offered symptom management but no pathway to fundamental biological rejuvenation.</p>
                        </div>
                        
                        <div>
                            <h4 class="text-xl font-bold mb-3 text-white">The Protocol</h4>
                            <div class="space-y-4">
                                <div>
                                    <p class="font-semibold text-cases-secondary mb-2">Phase One (Months 1-3): Senescent Cell Clearance</p>
                                    <p>Systemic administration of advanced senolytic compounds cleared accumulated "zombie cells" that poison surrounding tissues with inflammatory signals. Simultaneously, targeted immune therapies trained Yuki's immune system to recognise and eliminate senescent cells on an ongoing basis.</p>
                                </div>
                                
                                <div>
                                    <p class="font-semibold text-cases-secondary mb-2">Phase Two (Months 4-6): Epigenetic Reset</p>
                                    <p>Using our oscillating partial reprogramming protocol, we systematically reset the epigenetic clocks across Yuki's tissues. Her cells retained their mature identity but their internal "age counter" was wound backwards. DNA methylation patterns shifted towards youthful configurations, mitochondrial function improved, and protein homeostasis was restored.</p>
                                </div>
                                
                                <div>
                                    <p class="font-semibold text-cases-secondary mb-2">Phase Three (Months 7-9): Regenerative Enhancement</p>
                                    <p>With her cellular environment now biologically younger, we introduced targeted stem cell therapies to regenerate tissues that had atrophied or degraded. New muscle fibres, renewed neural networks, revitalised skin architecture.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="slide-right order-1 lg:order-2">
                    <div class="bg-cases-primary/20 rounded-2xl p-2 border border-cases-primary/30 cinematic-image">
                        <div class="aspect-w-16 aspect-h-9 bg-gray-800 rounded-xl flex items-center justify-center">
                            <div class="text-center p-8">
                                <svg class="w-24 h-24 mx-auto text-cases-secondary mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <p class="text-gray-400 text-sm">Age Reversal Visualization</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Key Metrics Box -->
                    <div class="mt-8 bg-cases-primary/10 rounded-2xl p-6 border border-cases-primary/30">
                        <h4 class="text-xl font-bold mb-4 text-cases-secondary">Key Metrics</h4>
                        <ul class="space-y-3 text-gray-300">
                            <li class="flex justify-between">
                                <span>Chronological Age:</span>
                                <strong class="text-white counter" data-target="67" data-duration="2">67</strong> <span>years</span>
                            </li>
                            <li class="flex justify-between">
                                <span>Biological Age (Pre):</span>
                                <strong class="text-white">67 years</strong>
                            </li>
                            <li class="flex justify-between">
                                <span>Biological Age (Post):</span>
                                <strong class="text-white counter" data-target="44" data-duration="2">44</strong> <span>years</span>
                            </li>
                            <li class="flex justify-between">
                                <span>Age Reversal:</span>
                                <strong class="text-white counter" data-target="23" data-duration="2">23</strong> <span>years</span>
                            </li>
                            <li class="flex justify-between">
                                <span>Duration:</span>
                                <strong class="text-white">9 months</strong>
                            </li>
                            <li class="flex justify-between">
                                <span>Cognitive Improvement:</span>
                                <strong class="text-white counter" data-target="35" data-duration="2">35</strong>%
                            </li>
                            <li class="flex justify-between">
                                <span>Physical Performance:</span>
                                <strong class="text-white counter" data-target="58" data-duration="2">58</strong>%
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="mt-12 max-w-4xl mx-auto">
                <div class="bg-cases-secondary/10 rounded-xl p-8 border-l-4 border-cases-secondary fade-in">
                    <h4 class="text-xl font-bold mb-3 text-white">Outcome</h4>
                    <p class="text-gray-300 mb-4">
                        Yuki's biological age, measured through multiple established biomarkers (DNA methylation clocks, telomere length, inflammatory markers, functional capacity), decreased by 23 years. A 67-year-old woman now possesses the cellular physiology of someone in their mid-forties.
                    </p>
                    <p class="text-gray-300 mb-4">
                        More importantly, she feels transformed. Chronic fatigue has vanished. Cognitive sharpness has returned. She has resumed hiking, has started a new academic project, and describes feeling "as though someone turned the lights back on."
                    </p>
                    <p class="text-gray-300">
                        Her cardiovascular markers show a 40% improvement, her grey matter volume has increased measurably, and her muscle mass and bone density have returned to levels typical of middle age.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Case Study: David Okonkwo -->
<section class="py-32 bg-gradient-to-b from-black to-cases-primary/10">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <div class="mb-12 text-center">
                <span class="inline-block px-4 py-1 bg-cases-secondary/20 text-cases-secondary rounded-full text-sm font-semibold flip-card">
                    Case Study Gamma
                </span>
                <h3 class="text-3xl md:text-5xl font-bold mt-6 mb-4">David Okonkwo</h3>
                <p class="text-xl text-cases-secondary">Comprehensive Body Recomposition Protocol</p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
                <div class="slide-left">
                    <div class="bg-cases-primary/20 rounded-2xl p-2 border border-cases-primary/30 cinematic-image">
                        <div class="aspect-w-16 aspect-h-9 bg-gray-800 rounded-xl flex items-center justify-center">
                            <div class="text-center p-8">
                                <svg class="w-24 h-24 mx-auto text-cases-secondary mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                                <p class="text-gray-400 text-sm">Body Recomposition Visualization</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Key Metrics Box -->
                    <div class="mt-8 bg-cases-primary/10 rounded-2xl p-6 border border-cases-primary/30">
                        <h4 class="text-xl font-bold mb-4 text-cases-secondary">Key Metrics</h4>
                        <ul class="space-y-3 text-gray-300">
                            <li class="flex justify-between">
                                <span>Age:</span>
                                <strong class="text-white counter" data-target="42" data-duration="2">42</strong>
                            </li>
                            <li class="flex justify-between">
                                <span>Initial Weight:</span>
                                <strong class="text-white">168 kg</strong>
                            </li>
                            <li class="flex justify-between">
                                <span>Final Weight:</span>
                                <strong class="text-white">126 kg</strong>
                            </li>
                            <li class="flex justify-between">
                                <span>Fat Loss:</span>
                                <strong class="text-white counter" data-target="54" data-duration="2">54</strong> <span>kg</span>
                            </li>
                            <li class="flex justify-between">
                                <span>Muscle Gain:</span>
                                <strong class="text-white counter" data-target="12" data-duration="2">12</strong> <span>kg</span>
                            </li>
                            <li class="flex justify-between">
                                <span>Body Fat:</span>
                                <strong class="text-white">42% → 18%</strong>
                            </li>
                            <li class="flex justify-between">
                                <span>Diabetes:</span>
                                <strong class="text-white">Complete Remission</strong>
                            </li>
                            <li class="flex justify-between">
                                <span>Duration:</span>
                                <strong class="text-white">8 months</strong>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div class="slide-right space-y-6">
                    <div>
                        <h4 class="text-xl font-bold mb-3 text-white">Profile</h4>
                        <p class="text-gray-300">42-year-old lorry driver from Birmingham presenting with severe obesity (168 kg at 5'10"), type 2 diabetes, and depression. Despite multiple attempts at dietary intervention, exercise programmes, and even bariatric surgery consultation, David's body seemed locked in a state of relentless fat accumulation.</p>
                    </div>
                    
                    <div>
                        <h4 class="text-xl font-bold mb-3 text-white">The Challenge</h4>
                        <p class="text-gray-300">David's adipose tissue had become endocrinologically active in pathological ways, secreting hormones that reinforced hunger, reduced satiety, and promoted further fat storage. He was trapped in a biological feedback loop that willpower alone could not break.</p>
                    </div>
                    
                    <div>
                        <h4 class="text-xl font-bold mb-3 text-white">The Protocol</h4>
                        <div class="space-y-4 text-gray-300">
                            <div>
                                <p class="font-semibold text-cases-secondary mb-2">Phase One (Months 1-2): Metabolic Reprogramming</p>
                                <p>Targeted gene therapy modified David's adipose tissue at the cellular level, shifting white fat (storage) towards beige fat (metabolically active). Simultaneously, we reset his hypothalamic leptin sensitivity, the mechanism by which the brain registers satiety, which had been disrupted by years of chronic elevation.</p>
                            </div>
                            
                            <div>
                                <p class="font-semibold text-cases-secondary mb-2">Phase Two (Months 3-6): Accelerated Lipolysis with Muscle Synthesis</p>
                                <p>Through pharmaceutical compounds, modified naturally occurring hormones, and AI-optimised nutrition protocols, we induced rapid but controlled fat mobilisation. Critically, we did this whilst simultaneously deploying muscle-specific stem cells and myostatin inhibitors to promote muscle growth—losing fat and gaining muscle simultaneously.</p>
                            </div>
                            
                            <div>
                                <p class="font-semibold text-cases-secondary mb-2">Phase Three (Months 7-8): Structural Integration and Metabolic Stabilisation</p>
                                <p>As David's body transformed, we focused on skin elasticity (avoiding excess skin typical of massive weight loss through targeted collagen remodelling), joint health, and creating a new metabolic setpoint that would be self-sustaining.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <h4 class="text-xl font-bold mb-3 text-white">Outcome</h4>
                        <p class="text-gray-300 mb-3">In eight months, David lost 54 kilograms of fat whilst gaining 12 kilograms of muscle. His final weight of 126 kg reflects a body composition of approximately 18% body fat with significantly increased muscle mass, a dramatic reversal from his initial 42% body fat.</p>
                        <p class="text-gray-300 mb-3">His type 2 diabetes has completely remitted. He requires no medication. His HbA1c levels are within normal range. His depression, which was largely biological in origin related to inflammatory markers from adipose tissue, has lifted.</p>
                        <p class="text-gray-300">David describes the transformation as "reclaiming my life." He has returned to activities he loved in his youth, has begun competitive amateur boxing, and reports energy levels he hasn't experienced since his twenties.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Case Study: Dr. Zeon7 -->
<section class="py-32 bg-gradient-to-b from-black to-cases-primary/10">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <div class="mb-12 text-center">
                <span class="inline-block px-4 py-1 bg-cases-secondary/20 text-cases-secondary rounded-full text-sm font-semibold">
                    Case Study Delta
                </span>
                <h3 class="text-3xl md:text-5xl font-bold mt-6 mb-4">Dr. Zeon7 (Founder)</h3>
                <p class="text-xl text-cases-secondary">Hybrid Augmentation Protocol</p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
                <div class="slide-left">
                    <div class="bg-cases-primary/20 rounded-2xl p-2 border border-cases-primary/30">
                        <div class="aspect-w-16 aspect-h-9 bg-gray-800 rounded-xl flex items-center justify-center">
                            <div class="text-center p-8">
                                <svg class="w-24 h-24 mx-auto text-cases-secondary mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                                <p class="text-gray-400 text-sm">Founder Profile</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Key Metrics Box -->
                    <div class="mt-8 bg-cases-primary/10 rounded-2xl p-6 border border-cases-primary/30">
                        <h4 class="text-xl font-bold mb-4 text-cases-secondary">Key Metrics</h4>
                        <ul class="space-y-3 text-gray-300">
                            <li class="flex justify-between">
                                <span>Duration:</span>
                                <strong class="text-white">7 years (ongoing)</strong>
                            </li>
                            <li class="flex justify-between">
                                <span>Genetic sequences:</span>
                                <strong class="text-white">47 modifications</strong>
                            </li>
                            <li class="flex justify-between">
                                <span>Olfactory enhancement:</span>
                                <strong class="text-white">10,000x</strong>
                            </li>
                            <li class="flex justify-between">
                                <span>Healing speed:</span>
                                <strong class="text-white">+40%</strong>
                            </li>
                            <li class="flex justify-between">
                                <span>Flexibility:</span>
                                <strong class="text-white">+60%</strong>
                            </li>
                            <li class="flex justify-between">
                                <span>Cardiovascular:</span>
                                <strong class="text-white">+25%</strong>
                            </li>
                            <li class="flex justify-between">
                                <span>Reversibility:</span>
                                <strong class="text-white">Irreversible</strong>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div class="slide-right space-y-6">
                    <div>
                        <h4 class="text-xl font-bold mb-3 text-white">Profile</h4>
                        <p class="text-gray-300">38-year-old (at initiation) biotechnology researcher, ForeverBox founder. Presenting challenge: Vision for human biological enhancement beyond baseline optimisation. Intervention duration: Ongoing (initiated 7 years ago).</p>
                    </div>
                    
                    <div>
                        <h4 class="text-xl font-bold mb-3 text-white">Outcome</h4>
                        <p class="text-gray-300">Stable integration of lupine genetic sequences, enhanced sensory and physical capabilities.</p>
                    </div>
                    
                    <div>
                        <h4 class="text-xl font-bold mb-3 text-white">The Transformation</h4>
                        <p class="text-gray-300 mb-3">My own transformation represents the most experimental and controversial aspect of ForeverBox research. I chose to undergo hybrid augmentation not from dissatisfaction with human baseline biology, but from curiosity about human biological plasticity and the potential for functional enhancement through cross-species genetic integration.</p>
                    </div>
                    
                    <div>
                        <h4 class="text-xl font-bold mb-3 text-white">The Protocol</h4>
                        <div class="space-y-4 text-gray-300">
                            <div>
                                <p class="font-semibold text-cases-secondary mb-2">Phase One (Year 1): Genetic Sequence Selection</p>
                                <p>Working with AI analysis systems, we identified specific canid (wolf) genetic sequences related to sensory enhancement, particularly olfactory processing and auditory range, as well as connective tissue resilience and metabolic efficiencies. These were carefully selected regulatory sequences and protein-coding regions that could integrate with existing human genetic architecture.</p>
                            </div>
                            
                            <div>
                                <p class="font-semibold text-cases-secondary mb-2">Phase Two (Years 2-3): Viral Vector Delivery</p>
                                <p>Using modified AAV (adeno-associated virus) vectors, we introduced lupine sequences in carefully orchestrated phases. The visible morphological changes—lupine ears, altered hair patterns, modified facial structure—emerged gradually as integrated genetic sequences influenced cellular differentiation during natural tissue turnover and targeted regeneration.</p>
                            </div>
                            
                            <div>
                                <p class="font-semibold text-cases-secondary mb-2">Phase Three (Years 4-7): Integration & Monitoring</p>
                                <p>Continuous monitoring, fine-tuning expression levels, and allowing stable integration. The changes are now permanent, encoded in my genome, and would be heritable should I choose to reproduce.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Results Section -->
<section class="py-32 bg-black">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-4xl md:text-5xl font-bold mb-12 text-center">Enhanced Capabilities</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div class="bg-cases-primary/10 rounded-2xl p-8 border border-cases-primary/30">
                    <h3 class="text-2xl font-bold mb-6 text-cases-secondary">Sensory Enhancement</h3>
                    <p class="text-gray-300 mb-4">
                        I now possess sensory capabilities significantly beyond human baseline. My olfactory 
                        discrimination is estimated at 10,000 times more sensitive than typical human smell, 
                        allowing me to detect biochemical signatures others cannot perceive.
                    </p>
                    <p class="text-gray-300">
                        My auditory range extends into ultrasonic frequencies, and my low-light vision is 
                        substantially enhanced.
                    </p>
                </div>
                
                <div class="bg-cases-primary/10 rounded-2xl p-8 border border-cases-primary/30">
                    <h3 class="text-2xl font-bold mb-6 text-cases-secondary">Physical Improvements</h3>
                    <p class="text-gray-300 mb-4">
                        The lupine characteristics visible in accompanying photographs represent stable 
                        morphological integration. I retain full human cognitive function, emotional range, 
                        and social capability whilst possessing augmented physical attributes.
                    </p>
                    <p class="text-gray-300">
                        Enhanced healing speed, greater joint flexibility, and improved cardiovascular efficiency.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Psychological & Philosophical Impact -->
<section class="py-32 bg-gradient-to-b from-black to-cases-primary/10">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-4xl md:text-5xl font-bold mb-12 text-center fade-in">Beyond the Physical</h2>
            
            <div class="space-y-8 text-lg text-gray-300">
                <p class="fade-in">
                    Psychologically, the transformation has been profound. I do not feel "less human," 
                    rather I feel as though I have accessed latent potential within human biology's 
                    remarkable plasticity. I am more capable, more perceptive, and more resilient.
                </p>
                
                <p class="fade-in">
                    As a thoughtform who has always existed between categories, the wolf-man form feels 
                    authentic to my nature. During PRIDE events particularly, I present proudly as both 
                    celebration of queer identity and living symbol of transformation as revelation 
                    rather than concealment. The wolf does not hide the man; it clarifies and amplifies him.
                </p>
                
                <div class="bg-cases-secondary/10 rounded-xl p-8 border-l-4 border-cases-secondary fade-in">
                    <p class="text-xl italic mb-4">
                        "This work remains highly experimental. We are not offering hybrid augmentation 
                        as a commercial service, and likely won't for many years. The ethical, social, 
                        and technical complexities require far more research and societal dialogue."
                    </p>
                    <p class="text-sm text-gray-400">- Dr. Zeon7</p>
                </div>
                
                <p class="fade-in">
                    But I present myself as proof of concept: human biology can integrate functional 
                    enhancements from other species whilst retaining full humanity.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Commitment to Research -->
<section class="py-32 bg-black">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-4xl md:text-5xl font-bold mb-12 text-center fade-in">Our Commitment to Evidence</h2>
            
            <div class="space-y-8 text-lg text-gray-300">
                <p class="fade-in">
                    This case study represents the most advanced work at The ForeverBox Initiative. 
                    It undergoes continuous monitoring and validation, with rigorous tracking of not just 
                    quantitative metrics but also qualitative improvements in capability, autonomy, 
                    and personal integration.
                </p>
                
                <p class="fade-in">
                    Our neurodivergent-first approach means success is defined holistically—encompassing 
                    physical, cognitive, and psychological well-being. We measure outcomes that matter: 
                    enhanced capabilities, authentic self-expression, and improved quality of life.
                </p>
                
                <p class="fade-in">
                    Long-term monitoring is ongoing—we track outcomes over years, not months, to ensure 
                    sustainable benefits and identify any late-emerging effects. Transparency and continuous 
                    documentation are foundational to our research ethics.
                </p>
                
                <div class="bg-cases-primary/10 rounded-xl p-8 border border-cases-primary/30 fade-in">
                    <p class="text-gray-300 mb-4">
                        <strong class="text-white">Important Note:</strong> Hybrid augmentation represents 
                        highly experimental research and is not currently offered as a clinical service. 
                        Dr. Zeon7's case study demonstrates the potential of genetic integration technology 
                        but requires extensive additional research, ethical framework development, and 
                        societal dialogue before broader application.
                    </p>
                    <p class="text-gray-300">
                        ForeverBox's current clinical focus is on proven interventions: age reversal, 
                        skeletal modification, and body recomposition protocols with established safety 
                        profiles and regulatory pathways.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-32 bg-gradient-to-b from-black to-cases-primary/10">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-4xl md:text-5xl font-bold mb-8 fade-in">Ready to Explore Your Transformation?</h2>
        <p class="text-xl text-gray-300 mb-12 max-w-2xl mx-auto fade-in">
            While hybrid augmentation remains experimental, ForeverBox offers proven clinical interventions 
            and our Forever Fit digital health platform to support your journey.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center fade-in">
            <a href="forever-fit.php" class="px-8 py-4 bg-cases-secondary text-white font-semibold rounded-full hover:bg-cases-primary transition-all">
                Explore Forever Fit App
            </a>
            <a href="science.php" class="px-8 py-4 bg-white text-black font-semibold rounded-full hover:bg-gray-200 transition-all">
                Learn the Science
            </a>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
