<?php
session_start();

function loadLabels($langCode) {
    $filePath = "json/{$langCode}.json";

    if (file_exists($filePath)) {
        $json = file_get_contents($filePath);
        $labels = json_decode($json, true);

        // Check if data key is present
        if (isset($labels[$langCode]['data'])) {
            return $labels[$langCode];
        } else {
            // Fallback to default language (e.g., English)
            return loadLabels('ar');
        }
    } else {
        // Fallback to default language (e.g., English)
        return loadLabels('ar');
    }
}

function getLabel($labelKey, $langCode) {
    $labels = loadLabels($langCode);
    return isset($labels[$labelKey]) ? $labels[$labelKey] : $labelKey;
}

// Handle language selection
if (isset($_GET['lang'])) {
    $selectedLang = $_GET['lang'];
    $_SESSION['lang'] = $selectedLang;
} else {
    // If language is not set, use the default or the one stored in the session
    $selectedLang = isset($_SESSION['lang']) ? $_SESSION['lang'] : 'ar';
}
?>