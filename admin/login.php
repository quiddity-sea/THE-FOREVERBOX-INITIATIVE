<?php
/**
 * Admin Login Page
 */

require_once __DIR__ . '/includes/auth.php';

// Redirect if already logged in
if (isLoggedIn()) {
    header('Location: /admin/index.php');
    exit();
}

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    
    if (login($username, $password)) {
        header('Location: /admin/index.php');
        exit();
    } else {
        $error = 'Invalid username or password';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - ForeverBox Initiative</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-900 text-white min-h-screen flex items-center justify-center">
    <div class="max-w-md w-full mx-auto p-8">
        <div class="bg-gray-800 rounded-lg shadow-xl p-8">
            <h1 class="text-3xl font-bold mb-2 text-center">ForeverBox Admin</h1>
            <p class="text-gray-400 text-center mb-8">Content Management System</p>
            
            <?php if ($error): ?>
                <div class="bg-red-900/50 border border-red-700 text-red-200 px-4 py-3 rounded mb-6">
                    <?php echo htmlspecialchars($error); ?>
                </div>
            <?php endif; ?>
            
            <form method="POST" action="">
                <div class="mb-6">
                    <label for="username" class="block text-sm font-medium mb-2">Username</label>
                    <input 
                        type="text" 
                        id="username" 
                        name="username" 
                        required
                        class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-white"
                        autofocus
                    >
                </div>
                
                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium mb-2">Password</label>
                    <input 
                        type="password" 
                        id="password" 
                        name="password" 
                        required
                        class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-white"
                    >
                </div>
                
                <button 
                    type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-4 rounded-lg transition duration-200"
                >
                    Login
                </button>
            </form>
            
            <div class="mt-6 text-center text-sm text-gray-400">
                <p>Default credentials: admin / admin123</p>
            </div>
        </div>
        
        <div class="mt-6 text-center text-sm text-gray-500">
            <a href="/" class="hover:text-gray-300">← Back to Website</a>
        </div>
    </div>
</body>
</html>
