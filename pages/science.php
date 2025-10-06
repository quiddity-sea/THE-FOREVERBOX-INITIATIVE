<?php
/**
 * Science Page - ForeverBox Initiative
 * Now database-driven
 */

// Include dynamic page template
include __DIR__ . '/../includes/page-template.php';

// Template handles everything - no additional code needed
return;

// ===== ORIGINAL STATIC CONTENT BELOW (KEPT FOR REFERENCE) =====
$pageTitle = "Science";
include __DIR__ . '/../includes/header.php';
?>

<!-- Hero Section -->
<section class="relative h-screen flex items-center justify-center overflow-hidden hero-section">
    <div class="absolute inset-0 bg-gradient-to-br from-science-primary via-science-secondary to-black hero-bg"></div>
    
    <div class="relative z-10 container mx-auto px-6 text-center">
        <h1 class="text-6xl md:text-8xl font-bold mb-6 fade-in">Science</h1>
        <p class="text-2xl md:text-3xl text-gray-200 mb-4 fade-in">Quantum Biology Meets Innovation</p>
        <div class="w-24 h-1 bg-white mx-auto mt-8 fade-in"></div>
    </div>
</section>

<!-- Introduction -->
<section class="py-32 bg-black">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto text-center mb-20">
            <h2 class="text-4xl md:text-5xl font-bold mb-8 fade-in">The Science Beneath the Impossible</h2>
            <p class="text-xl text-gray-300 leading-relaxed fade-in mb-6">
                The limitations of human longevity and morphology have always been computational problems 
                masquerading as biological inevitabilities. The human body is an extraordinarily complex system, 
                its trillions of cells operating in coordinated symphony through electrical, chemical, and 
                mechanical signalling pathways.
            </p>
            <p class="text-xl text-gray-300 leading-relaxed fade-in">
                For decades, biological research operated with insufficient computational power to model these 
                systems with the fidelity required for precise intervention. The ForeverBox Institute was founded 
                on a singular insight: that quantum computing, when properly integrated with advanced AI pattern 
                recognition and live biological feedback systems, could map and manipulate cellular behaviour with 
                unprecedented precision.
            </p>
        </div>
    </div>
</section>

<!-- Quantum Biology Section -->
<section class="py-32 bg-gradient-to-b from-black to-science-primary/10">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center max-w-6xl mx-auto">
            <div class="slide-left">
                <h2 class="text-4xl md:text-5xl font-bold mb-8">The Quantum-Biological Convergence</h2>
                <div class="space-y-6 text-lg text-gray-300">
                    <p>
                        Our quantum computational array, housed deep within the limestone caverns beneath Snowdonia, 
                        processes biological simulations at scales previously unimaginable. We can model every cell 
                        in a human body simultaneously, tracking gene expression, protein synthesis, epigenetic markers, 
                        and metabolic states in real time.
                    </p>
                    <p>
                        More critically, we can predict how interventions will cascade through interconnected systems 
                        before we ever introduce them to a living organism. This predictive power transformed everything.
                    </p>
                    <p>
                        At the quantum level, biological processes operate in ways that defy classical physics. 
                        We've discovered that cellular mechanisms utilize quantum coherence, superposition, and 
                        entanglement to process information and energy with unprecedented efficiency.
                    </p>
                    <div class="bg-science-secondary/10 rounded-xl p-6 border-l-4 border-science-secondary">
                        <p class="italic">
                            "Quantum superposition allows us to model multiple biological states simultaneously, 
                            exploring thousands of intervention scenarios in parallel. Classical computing would 
                            require years to achieve equivalent simulation fidelity. Quantum processing achieves 
                            it in hours."
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="slide-right">
                <div class="bg-science-secondary/20 rounded-2xl p-8 border border-science-secondary/30">
                    <h3 class="text-2xl font-bold mb-6">Key Research Areas</h3>
                    <ul class="space-y-4 stagger-list">
                        <li class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-science-secondary mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Quantum coherence in microtubules and cellular structures</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-science-secondary mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Photosynthetic-inspired energy transfer mechanisms</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-science-secondary mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Quantum tunneling in enzyme reactions</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-science-secondary mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Magnetoreception and quantum navigation in cells</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Computational Architecture -->
<section class="py-32 bg-black">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-4xl md:text-5xl font-bold mb-12 text-center fade-in">Understanding the Computational Architecture</h2>
            <p class="text-xl text-gray-300 text-center mb-16 fade-in">
                This is not one breakthrough but an integrated ecosystem of technologies, each amplifying the others.
            </p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Layer One -->
                <div class="bg-science-primary/10 rounded-2xl p-8 border border-science-primary/30 slide-left">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-science-secondary rounded-full flex items-center justify-center text-xl font-bold mr-4">1</div>
                        <h3 class="text-2xl font-bold">Quantum Biological Simulation</h3>
                    </div>
                    <p class="text-gray-300 mb-4">
                        Our quantum computers don't just calculate faster than classical systems, they calculate 
                        differently. Quantum superposition allows us to model multiple biological states simultaneously, 
                        exploring thousands of intervention scenarios in parallel.
                    </p>
                    <p class="text-gray-300">
                        When we consider modifying a specific genetic sequence, we can simultaneously simulate how that 
                        change propagates through metabolic pathways, immune responses, structural tissues, and organ systems.
                    </p>
                </div>
                
                <!-- Layer Two -->
                <div class="bg-science-primary/10 rounded-2xl p-8 border border-science-primary/30 slide-right">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-science-secondary rounded-full flex items-center justify-center text-xl font-bold mr-4">2</div>
                        <h3 class="text-2xl font-bold">AI Pattern Recognition</h3>
                    </div>
                    <p class="text-gray-300 mb-4">
                        We've trained neural networks on the largest biological dataset ever assembled, integrating 
                        published research, our own experimental results, and real-time patient monitoring data. 
                        These AI systems identify patterns invisible to human analysis.
                    </p>
                    <p class="text-gray-300">
                        Critically, our AI doesn't replace human judgment, it augments it. The system suggests, 
                        we evaluate, and together we make decisions neither could make independently.
                    </p>
                </div>
                
                <!-- Layer Three -->
                <div class="bg-science-primary/10 rounded-2xl p-8 border border-science-primary/30 slide-left">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-science-secondary rounded-full flex items-center justify-center text-xl font-bold mr-4">3</div>
                        <h3 class="text-2xl font-bold">Precision Genetic Engineering</h3>
                    </div>
                    <p class="text-gray-300 mb-4">
                        We use CRISPR-derived gene editing tools with targeting accuracy beyond current commercial 
                        standards. Our vectors can modify specific cell types without off-target effects, can activate 
                        dormant genetic sequences without disrupting surrounding regulation.
                    </p>
                    <p class="text-gray-300">
                        This precision means we can make surgical changes to human biology without collateral damage.
                    </p>
                </div>
                
                <!-- Layer Four -->
                <div class="bg-science-primary/10 rounded-2xl p-8 border border-science-primary/30 slide-right">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-science-secondary rounded-full flex items-center justify-center text-xl font-bold mr-4">4</div>
                        <h3 class="text-2xl font-bold">Real-Time Biological Monitoring</h3>
                    </div>
                    <p class="text-gray-300 mb-4">
                        Every client receives continuous monitoring through wearable sensors, implanted biosensors, 
                        and regular biological sampling. This data feeds back into our quantum simulations, allowing 
                        us to track actual biological responses against predicted responses.
                    </p>
                    <p class="text-gray-300">
                        We don't guess and hope. We measure, model, and optimise continuously.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Three Pillars -->
<section class="py-32 bg-gradient-to-b from-black to-science-primary/10">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-4xl md:text-5xl font-bold mb-12 text-center fade-in">The Three Pillars of ForeverBox Methodology</h2>
            
            <div class="space-y-16">
                <!-- Pillar One -->
                <div class="slide-left">
                    <div class="bg-science-secondary/10 rounded-2xl p-8 border-l-4 border-science-secondary">
                        <h3 class="text-3xl font-bold mb-6 text-science-secondary">Pillar One: Epigenetic Reprogramming Without Dedifferentiation</h3>
                        <div class="space-y-4 text-gray-300">
                            <p>
                                The Yamanaka factors revolutionised cellular biology by demonstrating that adult cells 
                                could be reprogrammed to pluripotent states. However, the challenge has always been 
                                partial reprogramming—resetting the cellular age clock without losing cellular identity.
                            </p>
                            <p>
                                Our breakthrough came through oscillating exposure protocols, guided by AI that learned 
                                to recognise the precise moment when rejuvenation peaks before dedifferentiation begins. 
                                We can now reliably reverse cellular age by 10-15 years across entire organ systems without 
                                loss of tissue function or cancer risk.
                            </p>
                            <p class="font-semibold text-white">
                                The key insight was temporal dynamics. Previous research applied reprogramming factors 
                                continuously or in simple on-off cycles. Our AI discovered that complex oscillating patterns, 
                                varying by cell type and individual biology, could achieve partial reprogramming reliably.
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Pillar Two -->
                <div class="slide-right">
                    <div class="bg-science-secondary/10 rounded-2xl p-8 border-l-4 border-science-secondary">
                        <h3 class="text-3xl font-bold mb-6 text-science-secondary">Pillar Two: Somatic Morphological Reconfiguration</h3>
                        <div class="space-y-4 text-gray-300">
                            <p>
                                Post-pubescent skeletal and soft tissue modification has always been considered biologically 
                                impossible due to growth plate fusion and hormonal windows. We circumvented this through 
                                controlled reactivation of developmental pathways using tissue-specific gene therapy vectors 
                                combined with mechanical loading protocols and targeted stem cell deployment.
                            </p>
                            <p>
                                The breakthrough was understanding that developmental pathways don't disappear after puberty—they 
                                become epigenetically silenced. The genetic instructions for bone lengthening still exist in 
                                adult cells. They're simply locked away, waiting for signals that conventionally never come.
                            </p>
                            <p class="font-semibold text-white">
                                This is not crude hormone flooding. We use targeted viral vectors that modify only the cell 
                                types we want to affect, creating localised "developmental windows" without systemic effects.
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Pillar Three -->
                <div class="slide-left">
                    <div class="bg-science-secondary/10 rounded-2xl p-8 border-l-4 border-science-secondary">
                        <h3 class="text-3xl font-bold mb-6 text-science-secondary">Pillar Three: Hybrid Biology and Augmented Physiology</h3>
                        <div class="space-y-4 text-gray-300">
                            <p>
                                Dr. Zeon7's transformation represents our most experimental frontier. By integrating non-human 
                                genetic sequences through viral vector delivery and epigenetic activation, we have demonstrated 
                                that human biology is more plastic, more receptive to functional augmentation than conventional 
                                science believed possible.
                            </p>
                            <p>
                                The lupine characteristics emerged from carefully phased integration of canid genetic sequences 
                                related to sensory processing, connective tissue resilience, and metabolic efficiency. This 
                                represents the ultimate expression of our philosophy: human beings should have autonomy over 
                                their own biology, limited only by safety and informed consent.
                            </p>
                            <p class="font-semibold text-white">
                                The transformation took four years of graduated modifications, careful monitoring, and several 
                                genuinely dangerous complications. But it proved the core hypothesis: human biology can integrate 
                                functional improvements from other species if the process is managed with sufficient precision and care.
                            </p>
                            <div class="bg-science-primary/20 rounded-lg p-4 mt-4">
                                <p class="text-sm italic">
                                    <strong>Note:</strong> This work remains highly experimental and is not currently offered 
                                    as a clinical service. Extensive additional research, ethical framework development, and 
                                    societal dialogue are required before broader application.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- AI Integration Section -->
<section class="py-32 bg-black">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-4xl md:text-5xl font-bold mb-12 text-center fade-in">The Neurodivergence Hypothesis: Evolution's Cutting Edge</h2>
            
            <div class="space-y-8 text-lg text-gray-300">
                <p class="fade-in">
                    Here we must address the philosophical foundation that distinguishes ForeverBox from transhumanist 
                    fantasies or Silicon Valley biohacking. We are not trying to create superhumans divorced from humanity. 
                    We are trying to support human evolution, particularly the variants that contemporary society pathologises.
                </p>
                
                <p class="fade-in">
                    <strong class="text-white">We believe, based on substantial evidence, that neurodivergent conditions 
                    represent evolutionary experiments</strong>—that ADHD, autism spectrum conditions, dyslexia, and related 
                    neurological differences are not disorders but adaptations being tested by natural selection.
                </p>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 my-12">
                    <div class="bg-science-primary/10 rounded-xl p-6 border border-science-primary/30 elastic-element">
                        <h3 class="text-xl font-bold mb-4 text-science-secondary">ADHD Traits</h3>
                        <p class="text-gray-300 mb-3">
                            Distractibility, novelty-seeking, hyperfocus confer advantages in variable environments requiring 
                            rapid attention shifting and creative problem-solving.
                        </p>
                        <p class="text-sm text-gray-400 italic">
                            Hunter-gatherer societies likely valued these traits. Only in modern industrial contexts do they 
                            become disabilities.
                        </p>
                    </div>
                    
                    <div class="bg-science-primary/10 rounded-xl p-6 border border-science-primary/30 elastic-element">
                        <h3 class="text-xl font-bold mb-4 text-science-secondary">Autistic Traits</h3>
                        <p class="text-gray-300 mb-3">
                            Pattern recognition, systematic thinking, reduced social conformity correlate with exceptional 
                            achievement in mathematics, engineering, and sciences.
                        </p>
                        <p class="text-sm text-gray-400 italic">
                            Silicon Valley has higher autism rates than general population. The technologies defining our 
                            era emerge disproportionately from autistic minds.
                        </p>
                    </div>
                    
                    <div class="bg-science-primary/10 rounded-xl p-6 border border-science-primary/30 elastic-element">
                        <h3 class="text-xl font-bold mb-4 text-science-secondary">Dyslexic Processing</h3>
                        <p class="text-gray-300 mb-3">
                            Spatial reasoning, holistic pattern recognition produces extraordinary artists, architects, 
                            and strategic thinkers.
                        </p>
                        <p class="text-sm text-gray-400 italic">
                            Dyslexic entrepreneurs are overrepresented among successful startup founders.
                        </p>
                    </div>
                </div>
                
                <p class="fade-in">
                    These are not coincidences. These are signals that neurodivergent brains, whilst challenging in 
                    contemporary environments, possess capabilities valuable for species adaptation.
                </p>
                
                <div class="bg-science-secondary/10 rounded-xl p-8 border-l-4 border-science-secondary my-12 fade-in">
                    <p class="text-xl mb-4">
                        <strong class="text-white">The hypothesis extends further:</strong> We believe neurodivergence 
                        represents proto-augmentation, that these brains are experimenting with operating modes that may 
                        become standard in future human evolution, particularly as we integrate with technology.
                    </p>
                    <p class="text-gray-300">
                        The ADHD brain's comfort with rapid context switching may be ideal for augmented reality environments 
                        requiring simultaneous attention streams. The autistic brain's pattern recognition may be optimised 
                        for partnership with AI systems.
                    </p>
                </div>
                
                <p class="fade-in">
                    Rather than trying to eliminate neurodivergence, we should be supporting it, building environments and 
                    tools that allow these capabilities to flourish. This is why Forever Fit specifically targets neurodivergent 
                    users—not because they are broken and need fixing, but because they are pioneers who deserve tools designed 
                    for how they actually function.
                </p>
                
                <p class="fade-in">
                    <strong class="text-white">This philosophy extends to all ForeverBox work.</strong> We don't have a 
                    template for ideal human biology. We have technologies that allow individuals to author their own biology 
                    according to their own values and goals. Some will choose longevity, some will choose physical transformation, 
                    some will choose enhancement, some will choose simply to function more comfortably in the bodies they have.
                </p>
                
                <p class="fade-in text-xl font-semibold text-science-secondary">
                    All choices are valid. All are supported. This is biological autonomy, and it is the foundation of everything we do.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- AI Integration Section -->
<section class="py-32 bg-black">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center max-w-6xl mx-auto">
            <div class="order-2 lg:order-1 slide-left">
                <div class="bg-science-primary/20 rounded-2xl p-8 border border-science-primary/30">
                    <h3 class="text-2xl font-bold mb-6">AI Capabilities</h3>
                    <ul class="space-y-4 stagger-list">
                        <li class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-science-secondary mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Real-time therapy optimization based on biomarkers</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-science-secondary mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Pattern recognition in neurodivergent responses</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-science-secondary mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Predictive modeling for long-term outcomes</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-science-secondary mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Privacy-preserving federated learning</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="order-1 lg:order-2 slide-right">
                <h2 class="text-4xl md:text-5xl font-bold mb-8">AI-Guided Therapies</h2>
                <div class="space-y-6 text-lg text-gray-300">
                    <p>
                        Our AI systems don't just analyze data—they understand the complex interplay between 
                        quantum biological processes, individual cognitive patterns, and therapeutic responses.
                    </p>
                    <p>
                        By training on diverse neurodivergent populations, our models learn to recognize subtle 
                        patterns that traditional approaches miss, enabling truly personalized treatment plans 
                        that evolve with each individual.
                    </p>
                    <p>
                        Privacy and autonomy are paramount. Our federated learning approach ensures that 
                        personal health data never leaves your device while still contributing to collective 
                        knowledge advancement.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Research Stats -->
<section class="py-32 bg-gradient-to-b from-black to-science-primary/10">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl md:text-5xl font-bold text-center mb-20">Research Impact</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12 max-w-6xl mx-auto stagger-list">
            <div class="text-center">
                <div class="text-5xl md:text-6xl font-bold text-science-secondary mb-3 counter" data-target="50" data-duration="2">0</div>
                <div class="text-xl text-gray-400">Published Papers</div>
            </div>
            
            <div class="text-center">
                <div class="text-5xl md:text-6xl font-bold text-science-secondary mb-3 counter" data-target="1000" data-duration="2.5">0</div>
                <div class="text-xl text-gray-400">Participants Studied</div>
            </div>
            
            <div class="text-center">
                <div class="text-5xl md:text-6xl font-bold text-science-secondary mb-3 counter" data-target="15" data-duration="2">0</div>
                <div class="text-xl text-gray-400">Partner Institutions</div>
            </div>
            
            <div class="text-center">
                <div class="text-5xl md:text-6xl font-bold text-science-secondary mb-3">
                    <span class="counter" data-target="95" data-duration="2">0</span>%
                </div>
                <div class="text-xl text-gray-400">Satisfaction Rate</div>
            </div>
        </div>
    </div>
</section>

<!-- Methodology Section -->
<section class="py-32 bg-black">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-4xl md:text-5xl font-bold mb-12 text-center slide-left">Our Methodology</h2>
            
            <div class="space-y-12">
                <div class="fade-in">
                    <h3 class="text-2xl font-bold mb-4 text-science-secondary">1. Neurodivergent-Centered Design</h3>
                    <p class="text-lg text-gray-300 leading-relaxed">
                        Every study begins with neurodivergent participants as co-researchers, not just subjects. 
                        Their insights shape our hypotheses, methodologies, and therapeutic approaches.
                    </p>
                </div>
                
                <div class="fade-in">
                    <h3 class="text-2xl font-bold mb-4 text-science-secondary">2. Multi-Modal Data Collection</h3>
                    <p class="text-lg text-gray-300 leading-relaxed">
                        We gather quantum biological markers, cognitive assessments, genetic profiles, and 
                        self-reported experiences to build comprehensive individual profiles.
                    </p>
                </div>
                
                <div class="fade-in">
                    <h3 class="text-2xl font-bold mb-4 text-science-secondary">3. Adaptive Trial Design</h3>
                    <p class="text-lg text-gray-300 leading-relaxed">
                        Our trials adapt in real-time based on individual responses, ensuring no participant 
                        receives suboptimal treatment while still generating rigorous scientific data.
                    </p>
                </div>
                
                <div class="fade-in">
                    <h3 class="text-2xl font-bold mb-4 text-science-secondary">4. Longitudinal Tracking</h3>
                    <p class="text-lg text-gray-300 leading-relaxed">
                        Long-term follow-up reveals how quantum biological interventions interact with life 
                        changes, ensuring sustainable benefits and identifying potential adjustments.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-32 bg-gradient-to-t from-science-primary/20 to-black">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-4xl md:text-5xl font-bold mb-8 fade-in">See the Science in Action</h2>
        <p class="text-xl text-gray-300 mb-12 max-w-2xl mx-auto fade-in">
            Explore real-world applications and results from our research programs.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center fade-in">
            <a href="case-studies.php" class="px-8 py-4 bg-science-secondary text-white font-semibold rounded-full hover:bg-science-primary transition-all">
                View Case Studies
            </a>
            <a href="forever-fit.php" class="px-8 py-4 bg-white text-black font-semibold rounded-full hover:bg-gray-200 transition-all">
                Learn About Forever Fit
            </a>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
