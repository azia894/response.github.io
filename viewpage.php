<?php include("header.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Profile</title>
</head>
<body>

    <?php
    // Handle language selection
    if (isset($_GET['lang'])) {
        $selectedLang = $_GET['lang'];
        $_SESSION['lang'] = $selectedLang;
    } else {
        // If language is not set, use the default or the one stored in the session
        $selectedLang = isset($_SESSION['lang']) ? $_SESSION['lang'] : 'ar';
    }

    // Load labels for the selected language
    $labels = loadLabels($selectedLang);
    ?>

   

    <a href="http://localhost/nfccard/editpage.php" type="button" class="btn btn-primary" style="float: right;">Edit Profile</a>
                    <div class="rounded bg-white shadow p-5" >
                        <h3 class="text-dark fw-bolder fs-4 mb-2">NFC Card Form</h3>
                        <br/>
                      <?php  
                      if (!empty($labels['data'])):
                     
                      ?>
                      <tr>
                
            </tr>
            <?php foreach ($labels['data'] as $dataKey => $dataValue): ?>
                        <div class="mb-3">
                            <label><b><?php echo ucfirst($dataKey); ?> : </b></label>
                             <span><?php echo $dataValue; ?></span>
                           
                        </div>
                        <?php endforeach; ?>
                      <?php endif; ?>
                  <!--      <div class="mb-3">
                            <label"><b><?php echo getLabel('label2', $selectedLang); ?> : </b></label>
                               <span>Software Engineer</span>
                            
                        </div>
                        <div class="mb-3">
                            <label><b><?php echo getLabel('label3', $selectedLang); ?> : </b></label>
                           <span>xyz company</span>
                           
                        </div>
                        <div class="mb-3">
                            <label><b><?php echo getLabel('label4', $selectedLang); ?> : </b></label>
                            <span>1234567896</span>
                        </div>

                        <div class="mb-3">
                            <label><b><?php echo getLabel('label5', $selectedLang); ?> : </b></label>
                           <span>xyz@gmail.com</span>
                            
                        </div>
                        <div class="mb-3">
                            <label><b><?php echo getLabel('label6', $selectedLang); ?> :</b></label>
                          <span>https://www.linkedin.com/in</span>
                           
                        </div>
                        
                        <div class="mb-3">
                            <label><b><?php echo getLabel('label7', $selectedLang); ?> : </b></label>
                          <span>www.xyz.com</span>
                           
                        </div>
                        <div class="mb-3">
                            <label for="floatingtwitter"><b><?php echo getLabel('label8', $selectedLang); ?> : </b></label>
                            <span>https://twitter.com/</span>
                           
                            
                        </div>-->
                        
                       
                         
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>