<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Nexi Bot Documentation'; ?></title>
    <meta name="description" content="<?php echo isset($pageDescription) ? $pageDescription : 'Comprehensive documentation for Nexi Bot - Discord\'s most advanced moderation and community management bot.'; ?>">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/NEXI_15.ico">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/NEXI_15.ico">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Meta tags -->
    <meta property="og:title" content="<?php echo isset($pageTitle) ? $pageTitle : 'Nexi Bot Documentation'; ?>">
    <meta property="og:description" content="<?php echo isset($pageDescription) ? $pageDescription : 'Comprehensive documentation for Nexi Bot'; ?>">
    <meta property="og:image" content="assets/images/nexilogo.png">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
</head>
<body>
    <div class="premium-preorder-banner">
        <strong>Limited Time Pre-Order:</strong> Premium from £2.99/month (Regular price £4.99 after launch) - <a href="https://nexibot.uk/features" target="_blank">Save 40% Now</a>
    </div>
    
    <nav class="navbar">
        <div class="container">
            <div class="navbar-brand">
                <a href="home">
                    <img src="assets/images/nexilogo.png" alt="Nexi Bot" class="navbar-logo">
                </a>
            </div>
            
            <div class="navbar-menu" id="navbar-menu">
                <div class="navbar-nav">
                    <a href="home" class="nav-link">Home</a>
                    <a href="setup" class="nav-link">Setup</a>
                    <a href="features" class="nav-link">Features</a>
                    <a href="commands" class="nav-link">Commands</a>
                    <div class="nav-dropdown">
                        <a href="support" class="nav-link">More</a>
                        <div class="dropdown-content">
                            <a href="error-codes">Error Codes</a>
                            <a href="troubleshooting">Troubleshooting</a>
                            <a href="support">Support</a>
                            <a href="changelog">Changelog</a>
                        </div>
                    </div>
                    <a href="premium" class="nav-link premium-link">Premium</a>
                </div>
                
                <div class="navbar-actions">
                    <a href="https://nexibot.uk" class="btn btn-primary" target="_blank">Main Site</a>
                </div>
            </div>
            
            <button class="navbar-toggle" id="navbar-toggle">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </nav>

    <main class="main-content"><?php
        // Initialize page tracking for breadcrumbs
        $currentPage = basename($_SERVER['PHP_SELF'], '.php');
        if ($currentPage !== 'home' && $currentPage !== 'index') {
            echo '<div class="breadcrumb">
                    <div class="container">
                        <a href="home">Home</a>
                        <span class="breadcrumb-separator">→</span>
                        <span class="breadcrumb-current">' . ucfirst(str_replace('-', ' ', $currentPage)) . '</span>
                    </div>
                  </div>';
        }
    ?>
