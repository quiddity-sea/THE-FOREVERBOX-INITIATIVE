<?php
/**
 * Homepage - ForeverBox Initiative
 */

$pageTitle = "Home";
include __DIR__ . '/includes/header.php';
?>

<!-- Hero Section -->
<section class="relative h-screen flex items-center justify-center overflow-hidden">
    <!-- Background with gradient -->
    <div class="absolute inset-0 bg-gradient-to-br from-black via-gray-900 to-black"></div>
    
    <!-- Animated grid overlay -->
    <div class="absolute inset-0 opacity-20" style="background-image: linear-gradient(rgba(255,255,255,.05) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,.05) 1px, transparent 1px); background-size: 50px 50px;"></div>
    
    <!-- Content -->
    <div class="relative z-10 container mx-auto px-6 text-center">
        <h1 class="text-5xl md:text-7xl lg:text-8xl font-bold mb-6 tracking-tight" id="hero-title">
            The ForeverBox<br>Initiative
        </h1>
        <p class="text-xl md:text-2xl text-gray-300 mb-8 max-w-3xl mx-auto leading-relaxed" id="hero-subtitle">
            A neurodivergent-first biotechnical odyssey.<br>
            Fusing quantum biology, AI-guided therapies, and ethical autonomy.
        </p>
        <p class="text-lg md:text-xl text-gray-400 mb-12 max-w-2xl mx-auto" id="hero-description">
            From Snowdonia labs to global digital health, we transform height, aging, and human potential through Forever Fit.
        </p>
        <a href="#explore" class="inline-block px-8 py-4 bg-white text-black font-semibold rounded-full hover:bg-gray-200 transition-all transform hover:scale-105" id="hero-cta">
            Explore Our Vision
        </a>
    </div>
    
    <!-- Scroll indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
        </svg>
    </div>
</section>

<!-- Explore Section -->
<section id="explore" class="py-32 bg-black">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl md:text-5xl font-bold text-center mb-16">Our Journey</h2>
        
        <!-- Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Origin Card -->
            <a href="pages/origin.php" class="group block card-hover">
                <div class="relative overflow-hidden rounded-2xl bg-gradient-to-br from-origin-primary to-origin-secondary p-8 h-80 flex flex-col justify-end transform transition-all duration-500 hover:scale-105">
                    <div class="absolute inset-0 bg-black/40 group-hover:bg-black/20 transition-all"></div>
                    <div class="relative z-10">
                        <h3 class="text-3xl font-bold mb-3">Origin</h3>
                        <p class="text-gray-200">From Snowdonia to a Global Vision</p>
                    </div>
                    <div class="absolute top-8 right-8 w-16 h-16 rounded-full bg-white/10 backdrop-blur-sm"></div>
                </div>
            </a>
            
            <!-- Science Card -->
            <a href="pages/science.php" class="group block card-hover">
                <div class="relative overflow-hidden rounded-2xl bg-gradient-to-br from-science-primary to-science-secondary p-8 h-80 flex flex-col justify-end transform transition-all duration-500 hover:scale-105">
                    <div class="absolute inset-0 bg-black/40 group-hover:bg-black/20 transition-all"></div>
                    <div class="relative z-10">
                        <h3 class="text-3xl font-bold mb-3">Science</h3>
                        <p class="text-gray-200">Quantum Biology Meets Innovation</p>
                    </div>
                    <div class="absolute top-8 right-8 w-16 h-16 rounded-full bg-white/10 backdrop-blur-sm"></div>
                </div>
            </a>
            
            <!-- Case Studies Card -->
            <a href="pages/case-studies.php" class="group block card-hover">
                <div class="relative overflow-hidden rounded-2xl bg-gradient-to-br from-cases-primary to-cases-secondary p-8 h-80 flex flex-col justify-end transform transition-all duration-500 hover:scale-105">
                    <div class="absolute inset-0 bg-black/40 group-hover:bg-black/20 transition-all"></div>
                    <div class="relative z-10">
                        <h3 class="text-3xl font-bold mb-3">Case Studies</h3>
                        <p class="text-gray-200">Real Impact, Real Results</p>
                    </div>
                    <div class="absolute top-8 right-8 w-16 h-16 rounded-full bg-white/10 backdrop-blur-sm"></div>
                </div>
            </a>
            
            <!-- Forever Fit Card -->
            <a href="pages/forever-fit.php" class="group block card-hover">
                <div class="relative overflow-hidden rounded-2xl bg-gradient-to-br from-fit-primary to-fit-secondary p-8 h-80 flex flex-col justify-end transform transition-all duration-500 hover:scale-105">
                    <div class="absolute inset-0 bg-black/40 group-hover:bg-black/20 transition-all"></div>
                    <div class="relative z-10">
                        <h3 class="text-3xl font-bold mb-3">Forever Fit</h3>
                        <p class="text-gray-200">Transforming Human Potential</p>
                    </div>
                    <div class="absolute top-8 right-8 w-16 h-16 rounded-full bg-white/10 backdrop-blur-sm"></div>
                </div>
            </a>
            
            <!-- Investment Card -->
            <a href="pages/investment.php" class="group block card-hover">
                <div class="relative overflow-hidden rounded-2xl bg-gradient-to-br from-investment-primary to-investment-secondary p-8 h-80 flex flex-col justify-end transform transition-all duration-500 hover:scale-105">
                    <div class="absolute inset-0 bg-black/40 group-hover:bg-black/20 transition-all"></div>
                    <div class="relative z-10">
                        <h3 class="text-3xl font-bold mb-3">Investment</h3>
                        <p class="text-gray-200">Join the Future of Digital Health</p>
                    </div>
                    <div class="absolute top-8 right-8 w-16 h-16 rounded-full bg-white/10 backdrop-blur-sm"></div>
                </div>
            </a>
            
            <!-- Vision Card -->
            <a href="pages/vision.php" class="group block card-hover">
                <div class="relative overflow-hidden rounded-2xl bg-gradient-to-br from-vision-primary to-vision-secondary p-8 h-80 flex flex-col justify-end transform transition-all duration-500 hover:scale-105">
                    <div class="absolute inset-0 bg-black/40 group-hover:bg-black/20 transition-all"></div>
                    <div class="relative z-10">
                        <h3 class="text-3xl font-bold mb-3">Vision</h3>
                        <p class="text-gray-200">The Path Forward</p>
                    </div>
                    <div class="absolute top-8 right-8 w-16 h-16 rounded-full bg-white/10 backdrop-blur-sm"></div>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- Mission Statement Section -->
<section class="py-32 bg-gradient-to-b from-black to-gray-900">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-4xl md:text-5xl font-bold mb-8">Reimagining Human Potential</h2>
            <p class="text-xl text-gray-300 leading-relaxed mb-6">
                We believe in a future where biotechnology, quantum biology, and AI converge to 
                unlock human potential while respecting neurodiversity and individual autonomy.
            </p>
            <p class="text-lg text-gray-400 leading-relaxed">
                Our mission extends from cutting-edge research in Snowdonia to global digital health solutions, 
                creating therapies that adapt to each individual's unique biology and cognitive patterns.
            </p>
        </div>
    </div>
</section>

<script>
// GSAP Animations
gsap.registerPlugin(ScrollTrigger);

// Hero animations
gsap.from("#hero-title", {
    opacity: 0,
    y: 50,
    duration: 1.2,
    ease: "power3.out"
});

gsap.from("#hero-subtitle", {
    opacity: 0,
    y: 30,
    duration: 1,
    delay: 0.3,
    ease: "power3.out"
});

gsap.from("#hero-description", {
    opacity: 0,
    y: 30,
    duration: 1,
    delay: 0.5,
    ease: "power3.out"
});

gsap.from("#hero-cta", {
    opacity: 0,
    scale: 0.8,
    duration: 0.8,
    delay: 0.7,
    ease: "back.out(1.7)"
});

// Card animations on scroll
gsap.utils.toArray(".card-hover").forEach((card, index) => {
    gsap.from(card, {
        scrollTrigger: {
            trigger: card,
            start: "top 85%",
            toggleActions: "play none none none"
        },
        opacity: 0,
        y: 50,
        duration: 0.8,
        delay: index * 0.1,
        ease: "power3.out"
    });
});
</script>

<?php include __DIR__ . '/includes/footer.php'; ?>
