<?php
$results = file_get_contents('https://midaval.dast.ovh/api/lecturers');
// Decode the JSON data
$lecturers = json_decode($results, true);

$searchTerm = htmlspecialchars($_GET['q']); // Use htmlspecialchars to prevent XSS attacks

echo "<h1>Hledá se: $searchTerm</h1>";

// Function to highlight the search term
function highlightSearchTerm($text, $searchTerm) {
    return str_ireplace($searchTerm, '<strong>' . $searchTerm . '</strong>', $text);
}

// Loop through each lecturer and create a compact display
foreach ($lecturers as $lecturer) {
    // Combine relevant fields for display
    $displayName = $lecturer['first_name'] . ' ' . $lecturer['middle_name'] . ' ' . $lecturer['last_name'];
    $bio = $lecturer['bio'];

    // Combine all display information into one string for searching
    $displayInfo = "$displayName $location $claim $bio";

    // Check if the search term is found in the display information
    if (stripos($displayInfo, $searchTerm) !== false) {
        echo '<div class="lecturer">';
        echo '<p>' . highlightSearchTerm($displayName, $searchTerm) . '</p>';
        echo '</div>';
    }
}
?>
