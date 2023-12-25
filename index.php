<?php include("header.php");?>
<a href="http://localhost/nfccard/viewpage.php" type="button" class="btn btn-primary" style="float: right;"><?php echo getLabel('label9', $selectedLang); ?></a>
                    <form class="rounded bg-white shadow p-5" >
                      
                        <h3 class="text-dark fw-bolder fs-4 mb-2">NFC Card Form</h3>
                        <br/>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingfirst" placeholder="<?php echo getLabel('label1', $selectedLang); ?>">
                        <label for="floatingfirst"><?php echo getLabel('label1', $selectedLang); ?></label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingdesignation" placeholder="<?php echo getLabel('label2', $selectedLang); ?>">
                            <label for="floatingdesignation"><?php echo getLabel('label2', $selectedLang); ?></label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="company" placeholder="<?php echo getLabel('label3', $selectedLang); ?>">
                            <label for="floatingcompany"><?php echo getLabel('label3', $selectedLang); ?></label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="numbers" class="form-control" id="floatingphone" placeholder="<?php echo getLabel('label4', $selectedLang); ?>">
                            <label for="floatingphone"><?php echo getLabel('label4', $selectedLang); ?></label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floating" placeholder="<?php echo getLabel('label5', $selectedLang); ?>">
                            <label for="floatingemail"><?php echo getLabel('label5', $selectedLang); ?></label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floating" placeholder="<?php echo getLabel('label6', $selectedLang); ?>">
                            <label for="floatinglinked"><?php echo getLabel('label6', $selectedLang); ?></label>
                        </div>
                       
                        <div class="form-floating mb-3">
                            <input type="numbers" class="form-control" id="floatingweb" placeholder="<?php echo getLabel('label7', $selectedLang); ?>"></label>
                            <label for="floatingweb"><?php echo getLabel('label7', $selectedLang); ?></label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="numbers" class="form-control" id="floatingtwitter" placeholder="<?php echo getLabel('label8', $selectedLang); ?>">
                            <label for="floatingtwitter"><?php echo getLabel('label8', $selectedLang); ?></label>
                        </div>
                        
                          
                          <button type="submit" class="btn btn-primary submit_btn w-100 my-4"><?php echo getLabel('submit', $selectedLang); ?></button>
                         
                    </form>
                </div>
            </div>
        </section>
    </body>
</html>