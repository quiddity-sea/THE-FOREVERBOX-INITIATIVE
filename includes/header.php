<?php
/**
 * Header Template
 * ForeverBox Initiative
 */

// Determine the base path based on where we're being included from
// If we're in a subdirectory (pages/), we need to go up one level
$basePath = (basename(dirname($_SERVER['PHP_SELF'])) === 'pages') ? '../' : '';
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ForeverBox Initiative: A neurodivergent-first biotechnical odyssey fusing quantum biology, AI-guided therapies, and ethical autonomy.">
    <title><?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) . ' - ' : ''; ?>The ForeverBox Initiative</title>
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- GSAP Animation Library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    
    <!-- Custom Styles -->
    <link rel="stylesheet" href="<?php echo $basePath; ?>css/style.css">
    
    <!-- Tailwind Config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'sans': ['Inter', 'system-ui', 'sans-serif'],
                    },
                    colors: {
                        'origin': {
                            primary: '#1a237e',
                            secondary: '#3949ab'
                        },
                        'science': {
                            primary: '#004d40',
                            secondary: '#00897b'
                        },
                        'cases': {
                            primary: '#b71c1c',
                            secondary: '#e53935'
                        },
                        'fit': {
                            primary: '#f57f17',
                            secondary: '#fbc02d'
                        },
                        'investment': {
                            primary: '#4a148c',
                            secondary: '#7b1fa2'
                        },
                        'vision': {
                            primary: '#01579b',
                            secondary: '#0288d1'
                        }
                    }
                }
            }
        }
    </script>
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap');
        
        /* Neurodivergent-first design principles */
        * {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        
        /* High contrast for better readability */
        body {
            font-family: 'Inter', system-ui, sans-serif;
            line-height: 1.6;
        }
        
        /* Reduce motion for users who prefer it */
        @media (prefers-reduced-motion: reduce) {
            *, *::before, *::after {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
            }
        }
        
        /* Focus visible for keyboard navigation */
        *:focus-visible {
            outline: 3px solid currentColor;
            outline-offset: 2px;
        }
    </style>
</head>
<body class="bg-black text-white">
    <!-- Navigation -->
    <nav class="fixed top-0 left-0 w-full z-50 bg-black/80 backdrop-blur-lg border-b border-white/10" id="main-nav">
        <div class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <!-- Logo -->
                <a href="<?php echo $basePath; ?>index.php" class="text-2xl font-bold tracking-tight hover:opacity-80 transition-opacity">
                    ForeverBox
                </a>
                
                <!-- Desktop Navigation -->
                <ul class="hidden md:flex space-x-8 items-center">
                    <li><a href="<?php echo $basePath; ?>pages/origin.php" class="nav-link hover:text-origin-secondary transition-colors">Origin</a></li>
                    <li><a href="<?php echo $basePath; ?>pages/science.php" class="nav-link hover:text-science-secondary transition-colors">Science</a></li>
                    <li><a href="<?php echo $basePath; ?>pages/case-studies.php" class="nav-link hover:text-cases-secondary transition-colors">Case Studies</a></li>
                    <li><a href="<?php echo $basePath; ?>pages/forever-fit.php" class="nav-link hover:text-fit-secondary transition-colors">Forever Fit</a></li>
                    <li><a href="<?php echo $basePath; ?>pages/investment.php" class="nav-link hover:text-investment-secondary transition-colors">Investment</a></li>
                    <li><a href="<?php echo $basePath; ?>pages/vision.php" class="nav-link hover:text-vision-secondary transition-colors">Vision</a></li>
                    <li><a href="<?php echo $basePath; ?>pages/about.php" class="nav-link hover:text-gray-300 transition-colors">About</a></li>
                </ul>
                
                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="md:hidden p-2 text-white" aria-label="Toggle menu">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
            
            <!-- Mobile Navigation -->
            <div id="mobile-menu" class="hidden md:hidden mt-4 pb-4">
                <ul class="space-y-3">
                    <li><a href="<?php echo $basePath; ?>pages/origin.php" class="block py-2 hover:text-origin-secondary transition-colors">Origin</a></li>
                    <li><a href="<?php echo $basePath; ?>pages/science.php" class="block py-2 hover:text-science-secondary transition-colors">Science</a></li>
                    <li><a href="<?php echo $basePath; ?>pages/case-studies.php" class="block py-2 hover:text-cases-secondary transition-colors">Case Studies</a></li>
                    <li><a href="<?php echo $basePath; ?>pages/forever-fit.php" class="block py-2 hover:text-fit-secondary transition-colors">Forever Fit</a></li>
                    <li><a href="<?php echo $basePath; ?>pages/investment.php" class="block py-2 hover:text-investment-secondary transition-colors">Investment</a></li>
                    <li><a href="<?php echo $basePath; ?>pages/vision.php" class="block py-2 hover:text-vision-secondary transition-colors">Vision</a></li>
                    <li><a href="<?php echo $basePath; ?>pages/about.php" class="block py-2 hover:text-gray-300 transition-colors">About</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <!-- Main Content -->
    <main class="pt-20">
