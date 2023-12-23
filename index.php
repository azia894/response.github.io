<?php

function loadLabels($langCode) {
    $filePath = "json/label.json";

    if (file_exists($filePath)) {
        $json = file_get_contents($filePath);
        $labels = json_decode($json, true);

        return isset($labels[$langCode]) ? $labels[$langCode] : $labels['ar'];
    } else {
        // Fallback to default language (e.g., English)
        return loadLabels('ar');
    }
}

// Set default language or get user preference from session/cookie
$currentLangCode = isset($_GET['lang']) ? $_GET['lang'] : 'ar';

// Load labels
$labels = loadLabels($currentLangCode);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>NFC CARD</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <section class="wrapper">
            <div class="container">
                <div class="col-sm-8 offset-sm-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4 text-center">
                  
                    <div class="logo">
                        <img src="images/logo.png" class="img-fluid" alt="logo">
                    </div>
                    <p>
        <a href="?lang=en">English</a> |
        <a href="?lang=ar">Arabic</a>
    </p>
                    <a href="http://localhost/nfccard/viewpage.html" type="button" class="btn btn-primary" style="float: right;"><?php echo $labels['label9']; ?></a>
                    <form class="rounded bg-white shadow p-5" >
                      
                        <h3 class="text-dark fw-bolder fs-4 mb-2">NFC Card Form</h3>
                        <br/>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingfirst" placeholder="<?php echo $labels['label1']; ?>">
                            <label for="floatingfirst"><?php echo $labels['label1']; ?></label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingdesignation" placeholder="<?php echo $labels['label2']; ?>">
                            <label for="floatingdesignation"><?php echo $labels['label2']; ?></label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="company" placeholder="<?php echo $labels['label3']; ?>">
                            <label for="floatingcompany"><?php echo $labels['label3']; ?></label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="numbers" class="form-control" id="floatingphone" placeholder="<?php echo $labels['label4']; ?>">
                            <label for="floatingphone"><?php echo $labels['label4']; ?></label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floating" placeholder="<?php echo $labels['label5']; ?>">
                            <label for="floatingemail"><?php echo $labels['label5']; ?></label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floating" placeholder="<?php echo $labels['label6']; ?>">
                            <label for="floatinglinked"><?php echo $labels['label6']; ?></label>
                        </div>
                       
                        <div class="form-floating mb-3">
                            <input type="numbers" class="form-control" id="floatingweb" placeholder="<label for="floatinglinked"><?php echo $labels['label7']; ?></label>">
                            <label for="floatingweb"><?php echo $labels['label7']; ?></label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="numbers" class="form-control" id="floatingtwitter" placeholder="<?php echo $labels['label8']; ?>">
                            <label for="floatingtwitter"><?php echo $labels['label8']; ?></label>
                        </div>
                        
                          
                          <button type="submit" class="btn btn-primary submit_btn w-100 my-4"><?php echo $labels['submit']; ?></button>
                         
                    </form>
                </div>
            </div>
        </section>
    </body>
</html>