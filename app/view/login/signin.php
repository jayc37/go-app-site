

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
                                @if(!empty($msg))
                                <p class="text-danger">
                                    {{$msg}}
                                </p> 
                                @endif

                                @if(!empty($success))
                                <p class="text-success">
                                    {{$success}}
                                </p> 
                                @endif

                            </div>
                            <!-- <form action="#" class="mt-4"> -->
                            <?php HtmlHelper::formOpen('post',_WEB_ROOT.'/user/get_user','mt-4');?>

                                <!-- Form -->
                                <div class="form-group mb-4">
                                    <label for="text">User login</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon3"><span class="fas fa-user-shield"></span></span>
                                        @if(!empty($old['user_login']))
                                        <?php HtmlHelper::input('user_login','text','form-control','user_login','User name',old('username'));?>
                                        @else
                                        <?php HtmlHelper::input('user_login','text','form-control','user_login','User name',old('user_login'));?>
                                        @endif
                                    </div>
                                    <div class="text-center">
                                        @if(!empty($errors['user_login']))
                                        <p class="text-danger">
                                            {{$errors['user_login']}}
                                        @endif
                                    </div>
                                   
                                </div>
                                <!-- End of Form -->
                                <div class="form-group">
                                    <!-- Form -->
                                    <div class="form-group mb-4">
                                        <label for="password">Your Password</label>
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon4"><span class="fas fa-unlock-alt"></span></span>
                                            <?php HtmlHelper::input('user_pass','password','form-control','user_pass','Password');?>
                                        </div>  
                                        <div class="text-center">
                                        @if(!empty($errors['user_pass']))
                                        <p class="text-danger">
                                                {{$errors['user_pass']}}
                                        </p> 
                                        @endif
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
                                        <!-- <div><a href="./forgot-password.html" class="small text-right">Lost password?</a></div> -->
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
                                    <a href="./signup" class="fw-bold">Create account</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
