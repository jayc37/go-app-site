
  <div class="py-4">
      <nav aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
              <li class="breadcrumb-item"><a href="#"><span class="fas fa-home"></span></a></li>
              <li class="breadcrumb-item"><a href="#">Components</a></li>
              <li class="breadcrumb-item active" aria-current="page">Forms</li>
          </ol>
      </nav>
      <div class="d-flex justify-content-between w-100 flex-wrap">
          <div class="mb-3 mb-lg-0">
              <h1 class="h4">Forms</h1>
              <p class="mb-0">Dozens of reusable components built to provide buttons, alerts, popovers, and more.</p>
          </div>
          <div>
              <a href="https://themesberg.com/docs/volt-bootstrap-5-dashboard/components/forms/" class="btn btn-outline-gray"><i class="far fa-question-circle me-1"></i> Forms Docs</a>
          </div>
      </div>
  </div>

  <div class="row">
      <div class="col-12 mb-4">
          <div class="card border-light shadow-sm components-section">
              <div class="card-body">     
                  <div class="row mb-4">
                      <div class="col-lg-4 col-sm-6">
                          <!-- Form -->
                          <div class="mb-4">
                              <label for="email">Email address</label>
                              <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                          </div>
                          <!-- End of Form -->
                          <!-- Form -->
                          <div class="mb-3">
                              <label for="exampleInputIconLeft">Icon Left</label>
                              <div class="input-group">
                                  <span class="input-group-text" id="basic-addon1"><span class="fas fa-search"></span></span>
                                  <input type="text" class="form-control" id="exampleInputIconLeft" placeholder="Search" aria-label="Search">
                              </div>
                          </div>
                          <!-- End of Form -->
                          <!-- Form -->
                          <div class="mb-3">
                              <label for="exampleInputIconRight">Icon Right</label>
                              <div class="input-group">
                                  <input type="text" class="form-control" id="exampleInputIconRight" placeholder="Search" aria-label="Search">
                                  <span class="input-group-text" id="basic-addon2"><span class="fas fa-search"></span></span>
                              </div>
                          </div>
                          <!-- End of Form -->
                          <!-- Form -->
                          <div class="mb-3">
                              <label for="exampleInputIconPassword">Password</label>
                              <div class="input-group">
                                  <input type="password" class="form-control" id="exampleInputIconPassword" placeholder="Password" aria-label="Password">
                                  <span class="input-group-text" id="basic-addon3"><span class="fas fa-unlock-alt"></span></span>
                              </div>
                          </div>
                          <!-- End of Form -->
                          <!-- Form -->
                          <div class="mb-3">
                              <label for="firstName">First name</label>
                              <input type="text" class="form-control is-valid" id="firstName" value="Mark" required>
                              <div class="valid-feedback">
                                  Looks good!
                              </div>                
                          </div>
                          <!-- End of Form -->
                      </div>
                      <div class="col-lg-4 col-sm-6">

                          <!-- Form -->
                          <div class="my-4">
                              <label for="textarea">Example textarea</label>
                              <textarea class="form-control" placeholder="Enter your message..." id="textarea" rows="4"></textarea>
                          </div>
                          <!-- End of Form -->
                          <!-- Form -->
                          <div class="mb-4">
                              <label for="usernameValidate">Username</label>
                              <input type="text" class="form-control is-invalid" id="usernameValidate" required>
                              <div class="invalid-feedback">
                                  Please choose a username.
                              </div>               
                          </div>
                          <!-- End of Form -->
                      </div>
                      <div class="col-lg-4 col-sm-6">
                          <div class="mb-3">
                              <label for="birthday">Birthday</label>
                              <div class="input-group">
                                  <span class="input-group-text"><span class="far fa-calendar-alt"></span></span>
                                  <input data-datepicker="" class="form-control" id="birthday" type="text" placeholder="dd/mm/yyyy" required>                                               
                              </div>
                          </div>
                          <!-- Form -->
                          <div class="mb-3">
                              <label for="disabledTextInput">Name</label>
                              <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input" disabled>
                          </div>
                          <div class="mb-3">
                              <label for="disabledSelect">Disabled select menu</label>
                              <select id="disabledSelect" class="form-control" disabled>
                              <option>Disabled select</option>
                              </select>
                          </div>
                          <!-- End of Form -->
                          <!-- Form -->
                          <div class="mb-4">
                              <label class="my-1 me-2" for="country">Country</label>
                              <select class="form-select" id="country" aria-label="Default select example">
                                  <option selected>Open this select menu</option>
                                  <option value="1">One</option>
                                  <option value="2">Two</option>
                                  <option value="3">Three</option>
                              </select>
                          </div>
                          <!-- End of Form -->
                          <!-- Form -->
                          <div class="mb-3">
                              <label for="formFile" class="form-label">Default file input example</label>
                              <input class="form-control" type="file" id="formFile">
                          </div>
                          <!-- End of Form -->
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>