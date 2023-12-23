<?php

function loadLabels($langCode) {
    $filePath = "json/label.json";

    if (file_exists($filePath)) {
        $json = file_get_contents($filePath);
        $labels = json_decode($json, true);

        return isset($labels[$langCode]) ? $labels[$langCode] : $labels['en'];
    } else {
        // Fallback to default language (e.g., English)
        return loadLabels('en');
    }
}

// Set default language or get user preference from session/cookie
$currentLangCode = isset($_GET['lang']) ? $_GET['lang'] : 'en';

// Load labels
$labels = loadLabels($currentLangCode);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Example</title>
</head>
<body>

    <form action="process_form.php" method="post">
        <label for="name"><?php echo $labels['label1']; ?>:</label>
        <input type="text" id="name" name="name"><br>

        <label for="email"><?php echo $labels['label2']; ?>:</label>
        <input type="email" id="email" name="email"><br>

        <input type="submit" value="<?php echo $labels['submit']; ?>">
    </form>

    <p>
        <a href="?lang=en">English</a> |
        <a href="?lang=fr">Français</a>
    </p>

</body>
</html>
