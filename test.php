<?php
// Simple PHP test file
echo "PHP is working! ";
echo "Current time: " . date('Y-m-d H:i:s');
echo "<br><br>";
echo "<a href='home.php'>Go to Home Page</a>";
echo "<br>";
echo "<a href='index.php'>Go to Index</a>";

// Check if files exist
echo "<br><br><strong>File Check:</strong><br>";
$files = ['home.php', 'index.php', 'changelog.php', 'support.php'];
foreach ($files as $file) {
    $exists = file_exists($file) ? 'EXISTS' : 'MISSING';
    echo "$file: $exists<br>";
}
?>
