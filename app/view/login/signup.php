    <main>
        <section class="d-flex align-items-center my-5 mt-lg-6 mb-lg-5">
            <div class="container">
                <div class="row justify-content-center form-bg-image" data-background-lg="/static/assets/img/illustrations/signin.svg">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="mb-4 mb-lg-0 bg-white shadow-soft border rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                            <div class="text-center text-md-center mb-4 mt-md-0">
                                <h1 class="mb-0 h3">
                                    <a target="_blank"
                                       href="#">Flask Volt</a> - Sign UP
                                </h1>
                                <br />
                                <div class="text-center">
                                @if(!empty($msg))
                                <p class="text-danger">
                                    {{$msg}}
                                </p> 
                                @endif
                                </div>
                            </div>

                            <?php HtmlHelper::formOpen('post',_WEB_ROOT.'/user/post_user','mt-4');?>
                            
                                <!-- Form -->
                                <div class="form-group mb-4">
                                    <label for="text">Your Nickname</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon3"><span class="fas fa-user-shield"></span></span>
                                        <?php HtmlHelper::input("nickname","text",'form-control','nickname','Nick Name',old('nickname'));?>

                                    </div>  
                                </div>
                                <div class="form-group mb-4">
                                    <label for="text">User Name</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon3"><span class="fas fa-user-shield"></span></span>
                                        <?php HtmlHelper::input("username","username",'form-control','username','User Name',old('username'));?>

                                    </div>  

                                    <div class="text-center">
                                    @if(!empty($errors['username']))
                                        <p class="text-danger">
                                            {{$errors['username']}}
                                        @endif
                                    </div>
                                    
                                </div>
                                <!-- Form -->
                                <div class="form-group mb-4">
                                    <label for="email">Your Email</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon3"><span class="fas fa-envelope"></span></span>
                                        <?php HtmlHelper::input('email','email','form-control','email','example@company.com',old('email'));?>
                                        
                                    </div>  
                                    <div class="text-center">
                                    @if(!empty($errors['email']))
                                        <p class="text-danger">
                                            {{$errors['email']}}
                                        @endif
                                    </div>
                                    
                                </div>
                                <!-- End of Form -->

                                <!-- End of Form -->
                                <div class="form-group">
                                    <!-- Form -->
                                    <div class="form-group mb-4">
                                        <label for="password">Your Password</label>
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon4"><span class="fas fa-unlock-alt"></span></span>
                                            <?php HtmlHelper::input('password','password','form-control','password','Password');?>
                                        </div>

                                        <div class="text-center">
                                        @if(!empty($errors['password']))
                                        <p class="text-danger">
                                                {{$errors['password']}}
                                            </p> 
                                            @endif
                                        </div>  
                                        
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="password">Repeat Password</label>
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon4"><span class="fas fa-unlock-alt"></span></span>
                                            <?php HtmlHelper::input('repeatpassword','password','form-control','repeatpassword','Repeat Password');?>
                                        </div>  
                                    <div class="text-center">
                                    @if(!empty($errors['repeatpassword']))
                                            <p class="text-danger">
                                                {{$errors['repeatpassword']}}
                                            </p> 
                                            @endif
                                    </div>
                                    
                                       
                                    </div>
                                    <!-- End of Form -->

                                    <div class="d-flex justify-content-between align-items-top mb-4">
                                        <div class="form-check">
                                            <input class="form-check-input" name="term" type="checkbox" value="" id="remember">
                                            <label class="form-check-label mb-0" for="remember">
                                              Agree Terms
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <a href="./login" class="small text-right">Login</a>
                                        </div>
                                    </div>                                  
                                </div>
                                <div class="d-grid">
                                <?php HtmlHelper::submit('Sign Up','btn btn-dark');?>
                                </div>
                            <?
                                HtmlHelper::formClose();
                            
                            ?>
                            <div class="d-flex justify-content-center align-items-center mt-4">
                                <span class="font-weight-normal">
                                    &copy; <a  href="https://themesberg.com" target="_blank">Themesberg</a> 
                                    - coded by <a target="_blank" href="#">Go App</a>
                                </span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

