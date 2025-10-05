<?php
/**
 * Admin Authentication Handler
 */

session_start();

function isLoggedIn() {
    return isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true;
}

function requireLogin() {
    if (!isLoggedIn()) {
        header('Location: /admin/login.php');
        exit();
    }
}

function login($username, $password) {
    require_once __DIR__ . '/../../config/database.php';
    
    $database = new Database();
    $db = $database->getConnection();
    
    if (!$db) {
        return false;
    }
    
    $query = "SELECT * FROM admin_users WHERE username = :username AND is_active = 1 LIMIT 1";
    $stmt = $db->prepare($query);
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    
    $user = $stmt->fetch();
    
    if ($user && password_verify($password, $user['password_hash'])) {
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['admin_id'] = $user['id'];
        $_SESSION['admin_username'] = $user['username'];
        $_SESSION['admin_role'] = $user['role'];
        
        // Update last login
        $updateQuery = "UPDATE admin_users SET last_login = NOW() WHERE id = :id";
        $updateStmt = $db->prepare($updateQuery);
        $updateStmt->bindParam(':id', $user['id']);
        $updateStmt->execute();
        
        return true;
    }
    
    return false;
}

function logout() {
    session_destroy();
    header('Location: /admin/login.php');
    exit();
}

function getAdminName() {
    return $_SESSION['admin_username'] ?? 'Admin';
}

function getAdminRole() {
    return $_SESSION['admin_role'] ?? 'editor';
}
