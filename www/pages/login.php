<div class="h-100 container login-container">
    <div class="h-100 row">
        <div class="col-xs-1 col-sm-1 col-md-3 col-lg-3 col-xl-3">
        </div>
        <div class="col-xs-10 col-sm-10 col-md-6 col-lg-6 col-xl-6 login-form auto-margin align-self-center ">
            <h3>Introduce yourself</h3>
            <form>
                <div class="form-group">
                    <input type="text" class="form-control" name = "nickname" placeholder="Nickname" value="" />
                </div>
                <div class="form-group align-items-center">
                    <input type="submit" class="btnSubmit" name="tocloud" placeholder="Nickname" value="To the clouds">
                    <?php 
                        if (isset($_GET["tocloud"])) {
                            $_GET["tocloud"] = "mindcloud.php";
                            $name =  $_GET['nickname'];
                            header("Location: http://localhost/?page=mindcloud.php&nickname=$name");
                        }
                    ?>
                </div>
            </form>
            </d iv>
        </div>
        <div class="col-xs-1 col-sm-1 col-md-3 col-lg-3 col-xl-3">
        </div>
    </div>
</div>>