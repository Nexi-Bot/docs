<?php
// Main entry point for Nexi Bot Documentation
// Check if home.php exists and redirect
if (file_exists(__DIR__ . '/home.php')) {
    header('Location: home.php');
    exit;
} else {
    // Fallback if home.php doesn't exist
    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nexi Bot Documentation</title>
        <style>
            body { 
                font-family: Arial, sans-serif; 
                text-align: center; 
                margin-top: 50px; 
                background: #000; 
                color: #fff; 
            }
            .container { 
                max-width: 600px; 
                margin: 0 auto; 
                padding: 20px; 
            }
            a { 
                color: #e64d1e; 
                text-decoration: none; 
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Nexi Bot Documentation</h1>
            <p>Welcome to the Nexi Bot documentation site.</p>
            <p><a href="home">Go to Home Page</a></p>
            <p><a href="changelog">View Changelog</a></p>
            <p><a href="support">Get Support</a></p>
        </div>
    </body>
    </html>';
}
?>
