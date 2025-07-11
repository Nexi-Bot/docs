<?php
// Simple router for PHP built-in server (localhost development)
$request = $_SERVER['REQUEST_URI'];
$path = parse_url($request, PHP_URL_PATH);

// Serve static files directly
if (preg_match('/\.(css|js|png|jpg|jpeg|gif|svg|ico|woff|woff2|ttf|eot)$/', $path)) {
    $file = __DIR__ . $path;
    if (file_exists($file)) {
        // Set appropriate content type
        $ext = pathinfo($path, PATHINFO_EXTENSION);
        $mimeTypes = [
            'css' => 'text/css',
            'js' => 'application/javascript',
            'png' => 'image/png',
            'jpg' => 'image/jpeg',
            'jpeg' => 'image/jpeg',
            'gif' => 'image/gif',
            'svg' => 'image/svg+xml',
            'ico' => 'image/x-icon',
            'woff' => 'font/woff',
            'woff2' => 'font/woff2',
            'ttf' => 'font/ttf',
            'eot' => 'application/vnd.ms-fontobject'
        ];
        
        if (isset($mimeTypes[$ext])) {
            header('Content-Type: ' . $mimeTypes[$ext]);
        }
        
        readfile($file);
        exit;
    } else {
        header("HTTP/1.0 404 Not Found");
        exit;
    }
}

// Remove leading slash and get the page name
$page = ltrim($path, '/');

// If no page specified or root, redirect to home
if (empty($page) || $page === '/') {
    $page = 'home';
}

// Check if the page file exists
$file = __DIR__ . '/' . $page . '.php';

if (file_exists($file)) {
    include $file;
} else {
    // Show 404 page or redirect to home
    header("HTTP/1.0 404 Not Found");
    echo "<!DOCTYPE html>
    <html>
    <head>
        <title>Page Not Found - Nexi Bot Documentation</title>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link rel='stylesheet' href='/assets/css/style.css'>
    </head>
    <body style='background: var(--background-color); color: var(--text-primary); font-family: var(--font-family); display: flex; align-items: center; justify-content: center; min-height: 100vh; margin: 0;'>
        <div style='text-align: center; max-width: 500px; padding: 2rem;'>
            <h1 style='font-size: 3rem; margin-bottom: 1rem; color: var(--primary-color);'>404</h1>
            <h2 style='margin-bottom: 1rem;'>Page Not Found</h2>
            <p style='margin-bottom: 2rem; color: var(--text-secondary);'>The page you're looking for doesn't exist.</p>
            <a href='/home' style='background: var(--primary-color); color: white; padding: 0.75rem 1.5rem; border-radius: 8px; text-decoration: none; display: inline-block;'>Go to Homepage</a>
        </div>
    </body>
    </html>";
}
?>
