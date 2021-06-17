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
                                <p>
                                  <?php 
                                echo (!empty($msg))?$msg:false;
                                  ?>
                                </p> 
                            </div>

                            <form method="post" action="">
                            
                                {{ form.hidden_tag() }}

                                <!-- Form -->
                                <div class="form-group mb-4">
                                    <label for="email">Username</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon3"><span class="fas fa-user-shield"></span></span>
                                        {{ form.username(placeholder="Username", class="form-control") }}
                                    </div>  
                                </div>

                                <!-- Form -->
                                <div class="form-group mb-4">
                                    <label for="email">Your Email</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon3"><span class="fas fa-envelope"></span></span>
                                        {{ form.email(placeholder="Email", class="input form-control", type="email") }}
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
                                            {{ form.password(placeholder="Password", class="form-control", type="password") }}
                                        </div>  
                                    </div>
                                    <!-- End of Form -->

                                    <div class="d-flex justify-content-between align-items-top mb-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="remember">
                                            <label class="form-check-label mb-0" for="remember">
                                              Agree Terms
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <a href="{{ url_for('base_blueprint.login') }}" class="small text-right">Login</a>
                                        </div>
                                    </div>                                  
                                </div>
                                <div class="d-grid">
                                    <button type="submit" name="register" class="btn btn-dark">Sign UP</button>
                                </div>
                            </form>

                            <div class="d-flex justify-content-center align-items-center mt-4">
                                <span class="font-weight-normal">
                                    &copy; <a  href="https://themesberg.com" target="_blank">Themesberg</a> 
                                    - coded by <a target="_blank" href="https://appseed.us">AppSeed</a>
                                </span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

