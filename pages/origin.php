<?php
/**
 * Origin Page - ForeverBox Initiative
 */

$pageTitle = "Origin";
include __DIR__ . '/../includes/header.php';
?>

<!-- Hero Section -->
<section class="relative h-screen flex items-center justify-center overflow-hidden hero-section">
    <!-- Background gradient with Origin colors -->
    <div class="absolute inset-0 bg-gradient-to-br from-origin-primary via-origin-secondary to-black hero-bg"></div>
    
    <!-- Content -->
    <div class="relative z-10 container mx-auto px-6 text-center">
        <h1 class="text-6xl md:text-8xl font-bold mb-6 fade-in">Origin</h1>
        <p class="text-2xl md:text-3xl text-gray-200 mb-4 fade-in">From Snowdonia to a Global Vision</p>
        <div class="w-24 h-1 bg-white mx-auto mt-8 fade-in"></div>
    </div>
</section>

<!-- Story Section -->
<section class="py-32 bg-black">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-4xl md:text-5xl font-bold mb-12 slide-left">The Beginning</h2>
            
            <div class="space-y-8 text-lg leading-relaxed text-gray-300">
                <p class="fade-in">
                    In the rugged mountains of Snowdonia, where ancient landscapes meet cutting-edge science, 
                    The ForeverBox Initiative was born from a simple yet profound realization: human potential 
                    is not a fixed point, but a horizon that expands with every discovery.
                </p>
                
                <p class="fade-in">
                    Our founders, a diverse team of neuroscientists, quantum biologists, and neurodivergent 
                    researchers, came together with a shared vision—to create healthcare solutions that don't 
                    just treat symptoms, but fundamentally transform how we understand and enhance human biology.
                </p>
                
                <p class="fade-in">
                    The location was no accident. Snowdonia's isolation provided the perfect environment for 
                    deep thinking and breakthrough research, while its dramatic beauty served as a constant 
                    reminder that nature itself is the ultimate innovator.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Timeline Section -->
<section class="py-32 bg-gradient-to-b from-black to-origin-primary/20">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl md:text-5xl font-bold text-center mb-20">Our Journey</h2>
        
        <div class="max-w-4xl mx-auto space-y-16">
            <!-- Timeline Item 1 -->
            <div class="flex flex-col md:flex-row gap-8 items-start slide-left">
                <div class="md:w-1/4">
                    <div class="text-5xl font-bold text-origin-secondary">2020</div>
                </div>
                <div class="md:w-3/4">
                    <h3 class="text-2xl font-bold mb-3">Foundation</h3>
                    <p class="text-gray-300 leading-relaxed">
                        The ForeverBox Initiative is established in Snowdonia, Wales, with a mission to 
                        explore the intersection of quantum biology and neurodivergent-first healthcare.
                    </p>
                </div>
            </div>
            
            <!-- Timeline Item 2 -->
            <div class="flex flex-col md:flex-row gap-8 items-start slide-right">
                <div class="md:w-1/4">
                    <div class="text-5xl font-bold text-origin-secondary">2021</div>
                </div>
                <div class="md:w-3/4">
                    <h3 class="text-2xl font-bold mb-3">Research Breakthrough</h3>
                    <p class="text-gray-300 leading-relaxed">
                        Our team discovers novel quantum biological mechanisms that respond uniquely to 
                        neurodivergent cognitive patterns, opening new pathways for personalized therapies.
                    </p>
                </div>
            </div>
            
            <!-- Timeline Item 3 -->
            <div class="flex flex-col md:flex-row gap-8 items-start slide-left">
                <div class="md:w-1/4">
                    <div class="text-5xl font-bold text-origin-secondary">2022</div>
                </div>
                <div class="md:w-3/4">
                    <h3 class="text-2xl font-bold mb-3">AI Integration</h3>
                    <p class="text-gray-300 leading-relaxed">
                        Development begins on AI-guided therapy systems that adapt to individual biological 
                        and cognitive signatures, ensuring truly personalized treatment plans.
                    </p>
                </div>
            </div>
            
            <!-- Timeline Item 4 -->
            <div class="flex flex-col md:flex-row gap-8 items-start slide-right">
                <div class="md:w-1/4">
                    <div class="text-5xl font-bold text-origin-secondary">2023</div>
                </div>
                <div class="md:w-3/4">
                    <h3 class="text-2xl font-bold mb-3">Forever Fit Launch</h3>
                    <p class="text-gray-300 leading-relaxed">
                        Introduction of Forever Fit, our flagship program addressing height optimization, 
                        aging, and holistic human enhancement through quantum biology principles.
                    </p>
                </div>
            </div>
            
            <!-- Timeline Item 5 -->
            <div class="flex flex-col md:flex-row gap-8 items-start slide-left">
                <div class="md:w-1/4">
                    <div class="text-5xl font-bold text-origin-secondary">2024</div>
                </div>
                <div class="md:w-3/4">
                    <h3 class="text-2xl font-bold mb-3">Global Expansion</h3>
                    <p class="text-gray-300 leading-relaxed">
                        Expansion into global digital health platforms, bringing our neurodivergent-first 
                        approach to communities worldwide while maintaining ethical autonomy as a core principle.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="py-32 bg-black">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl md:text-5xl font-bold text-center mb-20">Our Core Values</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 max-w-6xl mx-auto stagger-list">
            <div class="text-center">
                <div class="w-20 h-20 bg-origin-secondary rounded-full mx-auto mb-6 flex items-center justify-center">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-4">Neurodivergent-First</h3>
                <p class="text-gray-400">
                    We design for neurodivergent minds first, ensuring accessibility and inclusivity 
                    are built into every aspect of our work.
                </p>
            </div>
            
            <div class="text-center">
                <div class="w-20 h-20 bg-origin-secondary rounded-full mx-auto mb-6 flex items-center justify-center">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-4">Scientific Innovation</h3>
                <p class="text-gray-400">
                    Pushing the boundaries of quantum biology and AI to unlock new possibilities 
                    in human health and potential.
                </p>
            </div>
            
            <div class="text-center">
                <div class="w-20 h-20 bg-origin-secondary rounded-full mx-auto mb-6 flex items-center justify-center">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-4">Ethical Autonomy</h3>
                <p class="text-gray-400">
                    Respecting individual choice and agency while providing tools for informed 
                    decision-making about personal health.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-32 bg-gradient-to-t from-origin-primary/20 to-black">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-4xl md:text-5xl font-bold mb-8 fade-in">Join Our Journey</h2>
        <p class="text-xl text-gray-300 mb-12 max-w-2xl mx-auto fade-in">
            From our origins in Snowdonia to our global impact, we're just getting started. 
            Explore how we're transforming human potential.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center fade-in">
            <a href="science.php" class="px-8 py-4 bg-origin-secondary text-white font-semibold rounded-full hover:bg-origin-primary transition-all">
                Explore the Science
            </a>
            <a href="forever-fit.php" class="px-8 py-4 bg-white text-black font-semibold rounded-full hover:bg-gray-200 transition-all">
                Discover Forever Fit
            </a>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
