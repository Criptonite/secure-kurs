<div class="container login-container">
    <div class="row">
        <div class="col-xs-1 col-sm-1 col-md-2 col-lg-2 col-xl-2">
        </div>
        <div class="col-xs-10 col-sm-10 col-md-8 col-lg-8 col-xl-8 login-form">
            <h3>Hello <?php
                        if (isset($_GET['nickname']) && strcmp($_GET['nickname'], "") !== 0) {
                            $nickname = $_GET['nickname'];
                        } else {
                            $nickname = 'noname';
                        }
                        echo "$nickname"
                        ?>
                share your minds with us.
            </h3>

            <div class="input-group input-group-lg">
                <div class="input-group-prepend hoverable">
                    <span class="input-group-text " id="inputGroup-sizing-lg" onclick="on_share()">Share</span>
                </div>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" id="mind-field">
            </div>
        </div>
        <div class="col-xs-1 col-sm-1 col-md-2 col-lg-2 col-xl-2">
        </div>
    </div>
</div>
<br/>
<div class="container login-container list">
    <ul class="list-group" id="expandable-list">
    </ul>
</div>