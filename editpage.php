<?php include("header.php");?>
                    
                    <form class="rounded bg-white shadow p-5" >
                        <h3 class="text-dark fw-bolder fs-4 mb-2">NFC Card Form</h3>
                        <br/>
                        
                        <div class="mb-3">
                            <label style="float: left;"><?php echo getLabel('label1', $selectedLang); ?> :</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Sultan">
                          </div>
                        <div class="mb-3">
                            <label style="float: left;"><?php echo getLabel('label2', $selectedLang); ?> :</label>
                            <input type="text" class="form-control" id="floatingdesignation" placeholder="Software Engineer">
                            
                        </div>
                        <div class="mb-3">
                            <label style="float: left;"><?php echo getLabel('label3', $selectedLang); ?>: </label>
                            <input type="text" class="form-control" id="company" placeholder="xyz company">
                           
                        </div>
                        <div class="mb-3">
                            <label style="float: left;"><?php echo getLabel('label4', $selectedLang); ?> : </label>
                            <input type="numbers" class="form-control" id="floatingphone" placeholder="1234567896">
                            
                        </div>

                        <div class="mb-3">
                            <label style="float: left;"><?php echo getLabel('label5', $selectedLang); ?> : </label>
                            <input type="email" class="form-control" id="floating" placeholder="xyz@gmail.com">
                            
                        </div>
                        <div class="mb-3">
                            <label style="float: left;"><?php echo getLabel('label6', $selectedLang); ?> : </label>
                            <input type="email" class="form-control" id="floatinglinked" placeholder="https://www.linkedin.com/in">
                            
                        </div>
                        
                        <div class="mb-3">
                            <label style="float: left;"><?php echo getLabel('label7', $selectedLang); ?> :</label>
                            <input type="numbers" class="form-control" id="floatingweb" placeholder="www.xyz.com">
                            
                        </div>
                           <div class="mb-3">
                            <label  style="float: left;"><?php echo getLabel('label8', $selectedLang); ?> : </label>
                            <input type="numbers" class="form-control" id="floatingtwitter" placeholder="https://twitter.com/">
                            
                        </div>
                        
                          
                          <button type="submit" class="btn btn-primary submit_btn w-100 my-4"><?php echo getLabel('submit', $selectedLang); ?></button>
                         
                    </form>
                </div>
            </div>
        </section>
    </body>
</html>