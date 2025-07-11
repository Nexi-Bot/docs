<?php
echo "<h1>Diagnostic Information</h1>";
echo "<h2>Server Info:</h2>";
echo "PHP Version: " . phpversion() . "<br>";
echo "Server Software: " . $_SERVER['SERVER_SOFTWARE'] . "<br>";
echo "Document Root: " . $_SERVER['DOCUMENT_ROOT'] . "<br>";
echo "Current Directory: " . __DIR__ . "<br>";
echo "Request URI: " . $_SERVER['REQUEST_URI'] . "<br>";

echo "<h2>File System Check:</h2>";
$files = [
    'index.php',
    'index.html', 
    'home.php',
    'changelog.php',
    'support.php',
    'includes/header.php',
    'includes/footer.php',
    'assets/css/style.css',
    'assets/js/main.js'
];

foreach ($files as $file) {
    $fullPath = __DIR__ . '/' . $file;
    $exists = file_exists($fullPath) ? '✅ EXISTS' : '❌ MISSING';
    $readable = is_readable($fullPath) ? '(readable)' : '(not readable)';
    echo "$file: $exists $readable<br>";
}

echo "<h2>Directory Contents:</h2>";
echo "<strong>Root directory:</strong><br>";
if ($handle = opendir(__DIR__)) {
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {
            echo "$entry<br>";
        }
    }
    closedir($handle);
}

echo "<h2>Test Links:</h2>";
echo '<a href="index">Test index.php</a><br>';
echo '<a href="index.html">Test index.html</a><br>';
echo '<a href="home">Test home.php</a><br>';
echo '<a href="test">Test test.php</a><br>';
?>
