<?php
// Simple directory listing to see what files are present
echo "<h1>Directory Contents</h1>";
echo "<p>Current directory: " . getcwd() . "</p>";
echo "<p>Files in current directory:</p>";
echo "<ul>";
$files = scandir('.');
foreach($files as $file) {
    if($file != '.' && $file != '..') {
        echo "<li>" . $file . " (" . (is_dir($file) ? "directory" : "file") . ")</li>";
    }
}
echo "</ul>";

echo "<h2>Server Info</h2>";
echo "<p>Server: " . $_SERVER['SERVER_SOFTWARE'] . "</p>";
echo "<p>PHP Version: " . phpversion() . "</p>";
echo "<p>Document Root: " . $_SERVER['DOCUMENT_ROOT'] . "</p>";
?>
