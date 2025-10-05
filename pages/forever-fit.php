<?php
/**
 * Forever Fit Page - ForeverBox Initiative
 */

$pageTitle = "Forever Fit";
include __DIR__ . '/../includes/header.php';
?>

<!-- Hero Section -->
<section class="relative h-screen flex items-center justify-center overflow-hidden hero-section">
    <div class="absolute inset-0 bg-gradient-to-br from-fit-primary via-fit-secondary to-black hero-bg"></div>
    
    <div class="relative z-10 container mx-auto px-6 text-center">
        <h1 class="text-6xl md:text-8xl font-bold mb-6 fade-in">Forever Fit</h1>
        <p class="text-2xl md:text-3xl text-gray-200 mb-4 fade-in">Transforming Human Potential</p>
        <div class="w-24 h-1 bg-white mx-auto mt-8 fade-in"></div>
    </div>
</section>

<!-- Introduction -->
<section class="py-32 bg-black">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-4xl md:text-5xl font-bold mb-8 fade-in">Your Journey to Enhanced Potential</h2>
            <p class="text-xl text-gray-300 leading-relaxed mb-6 fade-in">
                Forever Fit is our flagship program that combines quantum biology, AI-guided therapies, 
                and neurodivergent-first design to help you achieve your personal health and wellness goals.
            </p>
            <p class="text-lg text-gray-400 leading-relaxed fade-in">
                Whether you're seeking height optimization, anti-aging interventions, enhanced performance, 
                or holistic wellness, Forever Fit adapts to your unique biology and cognitive patterns.
            </p>
        </div>
    </div>
</section>

<!-- Core Programs -->
<section class="py-32 bg-gradient-to-b from-black to-fit-primary/10">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl md:text-5xl font-bold text-center mb-20">Core Programs</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto stagger-list">
            <!-- Program 1 -->
            <div class="bg-fit-primary/10 rounded-2xl p-8 border border-fit-primary/30 hover:border-fit-secondary/50 transition-all">
                <div class="w-16 h-16 bg-fit-secondary rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-4">Height Optimization</h3>
                <p class="text-gray-300 mb-4">
                    Personalized quantum biological protocols to support natural growth and height enhancement, 
                    tailored to your unique genetic and metabolic profile.
                </p>
                <ul class="space-y-2 text-sm text-gray-400">
                    <li class="flex items-start gap-2">
                        <svg class="w-5 h-5 text-fit-secondary mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Growth plate assessment</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-5 h-5 text-fit-secondary mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Bone density monitoring</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-5 h-5 text-fit-secondary mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Hormone optimization</span>
                    </li>
                </ul>
            </div>
            
            <!-- Program 2 -->
            <div class="bg-fit-primary/10 rounded-2xl p-8 border border-fit-primary/30 hover:border-fit-secondary/50 transition-all">
                <div class="w-16 h-16 bg-fit-secondary rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-4">Cellular Rejuvenation</h3>
                <p class="text-gray-300 mb-4">
                    Advanced anti-aging protocols targeting cellular health, telomere maintenance, 
                    and mitochondrial optimization for sustained vitality.
                </p>
                <ul class="space-y-2 text-sm text-gray-400">
                    <li class="flex items-start gap-2">
                        <svg class="w-5 h-5 text-fit-secondary mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Epigenetic age tracking</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-5 h-5 text-fit-secondary mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>NAD+ optimization</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-5 h-5 text-fit-secondary mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Senescent cell clearance</span>
                    </li>
                </ul>
            </div>
            
            <!-- Program 3 -->
            <div class="bg-fit-primary/10 rounded-2xl p-8 border border-fit-primary/30 hover:border-fit-secondary/50 transition-all">
                <div class="w-16 h-16 bg-fit-secondary rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-4">Performance Enhancement</h3>
                <p class="text-gray-300 mb-4">
                    Optimize physical and cognitive performance through quantum-enhanced recovery, 
                    metabolic tuning, and neurodivergent-aware protocols.
                </p>
                <ul class="space-y-2 text-sm text-gray-400">
                    <li class="flex items-start gap-2">
                        <svg class="w-5 h-5 text-fit-secondary mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>VO2 max improvement</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-5 h-5 text-fit-secondary mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Recovery acceleration</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-5 h-5 text-fit-secondary mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Cognitive enhancement</span>
                    </li>
                </ul>
            </div>
            
            <!-- Program 4 -->
            <div class="bg-fit-primary/10 rounded-2xl p-8 border border-fit-primary/30 hover:border-fit-secondary/50 transition-all">
                <div class="w-16 h-16 bg-fit-secondary rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-4">Holistic Wellness</h3>
                <p class="text-gray-300 mb-4">
                    Comprehensive approach to well-being, addressing metabolic health, stress response, 
                    sleep optimization, and neurodivergent-specific needs.
                </p>
                <ul class="space-y-2 text-sm text-gray-400">
                    <li class="flex items-start gap-2">
                        <svg class="w-5 h-5 text-fit-secondary mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Circadian rhythm tuning</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-5 h-5 text-fit-secondary mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Gut-brain axis optimization</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-5 h-5 text-fit-secondary mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Stress resilience building</span>
                    </li>
                </ul>
            </div>
            
            <!-- Program 5 -->
            <div class="bg-fit-primary/10 rounded-2xl p-8 border border-fit-primary/30 hover:border-fit-secondary/50 transition-all">
                <div class="w-16 h-16 bg-fit-secondary rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-4">Cognitive Optimization</h3>
                <p class="text-gray-300 mb-4">
                    Enhance memory, focus, and neuroplasticity through quantum-informed nootropic protocols 
                    designed for neurodivergent cognition.
                </p>
                <ul class="space-y-2 text-sm text-gray-400">
                    <li class="flex items-start gap-2">
                        <svg class="w-5 h-5 text-fit-secondary mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Neurotransmitter balancing</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-5 h-5 text-fit-secondary mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Brain-derived neurotrophic factor (BDNF) enhancement</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-5 h-5 text-fit-secondary mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Executive function support</span>
                    </li>
                </ul>
            </div>
            
            <!-- Program 6 -->
            <div class="bg-fit-primary/10 rounded-2xl p-8 border border-fit-primary/30 hover:border-fit-secondary/50 transition-all">
                <div class="w-16 h-16 bg-fit-secondary rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-4">Personalized Protocols</h3>
                <p class="text-gray-300 mb-4">
                    Custom-designed programs combining elements from multiple tracks, uniquely tailored 
                    to your goals, genetics, and neurodivergent profile.
                </p>
                <ul class="space-y-2 text-sm text-gray-400">
                    <li class="flex items-start gap-2">
                        <svg class="w-5 h-5 text-fit-secondary mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Comprehensive genomic analysis</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-5 h-5 text-fit-secondary mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>AI-driven protocol adjustments</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-5 h-5 text-fit-secondary mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Ongoing optimization</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- How It Works -->
<section class="py-32 bg-black">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl md:text-5xl font-bold text-center mb-20">How Forever Fit Works</h2>
        
        <div class="max-w-4xl mx-auto space-y-16">
            <div class="flex flex-col md:flex-row gap-8 items-start slide-left">
                <div class="md:w-1/4">
                    <div class="w-20 h-20 bg-fit-secondary rounded-full flex items-center justify-center text-3xl font-bold">1</div>
                </div>
                <div class="md:w-3/4">
                    <h3 class="text-2xl font-bold mb-3">Initial Assessment</h3>
                    <p class="text-gray-300 leading-relaxed">
                        Comprehensive evaluation including genetic testing, biomarker analysis, cognitive profiling, 
                        and detailed discussion of your goals and neurodivergent needs.
                    </p>
                </div>
            </div>
            
            <div class="flex flex-col md:flex-row gap-8 items-start slide-right">
                <div class="md:w-1/4">
                    <div class="w-20 h-20 bg-fit-secondary rounded-full flex items-center justify-center text-3xl font-bold">2</div>
                </div>
                <div class="md:w-3/4">
                    <h3 class="text-2xl font-bold mb-3">Personalized Protocol Design</h3>
                    <p class="text-gray-300 leading-relaxed">
                        Our AI analyzes your unique profile to create a tailored quantum biology protocol, 
                        optimized for your individual biology and cognitive patterns.
                    </p>
                </div>
            </div>
            
            <div class="flex flex-col md:flex-row gap-8 items-start slide-left">
                <div class="md:w-1/4">
                    <div class="w-20 h-20 bg-fit-secondary rounded-full flex items-center justify-center text-3xl font-bold">3</div>
                </div>
                <div class="md:w-3/4">
                    <h3 class="text-2xl font-bold mb-3">Implementation & Monitoring</h3>
                    <p class="text-gray-300 leading-relaxed">
                        Begin your program with continuous monitoring through biomarkers, wearables, and 
                        self-reported experiences. Our AI adapts your protocol in real-time.
                    </p>
                </div>
            </div>
            
            <div class="flex flex-col md:flex-row gap-8 items-start slide-right">
                <div class="md:w-1/4">
                    <div class="w-20 h-20 bg-fit-secondary rounded-full flex items-center justify-center text-3xl font-bold">4</div>
                </div>
                <div class="md:w-3/4">
                    <h3 class="text-2xl font-bold mb-3">Ongoing Optimization</h3>
                    <p class="text-gray-300 leading-relaxed">
                        Regular check-ins, protocol adjustments, and long-term tracking ensure sustained 
                        benefits and continuous improvement toward your goals.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Neurodivergent-First Features -->
<section class="py-32 bg-gradient-to-b from-black to-fit-primary/10">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl md:text-5xl font-bold text-center mb-8">Designed for Neurodivergent Individuals</h2>
        <p class="text-xl text-gray-300 text-center mb-20 max-w-3xl mx-auto">
            Forever Fit isn't adapted for neurodivergent people—it's built from the ground up with 
            neurodiversity as a core principle.
        </p>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 max-w-5xl mx-auto stagger-list">
            <div class="flex gap-4">
                <div class="flex-shrink-0">
                    <div class="w-12 h-12 bg-fit-secondary/20 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-fit-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-2">Sensory Considerations</h3>
                    <p class="text-gray-300">
                        Protocols account for sensory sensitivities, offering alternatives and accommodations 
                        for administration and monitoring.
                    </p>
                </div>
            </div>
            
            <div class="flex gap-4">
                <div class="flex-shrink-0">
                    <div class="w-12 h-12 bg-fit-secondary/20 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-fit-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
                        </svg>
                    </div>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-2">Executive Function Support</h3>
                    <p class="text-gray-300">
                        Clear systems, reminders, and simplified tracking make adherence easier for 
                        ADHD and autistic participants.
                    </p>
                </div>
            </div>
            
            <div class="flex gap-4">
                <div class="flex-shrink-0">
                    <div class="w-12 h-12 bg-fit-secondary/20 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-fit-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
                        </svg>
                    </div>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-2">Communication Preferences</h3>
                    <p class="text-gray-300">
                        Choose your preferred communication methods and interaction frequency. 
                        We adapt to you, not the other way around.
                    </p>
                </div>
            </div>
            
            <div class="flex gap-4">
                <div class="flex-shrink-0">
                    <div class="w-12 h-12 bg-fit-secondary/20 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-fit-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-2">Pattern Recognition</h3>
                    <p class="text-gray-300">
                        Our AI specifically learns neurodivergent response patterns, improving 
                        outcomes through specialized pattern matching.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-32 bg-black">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-4xl md:text-5xl font-bold mb-8 fade-in">Ready to Begin Your Journey?</h2>
        <p class="text-xl text-gray-300 mb-12 max-w-2xl mx-auto fade-in">
            Forever Fit represents the future of personalized health—quantum biology, AI guidance, 
            and neurodivergent-first design working together for your transformation.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center fade-in">
            <a href="investment.php" class="px-8 py-4 bg-fit-secondary text-white font-semibold rounded-full hover:bg-fit-primary transition-all">
                Join Forever Fit
            </a>
            <a href="case-studies.php" class="px-8 py-4 bg-white text-black font-semibold rounded-full hover:bg-gray-200 transition-all">
                Read Success Stories
            </a>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
