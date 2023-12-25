<?php include("header.php");?>

                    <a href="http://localhost/nfccard/editpage.php" type="button" class="btn btn-primary" style="float: right;">Edit Profile</a>
                    <div class="rounded bg-white shadow p-5" >
                        <h3 class="text-dark fw-bolder fs-4 mb-2">NFC Card Form</h3>
                        <br/>
                      <?php  
                      if (isset($data['data'])):
                      foreach ($data['data'] as $key => $value): 
                      ?>
                        <div class="mb-3">
                            <label><b><?php echo getLabel('label1', $selectedLang); ?> : </b></label>
                             <span>Sultan</span>
                           
                        </div>
                        <?php endforeach;
                               endif; ?>
                        <div class="mb-3">
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
                           
                            
                        </div>
                        
                       
                         
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>