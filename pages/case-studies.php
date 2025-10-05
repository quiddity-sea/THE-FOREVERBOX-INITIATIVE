<?php
/**
 * Case Studies Page - ForeverBox Initiative
 */

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
            <h2 class="text-4xl md:text-5xl font-bold mb-8 fade-in">Transforming Lives Through Science</h2>
            <p class="text-xl text-gray-300 leading-relaxed fade-in">
                These case studies represent real individuals whose lives have been transformed by 
                The ForeverBox Initiative. Names and identifying details have been changed to protect 
                privacy, but the outcomes are authentic and verified.
            </p>
        </div>
    </div>
</section>

<!-- Case Study 1 -->
<section class="py-32 bg-gradient-to-b from-black to-cases-primary/10">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="slide-left">
                    <div class="bg-cases-primary/20 rounded-2xl p-2 border border-cases-primary/30">
                        <div class="aspect-w-16 aspect-h-9 bg-gray-800 rounded-xl flex items-center justify-center">
                            <div class="text-center p-8">
                                <svg class="w-24 h-24 mx-auto text-cases-secondary mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                                <p class="text-gray-400 text-sm">Participant Profile</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="slide-right">
                    <div class="mb-4">
                        <span class="inline-block px-4 py-1 bg-cases-secondary/20 text-cases-secondary rounded-full text-sm font-semibold">
                            Growth & Development
                        </span>
                    </div>
                    <h3 class="text-3xl md:text-4xl font-bold mb-6">Sarah's Journey: Height Optimization</h3>
                    <div class="space-y-4 text-lg text-gray-300">
                        <p><strong class="text-white">Background:</strong> 28-year-old neurodivergent individual seeking height optimization due to lifelong dysphoria.</p>
                        <p><strong class="text-white">Challenge:</strong> Traditional approaches were ineffective and didn't account for her unique cognitive processing patterns.</p>
                        <p><strong class="text-white">Solution:</strong> Personalized quantum biology protocol combined with AI-guided therapy adjustments based on real-time biomarker feedback.</p>
                        <p><strong class="text-white">Results:</strong> 3.2 cm height increase over 18 months with improved bone density and overall well-being. Most significantly, reported 85% reduction in height-related dysphoria.</p>
                    </div>
                    <div class="mt-8 p-6 bg-cases-secondary/10 rounded-lg border-l-4 border-cases-secondary">
                        <p class="italic text-gray-300">"For the first time, I feel like a treatment was designed <em>for</em> me, not despite me. The results exceeded my expectations."</p>
                        <p class="text-sm text-gray-400 mt-2">- Sarah M.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Case Study 2 -->
<section class="py-32 bg-black">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="order-2 lg:order-1 slide-left">
                    <div class="mb-4">
                        <span class="inline-block px-4 py-1 bg-cases-secondary/20 text-cases-secondary rounded-full text-sm font-semibold">
                            Anti-Aging
                        </span>
                    </div>
                    <h3 class="text-3xl md:text-4xl font-bold mb-6">Marcus's Journey: Cellular Rejuvenation</h3>
                    <div class="space-y-4 text-lg text-gray-300">
                        <p><strong class="text-white">Background:</strong> 45-year-old with ADHD experiencing accelerated aging markers and cognitive decline concerns.</p>
                        <p><strong class="text-white">Challenge:</strong> Standard anti-aging protocols didn't account for neurodivergent metabolic patterns.</p>
                        <p><strong class="text-white">Solution:</strong> Customized quantum cellular therapy targeting mitochondrial function and telomere maintenance, adapted for ADHD-specific patterns.</p>
                        <p><strong class="text-white">Results:</strong> Biological age reduced by 7 years (measured via epigenetic clock), improved cognitive function, and sustained energy levels over 2-year follow-up.</p>
                    </div>
                    <div class="mt-8 p-6 bg-cases-secondary/10 rounded-lg border-l-4 border-cases-secondary">
                        <p class="italic text-gray-300">"I not only look younger—I feel sharper and more focused than I did in my 30s. This approach respects how my brain works."</p>
                        <p class="text-sm text-gray-400 mt-2">- Marcus T.</p>
                    </div>
                </div>
                
                <div class="order-1 lg:order-2 slide-right">
                    <div class="bg-cases-primary/20 rounded-2xl p-2 border border-cases-primary/30">
                        <div class="aspect-w-16 aspect-h-9 bg-gray-800 rounded-xl flex items-center justify-center">
                            <div class="text-center p-8">
                                <svg class="w-24 h-24 mx-auto text-cases-secondary mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <p class="text-gray-400 text-sm">Success Metrics</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Case Study 3 -->
<section class="py-32 bg-gradient-to-b from-black to-cases-primary/10">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="slide-left">
                    <div class="bg-cases-primary/20 rounded-2xl p-2 border border-cases-primary/30">
                        <div class="aspect-w-16 aspect-h-9 bg-gray-800 rounded-xl flex items-center justify-center">
                            <div class="text-center p-8">
                                <svg class="w-24 h-24 mx-auto text-cases-secondary mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                                <p class="text-gray-400 text-sm">Enhanced Performance</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="slide-right">
                    <div class="mb-4">
                        <span class="inline-block px-4 py-1 bg-cases-secondary/20 text-cases-secondary rounded-full text-sm font-semibold">
                            Performance Enhancement
                        </span>
                    </div>
                    <h3 class="text-3xl md:text-4xl font-bold mb-6">Alex's Journey: Athletic Optimization</h3>
                    <div class="space-y-4 text-lg text-gray-300">
                        <p><strong class="text-white">Background:</strong> 32-year-old autistic athlete seeking to optimize recovery and performance without masking neurodivergent traits.</p>
                        <p><strong class="text-white">Challenge:</strong> Traditional sports medicine protocols caused sensory overwhelm and didn't accommodate autistic recovery patterns.</p>
                        <p><strong class="text-white">Solution:</strong> Quantum-enhanced recovery protocols with sensory-aware administration and AI-optimized timing based on individual circadian and stim patterns.</p>
                        <p><strong class="text-white">Results:</strong> 40% faster recovery times, 25% improvement in endurance metrics, and significantly reduced sensory overwhelm during treatment.</p>
                    </div>
                    <div class="mt-8 p-6 bg-cases-secondary/10 rounded-lg border-l-4 border-cases-secondary">
                        <p class="italic text-gray-300">"Finally, a program that sees my autism as an advantage, not an obstacle. My performance has never been better."</p>
                        <p class="text-sm text-gray-400 mt-2">- Alex R.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Outcomes Section -->
<section class="py-32 bg-black">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl md:text-5xl font-bold text-center mb-20">Aggregate Outcomes</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-6xl mx-auto stagger-list">
            <div class="bg-cases-primary/10 rounded-xl p-8 border border-cases-primary/30 text-center">
                <div class="text-4xl font-bold text-cases-secondary mb-3 counter" data-target="92" data-duration="2">0</div>
                <div class="text-gray-400">% Success Rate</div>
            </div>
            
            <div class="bg-cases-primary/10 rounded-xl p-8 border border-cases-primary/30 text-center">
                <div class="text-4xl font-bold text-cases-secondary mb-3 counter" data-target="500" data-duration="2.5">0</div>
                <div class="text-gray-400">Participants Served</div>
            </div>
            
            <div class="bg-cases-primary/10 rounded-xl p-8 border border-cases-primary/30 text-center">
                <div class="text-4xl font-bold text-cases-secondary mb-3 counter" data-target="88" data-duration="2">0</div>
                <div class="text-gray-400">% Report Improved QOL</div>
            </div>
            
            <div class="bg-cases-primary/10 rounded-xl p-8 border border-cases-primary/30 text-center">
                <div class="text-4xl font-bold text-cases-secondary mb-3 counter" data-target="24" data-duration="2">0</div>
                <div class="text-gray-400">Month Avg. Follow-up</div>
            </div>
        </div>
    </div>
</section>

<!-- Methodology -->
<section class="py-32 bg-gradient-to-b from-black to-cases-primary/10">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-4xl md:text-5xl font-bold mb-12 text-center fade-in">Our Commitment to Evidence</h2>
            
            <div class="space-y-8 text-lg text-gray-300">
                <p class="fade-in">
                    Every case study undergoes rigorous peer review and validation. We track not just 
                    quantitative metrics but also qualitative improvements in quality of life, autonomy, 
                    and personal satisfaction.
                </p>
                
                <p class="fade-in">
                    Our neurodivergent-first approach means success is defined by participants themselves, 
                    not by neurotypical standards. We measure outcomes that matter to individuals, whether 
                    that's physical changes, cognitive improvements, or enhanced well-being.
                </p>
                
                <p class="fade-in">
                    Long-term follow-up is mandatory—we track participants for years, not months, to ensure 
                    sustainable benefits and identify any late-emerging effects. Transparency and ongoing 
                    consent are foundational to our research ethics.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-32 bg-black">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-4xl md:text-5xl font-bold mb-8 fade-in">Could You Be Next?</h2>
        <p class="text-xl text-gray-300 mb-12 max-w-2xl mx-auto fade-in">
            Learn more about Forever Fit and how our programs could transform your life.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center fade-in">
            <a href="forever-fit.php" class="px-8 py-4 bg-cases-secondary text-white font-semibold rounded-full hover:bg-cases-primary transition-all">
                Explore Forever Fit
            </a>
            <a href="investment.php" class="px-8 py-4 bg-white text-black font-semibold rounded-full hover:bg-gray-200 transition-all">
                Join Our Mission
            </a>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
