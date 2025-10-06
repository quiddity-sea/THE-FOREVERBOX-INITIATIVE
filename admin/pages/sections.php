<?php
/**
 * Manage Content Sections
 */

require_once __DIR__ . '/../includes/auth.php';
requireLogin();

require_once __DIR__ . '/../../config/database.php';
require_once __DIR__ . '/../../models/page.php';
require_once __DIR__ . '/../../models/content-section.php';

$database = new Database();
$db = $database->getConnection();
$pageModel = new Page($db);
$sectionModel = new ContentSection($db);

// Get page ID from query string
$pageId = $_GET['page_id'] ?? null;
$page = null;
$sections = [];

if ($pageId) {
    // Get page details
    $query = "SELECT * FROM pages WHERE id = :id LIMIT 1";
    $stmt = $db->prepare($query);
    $stmt->bindParam(':id', $pageId);
    $stmt->execute();
    $page = $stmt->fetch();
    
    if ($page) {
        $sections = $sectionModel->getByPageId($pageId);
    }
}

$pages = $pageModel->getAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Sections - ForeverBox Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-900 text-white min-h-screen">
    <!-- Navigation -->
    <nav class="bg-gray-800 border-b border-gray-700">
        <div class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-8">
                    <h1 class="text-xl font-bold">ForeverBox Admin</h1>
                    <div class="flex space-x-4">
                        <a href="/admin/index.php" class="text-gray-400 hover:text-gray-300">Dashboard</a>
                        <a href="/admin/pages/pages.php" class="text-gray-400 hover:text-gray-300">Pages</a>
                        <a href="/admin/pages/sections.php" class="text-blue-400 hover:text-blue-300">Sections</a>
                        <a href="/admin/pages/contacts.php" class="text-gray-400 hover:text-gray-300">Contacts</a>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <span class="text-gray-400 text-sm">Welcome, <?php echo getAdminName(); ?></span>
                    <a href="/admin/logout.php" class="text-red-400 hover:text-red-300 text-sm">Logout</a>
                </div>
            </div>
        </div>
    </nav>
    
    <!-- Main Content -->
    <div class="container mx-auto px-6 py-8">
        <div class="mb-8">
            <h2 class="text-3xl font-bold mb-4">Manage Content Sections</h2>
            
            <!-- Page Selector -->
            <div class="bg-gray-800 rounded-lg p-6 mb-6">
                <label class="block text-sm font-medium mb-2">Select Page:</label>
                <select 
                    onchange="window.location.href='/admin/pages/sections.php?page_id=' + this.value"
                    class="w-full max-w-md px-4 py-2 bg-gray-700 border border-gray-600 rounded-lg text-white"
                >
                    <option value="">-- Choose a page --</option>
                    <?php foreach ($pages as $p): ?>
                        <option value="<?php echo $p['id']; ?>" <?php echo ($pageId == $p['id']) ? 'selected' : ''; ?>>
                            <?php echo htmlspecialchars($p['title']); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        
        <?php if ($page): ?>
            <!-- Page Info -->
            <div class="bg-gray-800 rounded-lg p-6 mb-6">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-2xl font-bold mb-2"><?php echo htmlspecialchars($page['title']); ?></h3>
                        <p class="text-gray-400"><?php echo htmlspecialchars($page['subtitle']); ?></p>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="w-8 h-8 rounded" style="background-color: <?php echo $page['color_primary']; ?>"></div>
                        <div class="w-8 h-8 rounded" style="background-color: <?php echo $page['color_secondary']; ?>"></div>
                    </div>
                </div>
            </div>
            
            <!-- Sections List -->
            <div class="bg-gray-800 rounded-lg p-6">
                <div class="flex items-center justify-between mb-6">
                    <h3 class="text-xl font-bold">Content Sections</h3>
                    <a href="/admin/pages/edit-section.php?page_id=<?php echo $pageId; ?>" class="bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded-lg text-sm font-semibold">
                        + Add Section
                    </a>
                </div>
                
                <?php if (empty($sections)): ?>
                    <p class="text-gray-400 text-center py-8">No sections found. Add your first section to get started.</p>
                <?php else: ?>
                    <div class="space-y-4">
                        <?php foreach ($sections as $section): ?>
                            <div class="bg-gray-700/50 rounded-lg p-4 border border-gray-600">
                                <div class="flex items-start justify-between">
                                    <div class="flex-grow">
                                        <div class="flex items-center space-x-3 mb-2">
                                            <span class="px-3 py-1 bg-blue-600 text-xs rounded-full font-semibold">
                                                <?php echo htmlspecialchars($section['section_type']); ?>
                                            </span>
                                            <span class="text-gray-400 text-sm">Order: <?php echo $section['section_order']; ?></span>
                                        </div>
                                        <h4 class="text-lg font-semibold mb-1">
                                            <?php echo htmlspecialchars($section['heading'] ?: 'Untitled Section'); ?>
                                        </h4>
                                        <?php if ($section['subheading']): ?>
                                            <p class="text-gray-400 text-sm mb-2"><?php echo htmlspecialchars($section['subheading']); ?></p>
                                        <?php endif; ?>
                                        <?php if ($section['body']): ?>
                                            <div class="text-gray-300 text-sm line-clamp-2">
                                                <?php echo substr(strip_tags($section['body']), 0, 150); ?>...
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="flex flex-col space-y-2 ml-4">
                                        <a href="/admin/pages/edit-section.php?id=<?php echo $section['id']; ?>" 
                                           class="text-green-400 hover:text-green-300 text-sm whitespace-nowrap">
                                            Edit
                                        </a>
                                        <a href="/admin/pages/delete-section.php?id=<?php echo $section['id']; ?>" 
                                           onclick="return confirm('Are you sure you want to delete this section?')"
                                           class="text-red-400 hover:text-red-300 text-sm whitespace-nowrap">
                                            Delete
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        <?php else: ?>
            <div class="bg-gray-800 rounded-lg p-12 text-center">
                <p class="text-gray-400">Select a page from the dropdown above to manage its sections.</p>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
