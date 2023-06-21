<?php
include "assest\includes\head.php"
?>

<body>
    <?php
    include ("assest\includes\header.php")
    ?>
    
    <div>

        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Inserting New Products</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form class="form-valide-with-icon needs-validation" novalidate="">
                            <div class="mb-3">
                                <label class="text-label form-label" for="validationCustomUsername">Username</label>
                                <div class="input-group">
                                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                    <input type="text" class="form-control" id="validationCustomUsername" placeholder="Enter a username.." required="">
                                    <div class="invalid-feedback">
                                        Please Enter a username.
                                      </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="text-label form-label" for="dlab-password">Password *</label>
                                <div class="input-group transparent-append">
                                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                    <input type="password" class="form-control" id="dlab-password" placeholder="Choose a safe one.." required="">
                                    <span class="input-group-text show-pass"> 
                                        <i class="fa fa-eye-slash"></i>
                                        <i class="fa fa-eye"></i>
                                    </span>
                                    <div class="invalid-feedback">
                                        Please Enter a username.
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required="">
                                  <label class="form-check-label" for="invalidCheck2">
                                    Check Me out
                                  </label>
                                </div>
                            </div>
                            <button type="submit" class="btn me-2 btn-primary">Submit</button>
                            <button type="submit" class="btn btn-light">cencel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>







    <?php
    include ("assest\includes\footer.php")
    ?>
</body>
</html>