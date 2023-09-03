<?php
$ctx_title = 'LOGIN TO DASHBOARD';
require_once 'src/inc_top_auth.php';
?>
<body class="bg-login">
	<!-- wrapper -->
	<div class="wrapper wrapper-sm">
        <div class="section-authentication-register d-flex align-items-center justify-content-center">
            <div class="row">
                                <div class="col-12 col-lg-12 mx-auto">
                    <div class="card radius-15">
                        <div class="row no-gutters">
                            <div class="col-lg-12">
                                <div class="card-body p-md-5">

                            <div class="col-lg-12 card-img ">
                                <img src="https://intcmovement.com/wp-content/uploads/2023/01/bingx.png" class="login-img h-100" alt="logo" />
                            </div>


                                    <div class="text-center">
                                        <h3 class="mt-4 font-weight-bold">Login to dashboard</h3>
                                    </div>

                                    <form <?php echo $ctx_form_attrib; ?>>
                                    <?php ctx_err($error, $errno);?>
                                        <div class="form-group mt-4">
                                            <label>Username</label>
                                            <input type="email" name="email" value="<?php echo $_POST['email']; ?>" placeholder="example@domain.com"
                                            class="form-control" required />
                                        </div>

                                        <div class="form-group mt-4">
                                            <label>Password</label>
                                            <div class="input-group col-lg-12" id="show_hide_password">
                                                <input class="form-control border-right-0" type="password"
                                                    name="password" value="<?php echo $_POST['password']; ?>" placeholder="**** ****"
                                                    ondblclick="togglePassword()" required />
                                            </div>
                                        </div>

                                        <div class="form-group mt-4" style="padding-top:15px;">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input"
                                                    id="customCheck1"> &nbsp;
                                                <label class="custom-control-label" for="customCheck1" style="font-weight:normal;">
                                                    Keep me signed in
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 btn-group mt-2">
                                            <button class="btn btn-primary btn-block">Login</button>
                                             <button class="btn btn-primary">
                                                <i class="lni lni-arrow-right"></i>
                                            </button>
                                        </div>

                                    </form>

                                    <div class="lnk-group">
                                    <div class="text-center mt-4">
                                        <p class="mb-0">Don't have an account? <a
                                                href="register.php">Register</a>
                                        </p>
                                    </div>

                                    <div class="text-center mt-4">
                                        <p class="mb-0"><a
                                                href="../index.php">Return to Website</a>
                                        </p>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end row-->
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- end wrapper -->

<?php include_once 'src/inc_end_auth.php';?>