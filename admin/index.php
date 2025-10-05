<?php
/**
 * Admin Dashboard
 */

require_once __DIR__ . '/includes/auth.php';
requireLogin();

require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../models/Page.php';

$database = new Database();
$db = $database->getConnection();
$pageModel = new Page($db);

$pages = $pageModel->getAll();

// Get stats
$statsQuery = "SELECT 
    (SELECT COUNT(*) FROM pages WHERE is_active = 1) as total_pages,
    (SELECT COUNT(*) FROM content_sections WHERE is_active = 1) as total_sections,
    (SELECT COUNT(*) FROM contact_submissions WHERE status = 'new') as new_contacts,
    (SELECT COUNT(*) FROM newsletter_subscribers WHERE status = 'active') as subscribers";
$stmt = $db->prepare($statsQuery);
$stmt->execute();
$stats = $stmt->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - ForeverBox Initiative</title>
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
                        <a href="/admin/index.php" class="text-blue-400 hover:text-blue-300">Dashboard</a>
                        <a href="/admin/pages/pages.php" class="text-gray-400 hover:text-gray-300">Pages</a>
                        <a href="/admin/pages/sections.php" class="text-gray-400 hover:text-gray-300">Sections</a>
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
        <!-- Stats Grid -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
            <div class="bg-gray-800 rounded-lg p-6">
                <div class="text-3xl font-bold text-blue-400 mb-2"><?php echo $stats['total_pages']; ?></div>
                <div class="text-gray-400 text-sm">Active Pages</div>
            </div>
            <div class="bg-gray-800 rounded-lg p-6">
                <div class="text-3xl font-bold text-green-400 mb-2"><?php echo $stats['total_sections']; ?></div>
                <div class="text-gray-400 text-sm">Content Sections</div>
            </div>
            <div class="bg-gray-800 rounded-lg p-6">
                <div class="text-3xl font-bold text-yellow-400 mb-2"><?php echo $stats['new_contacts']; ?></div>
                <div class="text-gray-400 text-sm">New Contacts</div>
            </div>
            <div class="bg-gray-800 rounded-lg p-6">
                <div class="text-3xl font-bold text-purple-400 mb-2"><?php echo $stats['subscribers']; ?></div>
                <div class="text-gray-400 text-sm">Newsletter Subscribers</div>
            </div>
        </div>
        
        <!-- Pages List -->
        <div class="bg-gray-800 rounded-lg p-6">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-2xl font-bold">Pages</h2>
                <a href="/admin/pages/edit-page.php" class="bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded-lg text-sm font-semibold">
                    + Add Page
                </a>
            </div>
            
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="border-b border-gray-700">
                            <th class="text-left py-3 px-4 font-semibold text-gray-400">Page</th>
                            <th class="text-left py-3 px-4 font-semibold text-gray-400">Slug</th>
                            <th class="text-left py-3 px-4 font-semibold text-gray-400">Color</th>
                            <th class="text-left py-3 px-4 font-semibold text-gray-400">Order</th>
                            <th class="text-right py-3 px-4 font-semibold text-gray-400">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($pages as $page): ?>
                            <tr class="border-b border-gray-700/50 hover:bg-gray-700/30">
                                <td class="py-3 px-4">
                                    <div class="font-semibold"><?php echo htmlspecialchars($page['title']); ?></div>
                                    <div class="text-sm text-gray-400"><?php echo htmlspecialchars($page['subtitle']); ?></div>
                                </td>
                                <td class="py-3 px-4 text-gray-400"><?php echo htmlspecialchars($page['slug']); ?></td>
                                <td class="py-3 px-4">
                                    <div class="flex items-center space-x-2">
                                        <div class="w-4 h-4 rounded" style="background-color: <?php echo $page['color_primary']; ?>"></div>
                                        <div class="w-4 h-4 rounded" style="background-color: <?php echo $page['color_secondary']; ?>"></div>
                                    </div>
                                </td>
                                <td class="py-3 px-4 text-gray-400"><?php echo $page['display_order']; ?></td>
                                <td class="py-3 px-4 text-right space-x-2">
                                    <a href="/pages/<?php echo $page['slug']; ?>.php" target="_blank" class="text-blue-400 hover:text-blue-300 text-sm">View</a>
                                    <a href="/admin/pages/edit-page.php?id=<?php echo $page['id']; ?>" class="text-green-400 hover:text-green-300 text-sm">Edit</a>
                                    <a href="/admin/pages/sections.php?page_id=<?php echo $page['id']; ?>" class="text-purple-400 hover:text-purple-300 text-sm">Sections</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        
        <!-- Quick Actions -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
            <a href="/admin/pages/sections.php" class="bg-gray-800 hover:bg-gray-700 rounded-lg p-6 transition">
                <h3 class="text-lg font-semibold mb-2">Manage Content</h3>
                <p class="text-gray-400 text-sm">Edit page sections and content blocks</p>
            </a>
            <a href="/admin/pages/contacts.php" class="bg-gray-800 hover:bg-gray-700 rounded-lg p-6 transition">
                <h3 class="text-lg font-semibold mb-2">Contact Submissions</h3>
                <p class="text-gray-400 text-sm">Review messages from visitors</p>
            </a>
            <a href="/" target="_blank" class="bg-gray-800 hover:bg-gray-700 rounded-lg p-6 transition">
                <h3 class="text-lg font-semibold mb-2">View Website</h3>
                <p class="text-gray-400 text-sm">See your changes live</p>
            </a>
        </div>
    </div>
</body>
</html>
