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
        <p class="text-2xl md:text-3xl text-gray-200 mb-4 fade-in">Your Guide to Forever Health</p>
        <p class="text-xl text-gray-400 mb-8 fade-in">The world's first truly integrated health management platform</p>
        <div class="w-24 h-1 bg-white mx-auto mt-8 fade-in"></div>
    </div>
</section>

<!-- Introduction -->
<section class="py-32 bg-black">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-4xl md:text-5xl font-bold mb-8 fade-in">A Revolutionary Health Management Platform</h2>
            <p class="text-xl text-gray-300 leading-relaxed mb-6 fade-in">
                Forever Fit is the unified, neurodivergent-friendly digital platform that transforms 
                fragmented health data into a clear, actionable, and deeply personalized health journey. 
                We seamlessly integrate the three critical pillars of wellness—Exercise, Nutrition, 
                and Medication/Supplement Management—into a single, intelligent application.
            </p>
            <p class="text-lg text-gray-400 leading-relaxed fade-in">
                Initially launching as a web-based platform and Android app, Forever Fit is designed 
                specifically for neurodivergent individuals but benefits everyone seeking a holistic, 
                accessible approach to health management.
            </p>
        </div>
    </div>
</section>

<!-- The Three Pillars -->
<section class="py-32 bg-gradient-to-b from-black to-fit-primary/10">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl md:text-5xl font-bold text-center mb-8">The Three Pillars of Forever Fit</h2>
        <p class="text-xl text-gray-300 text-center mb-20 max-w-3xl mx-auto">
            One app. Three essential systems. Complete integration.
        </p>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto stagger-list">
            <!-- Pillar 1: Exercise -->
            <div class="bg-fit-primary/10 rounded-2xl p-8 border border-fit-primary/30 hover:border-fit-secondary/50 transition-all">
                <div class="w-16 h-16 bg-fit-secondary rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-4">Exercise Management</h3>
                <p class="text-gray-300 mb-4">
                    Strength, cardio, and recovery in one place. Adaptive, science-based workout planning 
                    with over 1,500 exercises, GPS tracking for outdoor activities, and Google Fit integration.
                </p>
                <ul class="space-y-2 text-sm text-gray-400">
                    <li class="flex items-start gap-2">
                        <svg class="w-5 h-5 text-fit-secondary mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Gamified workout logger with progressive overload</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-5 h-5 text-fit-secondary mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>HD video demonstrations for perfect form</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-5 h-5 text-fit-secondary mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Integrated recovery metrics tracking</span>
                    </li>
                </ul>
            </div>
            
            <!-- Pillar 2: Nutrition -->
            <div class="bg-fit-primary/10 rounded-2xl p-8 border border-fit-primary/30 hover:border-fit-secondary/50 transition-all">
                <div class="w-16 h-16 bg-fit-secondary rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-4">Food & Nutrition</h3>
                <p class="text-gray-300 mb-4">
                    Precision nutrition with adaptive AI coaching. Hybrid food database, barcode scanning, 
                    detailed micronutrient tracking, and visual meal planning that respects your preferences.
                </p>
                <ul class="space-y-2 text-sm text-gray-400">
                    <li class="flex items-start gap-2">
                        <svg class="w-5 h-5 text-fit-secondary mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>AI-adjusted calorie and macro targets (Premium)</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-5 h-5 text-fit-secondary mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>80+ micronutrient tracking for deficiency detection</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-5 h-5 text-fit-secondary mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Recipe builder and curated meal plans</span>
                    </li>
                </ul>
            </div>
            
            <!-- Pillar 3: Medication -->
            <div class="bg-fit-primary/10 rounded-2xl p-8 border border-fit-primary/30 hover:border-fit-secondary/50 transition-all">
                <div class="w-16 h-16 bg-fit-secondary rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-4">Medication & Supplements</h3>
                <p class="text-gray-300 mb-4">
                    The intelligent differentiator. Gamified adherence tracking, interaction warnings, 
                    symptom correlation, and effectiveness logging to empower you with data about your body.
                </p>
                <ul class="space-y-2 text-sm text-gray-400">
                    <li class="flex items-start gap-2">
                        <svg class="w-5 h-5 text-fit-secondary mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Virtual Cabinet with smart reminders and streaks</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-5 h-5 text-fit-secondary mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Interaction warning system (Premium)</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-5 h-5 text-fit-secondary mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Symptom logging and effectiveness correlation</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Onboarding Journey -->
<section class="py-32 bg-black">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl md:text-5xl font-bold text-center mb-8">Your Personalized Journey Begins</h2>
        <p class="text-xl text-gray-300 text-center mb-20 max-w-3xl mx-auto">
            A guided, conversational Q&A session designed to be engaging and low-pressure, 
            replacing intimidating forms with a supportive experience.
        </p>
        
        <div class="max-w-4xl mx-auto space-y-16">
            <div class="flex flex-col md:flex-row gap-8 items-start slide-left">
                <div class="md:w-1/4">
                    <div class="w-20 h-20 bg-fit-secondary rounded-full flex items-center justify-center text-3xl font-bold">1</div>
                </div>
                <div class="md:w-3/4">
                    <h3 class="text-2xl font-bold mb-3">Personal & Neurodivergence Status</h3>
                    <p class="text-gray-300 leading-relaxed">
                        The app respectfully asks about your personal details and, if you're comfortable 
                        sharing, how your neurodivergence affects your daily life and learning style.
                    </p>
                </div>
            </div>
            
            <div class="flex flex-col md:flex-row gap-8 items-start slide-right">
                <div class="md:w-1/4">
                    <div class="w-20 h-20 bg-fit-secondary rounded-full flex items-center justify-center text-3xl font-bold">2</div>
                </div>
                <div class="md:w-3/4">
                    <h3 class="text-2xl font-bold mb-3">Goals & Targets</h3>
                    <p class="text-gray-300 leading-relaxed">
                        Through simple questions, the app helps you define what success looks like to you—whether 
                        it's building a consistent routine, gaining strength, or improving your relationship with food.
                    </p>
                </div>
            </div>
            
            <div class="flex flex-col md:flex-row gap-8 items-start slide-left">
                <div class="md:w-1/4">
                    <div class="w-20 h-20 bg-fit-secondary rounded-full flex items-center justify-center text-3xl font-bold">3</div>
                </div>
                <div class="md:w-3/4">
                    <h3 class="text-2xl font-bold mb-3">Health & Nutrition</h3>
                    <p class="text-gray-300 leading-relaxed">
                        Gather information on general health, medications, and supplement needs in a clear, 
                        step-by-step process.
                    </p>
                </div>
            </div>
            
            <div class="flex flex-col md:flex-row gap-8 items-start slide-right">
                <div class="md:w-1/4">
                    <div class="w-20 h-20 bg-fit-secondary rounded-full flex items-center justify-center text-3xl font-bold">4</div>
                </div>
                <div class="md:w-3/4">
                    <h3 class="text-2xl font-bold mb-3">Food & Exercise Preferences</h3>
                    <p class="text-gray-300 leading-relaxed">
                        Quickly identify foods you love, like, dislike, or are allergic to using a visual interface. 
                        Determine your exercise environment—from fully equipped gym to at-home, no-equipment workouts.
                    </p>
                </div>
            </div>
            
            <div class="flex flex-col md:flex-row gap-8 items-start slide-left">
                <div class="md:w-1/4">
                    <div class="w-20 h-20 bg-fit-secondary rounded-full flex items-center justify-center text-3xl font-bold">5</div>
                </div>
                <div class="md:w-3/4">
                    <h3 class="text-2xl font-bold mb-3">AI Analysis & Refinement</h3>
                    <p class="text-gray-300 leading-relaxed">
                        Our AI analyzes your data to create a starting plan, which is refined over the first two 
                        weeks through your feedback, creating a truly personalized and adaptive system.
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
            neurodiversity as a core principle, addressing specific cognitive and executive function challenges.
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
                    <h3 class="text-xl font-bold mb-2">Gamification for Executive Function</h3>
                    <p class="text-gray-300">
                        Achievement systems, streak tracking, and immediate positive feedback provide the 
                        dopamine hits that ADHD brains need to sustain engagement, building genuine habits 
                        not just extracting engagement.
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
                    <h3 class="text-xl font-bold mb-2">Question-Led Onboarding</h3>
                    <p class="text-gray-300">
                        Instead of overwhelming options, we ask: "How do you feel today?" "What's your energy 
                        level?" Our AI suggests single, specific, achievable actions tailored to your current state.
                    </p>
                </div>
            </div>
            
            <div class="flex gap-4">
                <div class="flex-shrink-0">
                    <div class="w-12 h-12 bg-fit-secondary/20 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-fit-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-2">Smart Medication Reminders</h3>
                    <p class="text-gray-300">
                        Sophisticated tracking with flexible reminders, refill alerts, and pharmacy integration. 
                        Tracks medication effects against mood, energy, and performance metrics for optimization.
                    </p>
                </div>
            </div>
            
            <div class="flex gap-4">
                <div class="flex-shrink-0">
                    <div class="w-12 h-12 bg-fit-secondary/20 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-fit-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                    </div>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-2">Hyperfocus & Burnout Recognition</h3>
                    <p class="text-gray-300">
                        AI learns individual patterns, recognizing when you're entering hyperfocus or approaching 
                        burnout. Adapts suggestions accordingly, sometimes encouraging rest even when metrics 
                        suggest pushing forward.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Tiers -->
<section class="py-32 bg-black">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl md:text-5xl font-bold text-center mb-8">Freemium with Ethics</h2>
        <p class="text-xl text-gray-300 text-center mb-20 max-w-3xl mx-auto">
            Our freemium model is designed around user wellbeing, not engagement maximization. 
            Everyone deserves support, regardless of financial means.
        </p>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
            <!-- Free Tier -->
            <div class="bg-fit-primary/10 rounded-2xl p-8 border border-fit-primary/30">
                <div class="text-center mb-8">
                    <h3 class="text-3xl font-bold mb-2">Forever Fit Free</h3>
                    <div class="text-5xl font-bold text-fit-secondary mb-2">£0</div>
                    <p class="text-gray-400">Forever. No ads. No data selling.</p>
                </div>
                
                <ul class="space-y-4 mb-8">
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-fit-secondary mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-300">Comprehensive manual food, exercise, and medication logging</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-fit-secondary mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-300">Barcode scanning and Google Fit integration</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-fit-secondary mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-300">Basic progress charts and gamification features</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-fit-secondary mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-300">Access to standard workout plan library</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-fit-secondary mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-300">Community features and support</span>
                    </li>
                </ul>
                
                <p class="text-sm text-gray-400 text-center">
                    The free tier is genuinely useful—basic functionality, not held hostage.
                </p>
            </div>
            
            <!-- Premium Tier -->
            <div class="bg-gradient-to-br from-fit-secondary/20 to-fit-primary/20 rounded-2xl p-8 border-2 border-fit-secondary relative overflow-hidden">
                <div class="absolute top-0 right-0 bg-fit-secondary text-black px-4 py-1 text-sm font-bold">
                    POPULAR
                </div>
                
                <div class="text-center mb-8 mt-4">
                    <h3 class="text-3xl font-bold mb-2">Forever Fit+</h3>
                    <div class="text-5xl font-bold text-fit-secondary mb-2">£9.99</div>
                    <p class="text-gray-400">per month or £79.99/year</p>
                </div>
                
                <ul class="space-y-4 mb-8">
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-fit-secondary mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-white font-semibold">Everything in Free, plus:</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-fit-secondary mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-300">Adaptive AI Nutrition & Workout Coach</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-fit-secondary mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-300">Medication & Supplement Interaction Warning System</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-fit-secondary mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-300">Advanced analytics and custom reports</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-fit-secondary mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-300">Expanded gamification with customizable rewards</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-fit-secondary mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-300">Premium workout programs and meal plans</span>
                    </li>
                </ul>
                
                <p class="text-sm text-gray-400 text-center">
                    Premium features represent genuine added value, not basic functionality held hostage.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-32 bg-gradient-to-b from-black to-fit-primary/10">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-4xl md:text-5xl font-bold mb-8 fade-in">Join the Forever Fit Journey</h2>
        <p class="text-xl text-gray-300 mb-12 max-w-2xl mx-auto fade-in">
            Forever Fit launches Q3 2025. Be among the first to experience the world's first truly 
            integrated health management platform, designed specifically for neurodivergent individuals 
            but benefiting everyone.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center fade-in">
            <a href="investment.php" class="px-8 py-4 bg-fit-secondary text-white font-semibold rounded-full hover:bg-fit-primary transition-all">
                Invest in Our Vision
            </a>
            <a href="about.php" class="px-8 py-4 bg-white text-black font-semibold rounded-full hover:bg-gray-200 transition-all">
                Get in Touch
            </a>
        </div>
        <p class="text-sm text-gray-400 mt-8 fade-in">
            Forever Fit serves as the accessible gateway to ForeverBox's broader clinical services, 
            reaching millions while building a pathway to transformation.
        </p>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
