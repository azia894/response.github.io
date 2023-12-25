<?php
session_start();

function loadLabels($langCode) {
    $filePath = "json/labels.json";

    if (file_exists($filePath)) {
        $json = file_get_contents($filePath);
        $data = json_decode($json, true);

        return isset($data[$langCode]) ? $data[$langCode] : $data['en'];
    } else {
        // Fallback to default language (e.g., English)
        return loadLabels('en');
    }
}

function getLabel($labelKey, $langCode) {
    $labels = loadLabels($langCode);
    return isset($labels[$labelKey]) ? $labels[$labelKey] : $labelKey;
}

// Use the language selected in the index page or default to English
$selectedLang = isset($_SESSION['lang']) ? $_SESSION['lang'] : 'en';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Profile</title>
</head>
<body>

    <h1><?php echo getLabel('label9', $selectedLang); ?></h1>

    <table border="1">
        <?php 
        // Ensure $data is defined before using it
        if (isset($data['data'])):
            foreach ($data['data'] as $key => $value): 
        ?>
            <tr>
                <th><?php echo getLabel('label' . ($key + 1), $selectedLang); ?></th>
                <td><?php echo $value; ?></td>
            </tr>
        <?php endforeach;
        endif; ?>
    </table>

    <p>
        <a href="?lang=en">English</a> |
        <a href="?lang=fr">Français</a>
    </p>

    <p><a href="index.php">Go back to Index Page</a></p>

</body>
</html>
