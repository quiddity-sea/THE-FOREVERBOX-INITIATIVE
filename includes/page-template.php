<?php
/**
 * Dynamic Page Template
 * Renders pages from database content
 */

// Get the slug from URL (e.g., pages/origin.php -> origin)
$slug = basename($_SERVER['PHP_SELF'], '.php');

// Initialize database and models
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../models/page.php';
require_once __DIR__ . '/../models/content-section.php';
require_once __DIR__ . '/../includes/content-renderer.php';

$database = new Database();
$db = $database->getConnection();

if (!$db) {
    // Graceful error handling for database connection failure
    $pageTitle = "Database Error";
    include __DIR__ . '/../includes/header.php';
    ?>
    <section class="min-h-screen flex items-center justify-center bg-black">
        <div class="container mx-auto px-6 max-w-2xl text-center">
            <div class="bg-red-900/20 border border-red-500/50 rounded-lg p-8">
                <svg class="w-16 h-16 text-red-500 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                </svg>
                <h1 class="text-3xl font-bold text-red-400 mb-4">Database Connection Failed</h1>
                <p class="text-lg text-gray-300 mb-6">
                    We're unable to connect to the database at this time. This content requires an active database connection to display properly.
                </p>
                <p class="text-sm text-gray-400 mb-6">
                    Please ensure:
                </p>
                <ul class="text-left text-sm text-gray-400 mb-6 space-y-2 max-w-md mx-auto">
                    <li>• Database server is running</li>
                    <li>• Database credentials are correct in .env file</li>
                    <li>• Database has been created and seeded</li>
                </ul>
                <a href="<?php echo $basePath; ?>index.php" class="inline-block px-6 py-3 bg-red-600 hover:bg-red-700 rounded-lg font-semibold transition-colors">
                    Return to Homepage
                </a>
            </div>
        </div>
    </section>
    <?php
    include __DIR__ . '/../includes/footer.php';
    exit;
}

$pageModel = new Page($db);
$sectionModel = new ContentSection($db);

// Get page data
$page = $pageModel->getBySlug($slug);

if (!$page) {
    // Graceful 404 error handling
    header('HTTP/1.0 404 Not Found');
    $pageTitle = "Page Not Found";
    include __DIR__ . '/../includes/header.php';
    ?>
    <section class="min-h-screen flex items-center justify-center bg-black">
        <div class="container mx-auto px-6 max-w-2xl text-center">
            <div class="bg-gray-900/50 border border-gray-700 rounded-lg p-8">
                <svg class="w-16 h-16 text-gray-500 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M12 12h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <h1 class="text-4xl font-bold text-gray-300 mb-4">404 - Page Not Found</h1>
                <p class="text-lg text-gray-400 mb-6">
                    The page "<?php echo htmlspecialchars($slug); ?>" could not be found in our database.
                </p>
                <p class="text-sm text-gray-500 mb-6">
                    This page may not exist or hasn't been added to the database yet.
                </p>
                <a href="<?php echo $basePath; ?>index.php" class="inline-block px-6 py-3 bg-white text-black hover:bg-gray-200 rounded-lg font-semibold transition-colors">
                    Return to Homepage
                </a>
            </div>
        </div>
    </section>
    <?php
    include __DIR__ . '/../includes/footer.php';
    exit;
}

// Set page title for header
$pageTitle = $page['title'];

// Get page sections
$sections = $sectionModel->getByPageId($page['id']);

if (empty($sections)) {
    // Log warning but continue - page might intentionally have no content yet
    error_log("Warning: Page '{$page['slug']}' has no content sections");
}

// Set dynamic color classes based on page colors
$colorClasses = "
    .from-primary { background: {$page['color_primary']}; }
    .to-secondary { background: {$page['color_secondary']}; }
    .hero-bg { background: linear-gradient(to bottom right, {$page['color_primary']}, {$page['color_secondary']}, #000); }
";

// Include header
include __DIR__ . '/../includes/header.php';
?>

<!-- Inject dynamic color styles -->
<style>
<?php echo $colorClasses; ?>
</style>

<!-- Render all content sections -->
<?php foreach ($sections as $section): ?>
    <?php echo ContentRenderer::renderSection($section); ?>
<?php endforeach; ?>

<?php
// Include footer
include __DIR__ . '/../includes/footer.php';
?>
