
      <div class="py-4">
          <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                  <li class="breadcrumb-item"><a href="#"><span class="fas fa-home"></span></a></li>
                  <li class="breadcrumb-item"><a href="#">Manage</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Manage Product</li>
              </ol>
          </nav>
          <div class="d-flex justify-content-between w-100 flex-wrap">
              <div class="mb-3 mb-lg-0">
                  <h1 class="h4"><?php echo "Manage Products";?></h1>
                  <p class="mb-0">Management Catagories and Product of Page.</p>
              </div>
              <div>
                  <a href="https://github.com/jayc37/go-app-site#readme" class="btn btn-outline-gray"><i class="far fa-question-circle me-1"></i> Read The Document</a>
              </div>
          </div>
      </div>

      <div class="card border-light shadow-sm mb-4">
          <div class="card-body">
              <div class="table-responsive">
                  <table class="table table-centered table-nowrap mb-0 rounded">
                      <thead class="thead-light">
                          <tr>
                          @foreach ($data['product'][0] as $key=>$value)

                              <th class="border-0">{{$key}}</th>
                           
                        @endforeach
                                <th class="border-0">Action</th>

                          </tr>
                      </thead>
                      <tbody>
                          <!-- Item -->
                          @foreach ($data['product'] as $pr)
                          @if(is_array($pr))
                          <tr>
                              <td class="border-0"><a href="#" class="text-primary fw-bold">{{$pr['id']}}</a> </td>
                              <td class="border-0 fw-bold"><span class="icon icon-xs icon-gray w-30"></span>{{$pr['post_author']}}</td>
                              <td class="border-0">
                              {{$pr['post_date']}}
                              </td>
                              <td class="border-0">
                              {{$pr['post_date_gmt']}}
                              </td>
                              <td class="border-0">
                              {{$pr['post_content']}}
                              </td>
                              <td class="border-0">
                                {{$pr['post_excerpt']}}
                                  </div>
                              </td>
                              <td class="border-0 text-success">
                                  <span class="fw-bold">{{$pr['post_modified']}}</span>
                              </td>
                              <td class="border-0 text-success">
                                  <span class="fw-bold">{{$pr['post_name']}}</span>
                              </td>

                              <td class="border-0 text-success">
                                  <span class="fw-bold">{{$pr['post_status']}}</span>
                              </td>
                              <td class="border-0 text-success">
                                  <span class="fw-bold">{{$pr['post_title']}}</span>
                              </td>
                              <td class="border-0 text-success">
                                  <span class="fw-bold">{{$pr['post_type']}}</span>
                              </td>
                              <td>
                              <div class="btn-group">
                          <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span class="icon icon-sm">
                                  <span class="fas fa-ellipsis-h icon-dark text-right"></span>
                              </span>
                              <span class="sr-only">Toggle Dropdown</span>
                          </button>
                          <div class="dropdown-menu py-0">
                              <a class="dropdown-item rounded-top" href=detail/{{$pr['id']}}><span class="fas fa-eye me-2"></span>View Details</a>
                              <a class="dropdown-item" href="#"><span class="fas fa-edit me-2"></span>Edit</a>
                              <a class="dropdown-item text-danger rounded-bottom" href="#"><span class="fas fa-trash-alt me-2"></span>Remove</a>
                          </div>
                      </div>
                            </td>
                          </tr>
                          @endif

                        @endforeach
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
