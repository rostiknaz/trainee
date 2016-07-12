<div class="container">
    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info" >
            <div class="panel-heading">
                <div class="panel-title">Sign In</div>
            </div>
            <div style="padding-top:30px" class="panel-body" >
                <?php if(isset($data['errors']) && !empty($data['errors'])) {
                    foreach ($data['errors'] as $error) { ?>
                        <div id="login-alert" class="alert alert-danger col-sm-12"><?=$error?></div>
                    <?php } ?>
                <?php } ?>


                <form id="loginform" action="login" class="form-horizontal" role="form" method="post">

                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="login-username" type="text" class="form-control" name="email" value="" placeholder="email">
                    </div>

                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                    </div>
                    <div style="margin-top:10px" class="form-group">
                        <!-- Button -->

                        <div class="col-sm-12 controls">
                            <button type="submit" id="btn-login" class="btn btn-success">Login  </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>