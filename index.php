<?php
/**
 * Root Index Redirect
 * This file serves as the entry point for your website on hosts like Railway or InfinityFree.
 */

// Define the destination for your homepage
$homepage = 'pages/home.php';

// Check if the file exists before redirecting (optional but good practice)
if (file_exists($homepage)) {
    header("Location: $homepage");
    exit();
} else {
    // Fallback if the file is missing
    echo "Welcome to DoubleU. Please visit the <a href='pages/home.php'>Homepage</a>.";
}
?>
