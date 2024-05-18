<?php
include 'config.php';

$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME); 

echo "Welcome to " . SITE_NAME;

function generateCopyrightNotice() {
    $startYear = 2023; // The year your website was launched
    $currentYear = date("Y");

    if ($startYear == $currentYear) {
        return "&copy; $currentYear My Website. All rights reserved.";
    } else {
        return "&copy; $startYear - $currentYear My Website. All rights reserved.";
    }
}

// Function to display the main menu
function displayMainMenu() {
    echo '<nav id="main-menu">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>';
}

// Function to display the slider (placeholder - implement your actual slider logic)
function displaySlider() {
    echo '';
}

?>
