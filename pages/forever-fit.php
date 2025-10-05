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
            <h2 class="text-4xl md:text-5xl font-bold mb-8 fade-in">From Laboratory to Pocket</h2>
            <p class="text-xl text-gray-300 leading-relaxed mb-6 fade-in">
                The ForeverBox Institute's clinical interventions represent the cutting edge of human biological 
                enhancement, but they also represent significant financial and logistical barriers. Cellular 
                reprogramming and skeletal modification require sophisticated laboratory infrastructure, continuous 
                medical monitoring, and costs that place them beyond reach for most people.
            </p>
            <p class="text-xl text-gray-300 leading-relaxed fade-in mb-6">
                We recognised early that our mission—supporting human beings in becoming more fully themselves—could 
                not be fulfilled if our technologies remained accessible only to the wealthy. We needed a pathway 
                to reach millions rather than hundreds, to provide meaningful support to people who need it most.
            </p>
            <p class="text-2xl font-bold text-fit-secondary fade-in">
                Forever Fit is that pathway.
            </p>
        </div>
    </div>
</section>

<!-- Neurodivergent-First Design Philosophy -->
<section class="py-32 bg-gradient-to-b from-black to-fit-primary/10">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-4xl md:text-5xl font-bold mb-12 text-center fade-in">Neurodivergent-First Design Philosophy</h2>
            <p class="text-xl text-gray-300 text-center mb-16 fade-in">
                Forever Fit is not a conventional fitness or wellness app. It is a comprehensive life management 
                platform designed specifically for neurodivergent users, built on principles of AI-adaptive coaching, 
                gamification for executive function support, and integrated tracking across exercise, nutrition, and medication.
            </p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
                <!-- Challenge 1 -->
                <div class="bg-fit-primary/10 rounded-2xl p-8 border border-fit-primary/30 slide-left">
                    <h3 class="text-2xl font-bold mb-4 text-fit-secondary">Executive Function & Task Initiation</h3>
                    <div class="space-y-4 text-gray-300">
                        <p class="font-semibold">The Challenge:</p>
                        <p>
                            Traditional apps assume users can self-initiate tasks, maintain motivation, and follow through 
                            consistently. Neurodivergent brains often cannot, not due to lack of will but due to neurological 
                            differences in dopamine regulation and executive function.
                        </p>
                        <p class="font-semibold text-fit-secondary">Our Solution:</p>
                        <p>
                            Gamification not as manipulation but as accommodation. Achievement systems, streak tracking, 
                            and immediate positive feedback provide the dopamine hits that ADHD brains need to sustain 
                            engagement. Unlike exploitative gaming mechanics, our system builds genuine habits.
                        </p>
                    </div>
                </div>
                
                <!-- Challenge 2 -->
                <div class="bg-fit-primary/10 rounded-2xl p-8 border border-fit-primary/30 slide-right">
                    <h3 class="text-2xl font-bold mb-4 text-fit-secondary">Information Overload & Decision Paralysis</h3>
                    <div class="space-y-4 text-gray-300">
                        <p class="font-semibold">The Challenge:</p>
                        <p>
                            Many wellness apps present overwhelming options, expecting users to research, plan, and execute 
                            complex routines. For autistic and ADHD users, this creates paralysis.
                        </p>
                        <p class="font-semibold text-fit-secondary">Our Solution:</p>
                        <p>
                            Question-led onboarding. Instead of presenting options, we ask: "How do you feel today?" 
                            "What's your energy level?" "What's your environment?" Our AI then suggests single, specific, 
                            achievable actions tailored to your current state.
                        </p>
                    </div>
                </div>
                
                <!-- Challenge 3 -->
                <div class="bg-fit-primary/10 rounded-2xl p-8 border border-fit-primary/30 slide-left">
                    <h3 class="text-2xl font-bold mb-4 text-fit-secondary">Medication Management & Adherence</h3>
                    <div class="space-y-4 text-gray-300">
                        <p class="font-semibold">The Challenge:</p>
                        <p>
                            ADHD medication is transformative when properly managed. But ADHD brains are notoriously poor 
                            at remembering to take medication consistently. This creates a tragic irony: the medication 
                            that helps with executive function requires executive function to take consistently.
                        </p>
                        <p class="font-semibold text-fit-secondary">Our Solution:</p>
                        <p>
                            Sophisticated medication tracking with smart reminders, refill alerts, and pharmacy system 
                            integration. More critically, we track medication effects against mood, energy, and performance 
                            metrics, helping users and doctors optimise dosing and timing.
                        </p>
                    </div>
                </div>
                
                <!-- Challenge 4 -->
                <div class="bg-fit-primary/10 rounded-2xl p-8 border border-fit-primary/30 slide-right">
                    <h3 class="text-2xl font-bold mb-4 text-fit-secondary">Hyperfocus & Burnout Cycles</h3>
                    <div class="space-y-4 text-gray-300">
                        <p class="font-semibold">The Challenge:</p>
                        <p>
                            Neurodivergent individuals often oscillate between periods of intense hyperfocus productivity 
                            and complete burnout. Traditional wellness advice—"maintain consistent habits"—doesn't 
                            accommodate this neurological reality.
                        </p>
                        <p class="font-semibold text-fit-secondary">Our Solution:</p>
                        <p>
                            Our AI learns individual patterns, recognising when you're entering hyperfocus or approaching 
                            burnout. It adapts suggestions accordingly, sometimes encouraging rest even when streak metrics 
                            would suggest pushing forward.
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="bg-fit-secondary/10 rounded-xl p-8 border-l-4 border-fit-secondary fade-in">
                <p class="text-lg italic text-gray-300">
                    "The design philosophy emerged directly from Dr. Zeon7's own experience as an ADHD/autistic individual 
                    struggling with conventional productivity and wellness tools. Every feature addresses specific 
                    neurodivergent challenges. This is accommodation, not correction."
                </p>
            </div>
        </div>
    </div>
</section>

<!-- The Three Pillars -->
<section class="py-32 bg-black">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl md:text-5xl font-bold text-center mb-8 fade-in">The Three Pillars of Forever Fit</h2>
        <p class="text-xl text-gray-300 text-center mb-20 max-w-3xl mx-auto fade-in">
            One app. Three essential systems. Complete integration. Each pillar designed to work seamlessly 
            with neurodivergent minds while benefiting everyone.
        </p>
        
        <div class="space-y-16 max-w-6xl mx-auto">
            <!-- Pillar 1: Exercise -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
                <div class="slide-left">
                    <div class="bg-fit-primary/10 rounded-2xl p-8 border border-fit-primary/30">
                        <div class="w-16 h-16 bg-fit-secondary rounded-full flex items-center justify-center mb-6">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <h3 class="text-3xl font-bold mb-4 text-fit-secondary">Exercise: Making Movement Accessible</h3>
                        <p class="text-gray-300 mb-6">
                            Forever Fit doesn't assume users have gym memberships, equipment, or even stable housing. 
                            Our exercise library includes bodyweight routines, exercises for small spaces, adaptive 
                            options for different ability levels, and neurodivergent-friendly activities that 
                            accommodate sensory sensitivities.
                        </p>
                        <ul class="space-y-3 text-gray-300">
                            <li class="flex items-start gap-2">
                                <svg class="w-5 h-5 text-fit-secondary mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span><strong>Context-Aware:</strong> Low energy? Gentle movement. High anxiety? Intensive cardio. 
                                Sensory overload? Solitary, quiet activities.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <svg class="w-5 h-5 text-fit-secondary mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span><strong>Reframed Purpose:</strong> Not punishment or obligation, but self-care—a tool 
                                for emotional regulation and wellbeing.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <svg class="w-5 h-5 text-fit-secondary mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span><strong>Progressive Overload:</strong> Gamified tracking with HD demonstrations and recovery metrics.</span>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div class="slide-right">
                    <div class="bg-fit-secondary/20 rounded-2xl p-2 border border-fit-secondary/30 cinematic-image">
                        <div class="aspect-w-16 aspect-h-9 bg-gray-800 rounded-xl flex items-center justify-center">
                            <div class="text-center p-8">
                                <svg class="w-24 h-24 mx-auto text-fit-secondary mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                                <p class="text-gray-400">Exercise Visualization</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Pillar 2: Nutrition -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
                <div class="order-2 lg:order-1 slide-left">
                    <div class="bg-fit-secondary/20 rounded-2xl p-2 border border-fit-secondary/30 cinematic-image">
                        <div class="aspect-w-16 aspect-h-9 bg-gray-800 rounded-xl flex items-center justify-center">
                            <div class="text-center p-8">
                                <svg class="w-24 h-24 mx-auto text-fit-secondary mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"></path>
                                </svg>
                                <p class="text-gray-400">Nutrition Tracking</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="order-1 lg:order-2 slide-right">
                    <div class="bg-fit-primary/10 rounded-2xl p-8 border border-fit-primary/30">
                        <div class="w-16 h-16 bg-fit-secondary rounded-full flex items-center justify-center mb-6">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"></path>
                            </svg>
                        </div>
                        <h3 class="text-3xl font-bold mb-4 text-fit-secondary">Nutrition: Beyond Diet Culture</h3>
                        <p class="text-gray-300 mb-6">
                            Forever Fit rejects diet culture entirely. We don't count calories obsessively, we don't 
                            promote restriction, and we don't moralise food choices. Instead, we help users understand 
                            how different foods affect their energy, mood, and cognitive function.
                        </p>
                        <ul class="space-y-3 text-gray-300">
                            <li class="flex items-start gap-2">
                                <svg class="w-5 h-5 text-fit-secondary mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span><strong>Pattern Recognition:</strong> "You reported brain fog three hours after that 
                                high-sugar breakfast. Want to try a protein-rich alternative tomorrow?"</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <svg class="w-5 h-5 text-fit-secondary mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span><strong>Real-World Accommodation:</strong> Simple recipes, preparation-free options, 
                                acknowledging that sometimes "cooking" means "opening a tin of beans."</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <svg class="w-5 h-5 text-fit-secondary mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span><strong>ADHD-Specific:</strong> Understanding the link between blood sugar stability 
                                and executive function is transformative.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Pillar 3: Medication -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
                <div class="slide-left">
                    <div class="bg-fit-primary/10 rounded-2xl p-8 border border-fit-primary/30">
                        <div class="w-16 h-16 bg-fit-secondary rounded-full flex items-center justify-center mb-6">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-3xl font-bold mb-4 text-fit-secondary">Medication: Partnership, Not Prescription</h3>
                        <p class="text-gray-300 mb-6">
                            We do not prescribe or provide medication. Forever Fit exists as a tool to support users 
                            and their healthcare providers in optimising medication management.
                        </p>
                        <ul class="space-y-3 text-gray-300">
                            <li class="flex items-start gap-2">
                                <svg class="w-5 h-5 text-fit-secondary mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span><strong>Comprehensive Tracking:</strong> Medication timing, dosage, and subjective effects 
                                with smart reminders and refill alerts.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <svg class="w-5 h-5 text-fit-secondary mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span><strong>Doctor Collaboration:</strong> Generates reports users can share with doctors, 
                                providing longitudinal data for productive clinical conversations.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <svg class="w-5 h-5 text-fit-secondary mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span><strong>AI Pattern Detection:</strong> "Your anxiety spikes correlate with days you take 
                                ADHD medication after 2 PM. Consider earlier dosing?"</span>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div class="slide-right">
                    <div class="bg-fit-secondary/20 rounded-2xl p-2 border border-fit-secondary/30 cinematic-image">
                        <div class="aspect-w-16 aspect-h-9 bg-gray-800 rounded-xl flex items-center justify-center">
                            <div class="text-center p-8">
                                <svg class="w-24 h-24 mx-auto text-fit-secondary mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                                <p class="text-gray-400">Medication Management</p>
                            </div>
                        </div>
                    </div>
                </div>
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

<!-- Business Model & Why It Works -->
<section class="py-32 bg-gradient-to-b from-black to-fit-primary/10">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-4xl md:text-5xl font-bold mb-12 text-center fade-in">Why This Model Works</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                <div class="bg-fit-primary/10 rounded-xl p-8 border border-fit-primary/30 fade-in">
                    <div class="text-4xl font-bold text-fit-secondary mb-4 counter" data-target="15" data-duration="2">15</div>
                    <h3 class="text-xl font-bold mb-3">% Conversion Rate</h3>
                    <p class="text-gray-300">
                        Industry-standard conversion to premium for well-designed freemium apps, but with lower 
                        acquisition costs due to tight-knit neurodivergent communities.
                    </p>
                </div>
                
                <div class="bg-fit-primary/10 rounded-xl p-8 border border-fit-primary/30 fade-in">
                    <h3 class="text-xl font-bold mb-3 text-fit-secondary">Low CAC</h3>
                    <p class="text-gray-300">
                        Neurodivergent communities are tight-knit and word-of-mouth driven. Build something genuinely 
                        useful, and it will spread organically through trusted networks.
                    </p>
                </div>
                
                <div class="bg-fit-primary/10 rounded-xl p-8 border border-fit-primary/30 fade-in">
                    <h3 class="text-xl font-bold mb-3 text-fit-secondary">Gateway to ForeverBox</h3>
                    <p class="text-gray-300">
                        Forever Fit is simultaneously a standalone product, a community resource, and the top of 
                        our client funnel for advanced clinical interventions.
                    </p>
                </div>
            </div>
            
            <div class="bg-fit-secondary/10 rounded-xl p-8 border-l-4 border-fit-secondary fade-in">
                <p class="text-lg text-gray-300">
                    Users who benefit from the app, who experience meaningful life improvement, become candidates 
                    for our clinical interventions when they're ready and financially able. This creates a natural 
                    pathway from digital health to life-changing biological transformation.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Launch Strategy -->
<section class="py-32 bg-black">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-4xl md:text-5xl font-bold mb-12 text-center fade-in">Launch Strategy & Market Positioning</h2>
            <p class="text-xl text-gray-300 text-center mb-16 fade-in">
                Forever Fit launches Q3 2025 with a focused, community-centered approach.
            </p>
            
            <div class="space-y-12">
                <!-- Phase 1 -->
                <div class="flex flex-col md:flex-row gap-8 items-start slide-left">
                    <div class="md:w-1/4">
                        <div class="text-5xl font-bold text-fit-secondary">Phase 1</div>
                        <p class="text-gray-400 mt-2">Months 1-3</p>
                    </div>
                    <div class="md:w-3/4 bg-fit-primary/10 rounded-xl p-8 border border-fit-primary/30">
                        <h3 class="text-2xl font-bold mb-3">Neurodivergent Community Beta</h3>
                        <p class="text-gray-300 mb-4">
                            Recruit 10,000 beta users from ADHD and autism online communities, offering free premium 
                            access in exchange for feedback. This ensures the product genuinely serves its target market 
                            before broader launch.
                        </p>
                        <p class="text-sm text-gray-400">
                            <strong>Goal:</strong> Validate product-market fit with actual neurodivergent users
                        </p>
                    </div>
                </div>
                
                <!-- Phase 2 -->
                <div class="flex flex-col md:flex-row gap-8 items-start slide-right">
                    <div class="md:w-1/4">
                        <div class="text-5xl font-bold text-fit-secondary">Phase 2</div>
                        <p class="text-gray-400 mt-2">Months 4-6</p>
                    </div>
                    <div class="md:w-3/4 bg-fit-primary/10 rounded-xl p-8 border border-fit-primary/30">
                        <h3 class="text-2xl font-bold mb-3">Public Launch with Neurodivergent Advocacy</h3>
                        <p class="text-gray-300 mb-4">
                            Public launch accompanied by content marketing, partnerships with neurodivergent influencers 
                            and advocates, and presence at relevant conferences and events.
                        </p>
                        <p class="text-sm text-gray-400">
                            <strong>Goal:</strong> Build momentum through authentic community engagement
                        </p>
                    </div>
                </div>
                
                <!-- Phase 3 -->
                <div class="flex flex-col md:flex-row gap-8 items-start slide-left">
                    <div class="md:w-1/4">
                        <div class="text-5xl font-bold text-fit-secondary">Phase 3</div>
                        <p class="text-gray-400 mt-2">Months 7-12</p>
                    </div>
                    <div class="md:w-3/4 bg-fit-primary/10 rounded-xl p-8 border border-fit-primary/30">
                        <h3 class="text-2xl font-bold mb-3">Healthcare Provider Partnerships</h3>
                        <p class="text-gray-300 mb-4">
                            Partner with ADHD clinics, autism support services, and progressive healthcare providers 
                            who recognise the value of digital tools for neurodivergent patients.
                        </p>
                        <p class="text-sm text-gray-400">
                            <strong>Goal:</strong> Establish medical legitimacy and referral pathways
                        </p>
                    </div>
                </div>
                
                <!-- Phase 4 -->
                <div class="flex flex-col md:flex-row gap-8 items-start slide-right">
                    <div class="md:w-1/4">
                        <div class="text-5xl font-bold text-fit-secondary">Phase 4</div>
                        <p class="text-gray-400 mt-2">Year 2</p>
                    </div>
                    <div class="md:w-3/4 bg-fit-primary/10 rounded-xl p-8 border border-fit-primary/30">
                        <h3 class="text-2xl font-bold mb-3">International Expansion</h3>
                        <p class="text-gray-300 mb-4">
                            With UK market validation, expand to other English-speaking markets (US, Canada, Australia), 
                            then begin localisation for European markets.
                        </p>
                        <p class="text-sm text-gray-400">
                            <strong>Goal:</strong> Global reach while maintaining neurodivergent-first principles
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="mt-16 bg-fit-secondary/10 rounded-xl p-8 border-l-4 border-fit-secondary fade-in">
                <h3 class="text-2xl font-bold mb-4 text-white">Why Forever Fit Will Succeed</h3>
                <p class="text-gray-300 mb-4">
                    The neurodivergent wellness app market is virtually empty. Existing fitness and wellness apps are 
                    designed by and for neurotypical users, with features and assumptions that actively alienate 
                    neurodivergent people.
                </p>
                <p class="text-gray-300">
                    Forever Fit isn't adapted for neurodivergent users—it's built from the ground up for them. This 
                    represents genuine innovation in an underserved market with massive growth potential.
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
