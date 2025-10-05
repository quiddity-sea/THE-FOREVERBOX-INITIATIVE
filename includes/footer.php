    </main>
    
    <!-- Footer -->
    <footer class="bg-black border-t border-white/10 mt-32">
        <div class="container mx-auto px-6 py-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
                <!-- About -->
                <div>
                    <h3 class="text-xl font-bold mb-4">The ForeverBox Initiative</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        A neurodivergent-first biotechnical odyssey fusing quantum biology, 
                        AI-guided therapies, and ethical autonomy to transform human potential.
                    </p>
                </div>
                
                <!-- Quick Links -->
                <div>
                    <h3 class="text-xl font-bold mb-4">Explore</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="<?php echo $basePath; ?>pages/origin.php" class="text-gray-400 hover:text-white transition-colors">Origin</a></li>
                        <li><a href="<?php echo $basePath; ?>pages/science.php" class="text-gray-400 hover:text-white transition-colors">Science</a></li>
                        <li><a href="<?php echo $basePath; ?>pages/case-studies.php" class="text-gray-400 hover:text-white transition-colors">Case Studies</a></li>
                        <li><a href="<?php echo $basePath; ?>pages/forever-fit.php" class="text-gray-400 hover:text-white transition-colors">Forever Fit</a></li>
                        <li><a href="<?php echo $basePath; ?>pages/investment.php" class="text-gray-400 hover:text-white transition-colors">Investment</a></li>
                        <li><a href="<?php echo $basePath; ?>pages/vision.php" class="text-gray-400 hover:text-white transition-colors">Vision</a></li>
                    </ul>
                </div>
                
                <!-- Contact -->
                <div>
                    <h3 class="text-xl font-bold mb-4">Connect</h3>
                    <p class="text-gray-400 text-sm mb-3">From Snowdonia labs to global digital health.</p>
                    <div class="text-sm text-gray-400">
                        <p>Join us in transforming the future.</p>
                    </div>
                </div>
            </div>
            
            <!-- Copyright -->
            <div class="border-t border-white/10 pt-8 text-center text-sm text-gray-500">
                <p>&copy; <?php echo date('Y'); ?> The ForeverBox Initiative. All rights reserved.</p>
            </div>
        </div>
    </footer>
    
    <!-- Custom JavaScript -->
    <script src="<?php echo $basePath; ?>js/animations.js"></script>
    <script>
        // Mobile menu toggle
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        
        if (mobileMenuBtn && mobileMenu) {
            mobileMenuBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        }
        
        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>
</html>
