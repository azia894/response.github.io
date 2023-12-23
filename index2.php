<?php

function loadLanguage($langCode) {
    $filePath = "http://localhost/nfccard/json/{$langCode}.json";

    if (file_exists($filePath)) {
        $json = '';
        $file = fopen($filePath, 'r');

        while (!feof($file)) {
            $json .= fgets($file);
        }

        fclose($file);

        return json_decode($json, true);
    } else {
        // Fallback to default language (e.g., English)
        return loadLanguage('en');
    }
}
// Set default language or get user preference from session/cookie
$currentLangCode = isset($_GET['lang']) ? $_GET['lang'] : 'en';

// Load language file
$language = loadLanguage($currentLangCode);

// Display JSON content
echo '<pre>';
print_r($language);
echo '</pre>';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Language Demo</title>
</head>
<body>

    <h1><?php echo $language['greeting']; ?></h1>
    <p><?php echo $language['farewell']; ?></p>

    <p>
        <a href="?lang=en">English</a> |
        <a href="?lang=fr">Français</a>
    </p>

</body>
</html>
