<?php


function loadLabels($langCode) {
    $labelsPath = "json/{$langCode}.json";

    if (file_exists($labelsPath)) {
        $json = file_get_contents($labelsPath);
        $labels = json_decode($json, true);

        return $labels;
    } else {
        // Fallback to default language (e.g., English)
        return [];
    }
}

// Use the language selected in the index page or default to English
$selectedLang = isset($_SESSION['lang']) ? $_SESSION['lang'] : 'en';

// Load labels for the selected language
$labels = loadLabels($selectedLang);
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

    

    <table border="1">
        <?php 
        // Ensure $labels is not empty before using it
        if (!empty($labels)):
            foreach ($labels as $labelKey => $labelValue): 
                if ($labelKey !== 'data'):
        ?>
            <tr>
                <th><?php echo $labelKey; ?></th>
                <td><?php echo $labelValue; ?></td>
            </tr>
        <?php 
                endif;
            endforeach;
        endif; 
        // Additional data from the "data" section
        if (!empty($labels['data'])):
        ?>
            <tr>
                <th colspan="2">Data</th>
            </tr>
            <?php foreach ($labels['data'] as $dataKey => $dataValue): ?>
                <tr>
                    <td><?php echo $dataKey; ?></td>
                    <td><?php echo $dataValue; ?></td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </table>

    <p>
        <a href="?lang=en">English</a> |
        <a href="?lang=ar">العربية</a>
    </p>

    <p><a href="index.php">Go back to Index Page</a></p>

</body>
</html>