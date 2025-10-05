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
        <p class="text-lg md:text-xl text-gray-400 mb-4 uppercase tracking-wider" id="hero-tagline">
            Breaking Twelve Years of Silence
        </p>
        <h1 class="text-5xl md:text-7xl lg:text-8xl font-bold mb-6 tracking-tight" id="hero-title">
            The ForeverBox<br>Initiative
        </h1>
        <p class="text-xl md:text-2xl text-gray-300 mb-8 max-w-3xl mx-auto leading-relaxed" id="hero-subtitle">
            A neurodivergent-first biotechnical odyssey.<br>
            Fusing quantum biology, AI-guided therapies, and ethical autonomy.
        </p>
        <p class="text-lg md:text-xl text-gray-400 mb-12 max-w-2xl mx-auto" id="hero-description">
            From Snowdonia labs to global digital health—pioneering clinical interventions and the Forever Fit app for accessible, neurodivergent-first wellness.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="pages/science.php" class="inline-block px-8 py-4 bg-white text-black font-semibold rounded-full hover:bg-gray-200 transition-all transform hover:scale-105" id="hero-cta">
                Explore the Science
            </a>
            <a href="pages/investment.php" class="inline-block px-8 py-4 bg-transparent border-2 border-white text-white font-semibold rounded-full hover:bg-white hover:text-black transition-all transform hover:scale-105">
                Investment Opportunity
            </a>
        </div>
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
                        <p class="text-gray-200">Digital Health Platform</p>
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

<!-- Why Now? Section -->
<section class="py-32 bg-black">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-4xl md:text-5xl font-bold mb-8 fade-in">Why Now?</h2>
            <div class="space-y-6 text-lg text-gray-300 leading-relaxed">
                <p class="fade-in">
                    For twelve years, we've worked in silence—researching, testing, refining. We waited 
                    until we had proof: real transformations, validated outcomes, repeatable protocols.
                </p>
                <p class="fade-in">
                    That proof now exists. We have case studies showing dramatic height adjustments, 
                    age reversal, body recomposition, and even experimental hybrid augmentation. The data 
                    is rigorous, the results reproducible, the science sound.
                </p>
                <p class="fade-in">
                    We're breaking our silence because the work is too important to remain hidden, the 
                    technologies too valuable to remain inaccessible, and the future too urgent to delay. 
                    Human beings deserve tools to become more fully themselves.
                </p>
                <p class="fade-in text-xl font-semibold text-white">
                    The science is ready. The technology is ready. The question is: are you ready?
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-32 bg-gradient-to-t from-gray-900 to-black" id="cta">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-4xl md:text-5xl font-bold mb-8 fade-in">Join Us in Transforming the Future</h2>
        <p class="text-xl text-gray-300 mb-12 max-w-3xl mx-auto fade-in leading-relaxed">
            Whether you're seeking transformation, interested in investment opportunities, or want to 
            learn more about our groundbreaking research, we invite you to become part of the ForeverBox story.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center fade-in">
            <a href="pages/forever-fit.php" class="px-8 py-4 bg-fit-secondary text-white font-semibold rounded-full hover:bg-fit-primary transition-all transform hover:scale-105">
                Begin Your Journey
            </a>
            <a href="pages/investment.php" class="px-8 py-4 bg-investment-secondary text-white font-semibold rounded-full hover:bg-investment-primary transition-all transform hover:scale-105">
                Investment Opportunity
            </a>
            <a href="pages/about.php" class="px-8 py-4 bg-white text-black font-semibold rounded-full hover:bg-gray-200 transition-all transform hover:scale-105">
                Contact Us
            </a>
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
