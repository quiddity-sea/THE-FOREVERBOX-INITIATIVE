<?php
/**
 * About & Contact Page - ForeverBox Initiative
 */

$pageTitle = "About & Contact";
include __DIR__ . '/../includes/header.php';
?>

<!-- Hero Section -->
<section class="relative h-screen flex items-center justify-center overflow-hidden hero-section">
    <div class="absolute inset-0 bg-gradient-to-br from-gray-900 via-gray-800 to-black hero-bg"></div>
    
    <div class="relative z-10 container mx-auto px-6 text-center">
        <h1 class="text-6xl md:text-8xl font-bold mb-6 fade-in">About & Contact</h1>
        <p class="text-2xl md:text-3xl text-gray-200 mb-4 fade-in">Meet the Team Behind ForeverBox</p>
        <div class="w-24 h-1 bg-white mx-auto mt-8 fade-in"></div>
    </div>
</section>

<!-- Dr. Zeon7 Biography -->
<section class="py-32 bg-black">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
                <!-- Image placeholder -->
                <div class="slide-left">
                    <div class="bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl aspect-square flex items-center justify-center">
                        <div class="text-center p-8">
                            <svg class="w-32 h-32 mx-auto mb-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            <p class="text-gray-400 text-sm">Dr. Zeon7 Portrait</p>
                            <p class="text-gray-500 text-xs mt-2">(Professional photo showing lupine features)</p>
                        </div>
                    </div>
                </div>
                
                <!-- Bio Content -->
                <div class="slide-right">
                    <h2 class="text-4xl md:text-5xl font-bold mb-6">Dr. Zeon7</h2>
                    <p class="text-xl text-gray-400 mb-8">Founder & Chief Scientific Officer</p>
                    
                    <div class="space-y-6 text-lg text-gray-300 leading-relaxed">
                        <p>
                            Dr. Zeon7 is the visionary founder of The ForeverBox Initiative, a neurodivergent-first 
                            biotechnology research organization pioneering quantum biology applications in human health 
                            and enhancement.
                        </p>
                        
                        <p>
                            Diagnosed with ADHD and autism at age 10, Dr. Zeon7 has spent their career transforming 
                            personal challenges into revolutionary research insights. Their unique perspective as both 
                            scientist and neurodivergent individual informs every aspect of ForeverBox's work.
                        </p>
                        
                        <p>
                            As both researcher and research subject, Dr. Zeon7 underwent experimental hybrid augmentation 
                            protocols, integrating lupine genetic sequences over seven years to achieve enhanced sensory 
                            capabilities and physical resilience. This transformation represents proof of concept for 
                            ForeverBox's vision: human biological potential is far more plastic and expansive than 
                            conventional medicine assumes.
                        </p>
                        
                        <p>
                            Based in Snowdonia, North Wales, Dr. Zeon7 leads a diverse team of researchers, clinicians, 
                            and neurodivergent collaborators working to democratize access to transformative biotechnologies 
                            through the Forever Fit platform.
                        </p>
                    </div>
                    
                    <div class="mt-8 pt-8 border-t border-gray-800">
                        <h3 class="text-xl font-bold mb-4">Expertise</h3>
                        <div class="flex flex-wrap gap-3">
                            <span class="px-4 py-2 bg-gray-800 rounded-full text-sm">Quantum Biology</span>
                            <span class="px-4 py-2 bg-gray-800 rounded-full text-sm">Neurodivergent Research</span>
                            <span class="px-4 py-2 bg-gray-800 rounded-full text-sm">AI-Guided Therapies</span>
                            <span class="px-4 py-2 bg-gray-800 rounded-full text-sm">Genetic Engineering</span>
                            <span class="px-4 py-2 bg-gray-800 rounded-full text-sm">Ethical Biotechnology</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mission & Values -->
<section class="py-32 bg-gradient-to-b from-black to-gray-900">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl md:text-5xl font-bold text-center mb-20 fade-in">Our Mission & Values</h2>
        
        <div class="max-w-4xl mx-auto space-y-12">
            <div class="fade-in">
                <h3 class="text-2xl font-bold mb-4">Mission</h3>
                <p class="text-lg text-gray-300 leading-relaxed">
                    To democratize access to transformative biotechnologies that enable individuals to 
                    become more fully themselves, with particular focus on neurodivergent populations 
                    historically underserved by conventional healthcare.
                </p>
            </div>
            
            <div class="fade-in">
                <h3 class="text-2xl font-bold mb-4">Core Values</h3>
                <ul class="space-y-4 text-lg text-gray-300">
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-white mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span><strong>Neurodivergent-First:</strong> Design for neurodivergent minds first, ensuring accessibility for all</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-white mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span><strong>Ethical Autonomy:</strong> Respect individual choice and bodily autonomy above all</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-white mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span><strong>Rigorous Science:</strong> Ground all work in peer-reviewed research and transparent data</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-white mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span><strong>Democratized Access:</strong> Build pathways from laboratory to pocket for millions, not just elite clients</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Location -->
<section class="py-32 bg-gray-900">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="slide-left">
                    <h2 class="text-4xl md:text-5xl font-bold mb-8">Our Location</h2>
                    <div class="space-y-6 text-lg text-gray-300">
                        <p>
                            The ForeverBox Institute is headquartered in Snowdonia, North Wales—a location chosen 
                            deliberately for its combination of natural beauty, isolation for deep research work, 
                            and symbolic resonance with our mission of transformation.
                        </p>
                        <p>
                            The dramatic Welsh landscapes remind us daily that nature is the ultimate innovator, 
                            constantly reshaping and adapting. Our facility integrates sustainable design principles 
                            with cutting-edge laboratory infrastructure.
                        </p>
                    </div>
                    
                    <div class="mt-8 space-y-3 text-gray-300">
                        <p class="flex items-start gap-3">
                            <svg class="w-6 h-6 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span>
                                The ForeverBox Institute<br>
                                Snowdonia Research Campus<br>
                                Betws-y-Coed, Conwy<br>
                                North Wales, United Kingdom
                            </span>
                        </p>
                    </div>
                </div>
                
                <!-- Map placeholder -->
                <div class="slide-right">
                    <div class="bg-gradient-to-br from-gray-800 to-black rounded-2xl aspect-video flex items-center justify-center border border-gray-700">
                        <div class="text-center p-8">
                            <svg class="w-24 h-24 mx-auto mb-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <p class="text-gray-400">Snowdonia, North Wales</p>
                            <p class="text-gray-500 text-sm mt-2">(Map/location visual)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Forms -->
<section class="py-32 bg-black">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl md:text-5xl font-bold text-center mb-8 fade-in">Get In Touch</h2>
        <p class="text-xl text-gray-400 text-center mb-20 max-w-3xl mx-auto fade-in">
            Whether you're an investor, potential client, or media contact, we'd love to hear from you. 
            Choose the appropriate form below.
        </p>
        
        <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Investor Contact -->
            <div class="bg-gradient-to-br from-investment-primary/20 to-investment-secondary/10 rounded-2xl p-8 border border-investment-primary/30 slide-left">
                <div class="flex items-center gap-3 mb-6">
                    <svg class="w-8 h-8 text-investment-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <h3 class="text-2xl font-bold">Investors</h3>
                </div>
                <p class="text-gray-300 mb-6">
                    Interested in partnering with ForeverBox? Learn about our Series A funding opportunity.
                </p>
                <a href="mailto:investments@foreverbox.co.uk" class="block w-full px-6 py-3 bg-investment-secondary text-white font-semibold rounded-full text-center hover:bg-investment-primary transition-all">
                    investments@foreverbox.co.uk
                </a>
            </div>
            
            <!-- Client Contact -->
            <div class="bg-gradient-to-br from-fit-primary/20 to-fit-secondary/10 rounded-2xl p-8 border border-fit-primary/30 slide-left">
                <div class="flex items-center gap-3 mb-6">
                    <svg class="w-8 h-8 text-fit-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                    <h3 class="text-2xl font-bold">Clients</h3>
                </div>
                <p class="text-gray-300 mb-6">
                    Ready to begin your transformation journey? Schedule a consultation with our team.
                </p>
                <a href="mailto:support@foreverbox.co.uk" class="block w-full px-6 py-3 bg-fit-secondary text-white font-semibold rounded-full text-center hover:bg-fit-primary transition-all">
                    support@foreverbox.co.uk
                </a>
            </div>
            
            <!-- Media Contact -->
            <div class="bg-gradient-to-br from-science-primary/20 to-science-secondary/10 rounded-2xl p-8 border border-science-primary/30 slide-left">
                <div class="flex items-center gap-3 mb-6">
                    <svg class="w-8 h-8 text-science-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                    </svg>
                    <h3 class="text-2xl font-bold">Media</h3>
                </div>
                <p class="text-gray-300 mb-6">
                    Press inquiries, partnership opportunities, and general questions welcome.
                </p>
                <a href="mailto:hello@foreverbox.co.uk" class="block w-full px-6 py-3 bg-science-secondary text-white font-semibold rounded-full text-center hover:bg-science-primary transition-all">
                    hello@foreverbox.co.uk
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Newsletter Signup -->
<section class="py-32 bg-gradient-to-t from-gray-900 to-black">
    <div class="container mx-auto px-6">
        <div class="max-w-2xl mx-auto text-center">
            <h2 class="text-4xl md:text-5xl font-bold mb-6 fade-in">Stay Connected</h2>
            <p class="text-xl text-gray-300 mb-12 fade-in">
                Receive updates on ForeverBox research, Forever Fit features, and the future of 
                neurodivergent-first biotechnology.
            </p>
            
            <form class="flex flex-col sm:flex-row gap-4 fade-in" onsubmit="event.preventDefault(); alert('Newsletter signup functionality will be implemented with backend integration.');">
                <input 
                    type="email" 
                    placeholder="Enter your email" 
                    required
                    class="flex-1 px-6 py-4 bg-gray-900 border border-gray-700 rounded-full focus:outline-none focus:border-white transition-colors"
                >
                <button 
                    type="submit"
                    class="px-8 py-4 bg-white text-black font-semibold rounded-full hover:bg-gray-200 transition-all"
                >
                    Subscribe
                </button>
            </form>
            
            <p class="text-sm text-gray-500 mt-6">
                We respect your privacy. Unsubscribe anytime.
            </p>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
