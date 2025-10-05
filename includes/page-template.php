<?php
/**
 * Dynamic Page Template
 * Renders pages from database content
 */

// Get the slug from URL (e.g., pages/origin.php -> origin)
$slug = basename($_SERVER['PHP_SELF'], '.php');

// Initialize database and models
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../models/Page.php';
require_once __DIR__ . '/../models/ContentSection.php';
require_once __DIR__ . '/../includes/ContentRenderer.php';

$database = new Database();
$db = $database->getConnection();

if (!$db) {
    die('Database connection failed. Please check your configuration.');
}

$pageModel = new Page($db);
$sectionModel = new ContentSection($db);

// Get page data
$page = $pageModel->getBySlug($slug);

if (!$page) {
    header('HTTP/1.0 404 Not Found');
    die('Page not found');
}

// Set page title for header
$pageTitle = $page['title'];

// Get page sections
$sections = $sectionModel->getByPageId($page['id']);

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
