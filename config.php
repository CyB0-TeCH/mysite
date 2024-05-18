<?php

$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME); 

echo "Welcome to " . SITE_NAME;

// Database Configuration
define('DB_HOST', 'localhost');         // Usually 'localhost' for local development
define('DB_NAME', 'strong-hold/images'); // Replace with your database name
define('DB_USER', 'your_username');     // Replace with your database username
define('DB_PASSWORD', 'your_password'); // Replace with your database password

// Website Configuration
define('SITE_NAME', 'Bongaurd');
define('SITE_url', 'https://bongaurd.net'); // Replace with your website's URL
define('COPYRIGHT_START_YEAR', 2023);       // The year your website was launched

// Additional Settings (Optional)
define('DEBUG_MODE', true);                   // Set to false in production
define('DEFAULT_PAGE_SIZE', 10);            // For pagination
define('EMAIL_FROM', 'bongaurd@bongaurd.net');  // Default "from" email address
define('ADMIN_EMAIL', 'bongaurd@bongaurd.net'); // Email for error reports, etc.

// API Keys (Optional)
define('GOOGLE_MAPS_API_KEY', 'your_google_maps_api_key'); 
// ... other API keys as needed

// Theme/Styling Options (Optional)
define('PRIMARY_COLOR', '#007bff');         // Bootstrap blue by default
define('SECONDARY_COLOR', '#6c757d');      // Bootstrap gray by default

// ... (Add other settings as needed for your specific website)

?>

