

    <main>
        <!-- Section -->
        <section class="d-flex align-items-center my-5 mt-lg-6 mb-lg-5">
            <div class="container">
                <div class="row justify-content-center form-bg-image" data-background-lg="/app/view/assets/img/illustrations/signin.svg">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="bg-white shadow-soft border rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                        <div class="text-center text-md-center mb-4 mt-md-0">
                                <h1 class="mb-0 h3">
                                    <a target="_blank"
                                       href="#">Go App</a> - Sign IN
                                </h1>
                                <br />
                                <p>
                                  <?php 
                                    echo (!empty($msg))?$msg:false;
                                  ?>
                                </p> 
                            </div>
                            <!-- <form action="#" class="mt-4"> -->
                            <?php HtmlHelper::formOpen('post',_WEB_ROOT.'/home/post_user','mt-4')?>

                                <!-- Form -->
                                <div class="form-group mb-4">
                                    <label for="email">Your Email</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1"><span class="fas fa-envelope"></span></span>
                                        <!-- <input type="email" class="form-control" placeholder="example@company.com" id="email" autofocus required> -->
                                        <?php HtmlHelper::input('email','form-control','email','example@company.com')?>
                                    </div>  
                                </div>
                                <!-- End of Form -->
                                <div class="form-group">
                                    <!-- Form -->
                                    <div class="form-group mb-4">
                                        <label for="password">Your Password</label>
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon2"><span class="fas fa-unlock-alt"></span></span>
                                            <?php HtmlHelper::input('password','form-control','password','Password')?>

                                        </div>  
                                    </div>
                                    <!-- End of Form -->
                                    <div class="d-flex justify-content-between align-items-top mb-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="remember">
                                            <label class="form-check-label mb-0" for="remember">
                                              Remember me
                                            </label>
                                        </div>
                                        <div><a href="./forgot-password.html" class="small text-right">Lost password?</a></div>
                                    </div>
                                </div>
                                <div class="d-grid">
                                    <?php HtmlHelper::submit('Sign in','btn btn-dark');?>
                                </div>
                            <!-- </form> -->
                            <?php 
HtmlHelper::formClose();
                            
                            ?>
                            <div class="d-flex justify-content-center align-items-center mt-4">
                                <span class="fw-normal">
                                    Not registered?
                                    <a href="/sign-up.html" class="fw-bold">Create account</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
