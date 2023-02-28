@include('Backend.components.header') 
      <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
          <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
              <h4 class="page-title">View Country</h4>
              <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Country
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
          <!-- ============================================================== -->
          <!-- Start Page Content -->
          <!-- ============================================================== -->
          <div class="row">
            <div class="col-12">
              <!-- <div class="card">
                <div class="card-body">
                  <h5 class="card-title mb-0">Static Table</h5>
                </div>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First</th>
                      <th scope="col">Last</th>
                      <th scope="col">Handle</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Larry</td>
                      <td>the Bird</td>
                      <td>@twitter</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title mb-0">Static Table With Checkboxes</h5>
                </div>
                <div class="table-responsive">
                  <table class="table">
                    <thead class="thead-light">
                      <tr>
                        <th>
                          <label class="customcheckbox mb-3">
                            <input type="checkbox" id="mainCheckbox" />
                            <span class="checkmark"></span>
                          </label>
                        </th>
                        <th scope="col">Rendering engine</th>
                        <th scope="col">Browser</th>
                        <th scope="col">Platform(s)</th>
                        <th scope="col">Engine version</th>
                      </tr>
                    </thead>
                    <tbody class="customtable">
                      <tr>
                        <th>
                          <label class="customcheckbox">
                            <input type="checkbox" class="listCheckbox" />
                            <span class="checkmark"></span>
                          </label>
                        </th>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td>Win 95+</td>
                        <td>4</td>
                      </tr>
                      <tr>
                        <th>
                          <label class="customcheckbox">
                            <input type="checkbox" class="listCheckbox" />
                            <span class="checkmark"></span>
                          </label>
                        </th>
                        <td>Trident</td>
                        <td>Internet Explorer 5.0</td>
                        <td>Win 95+</td>
                        <td>5</td>
                      </tr>
                      <tr>
                        <th>
                          <label class="customcheckbox">
                            <input type="checkbox" class="listCheckbox" />
                            <span class="checkmark"></span>
                          </label>
                        </th>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td>Win 95+</td>
                        <td>4</td>
                      </tr>
                      <tr>
                        <th>
                          <label class="customcheckbox">
                            <input type="checkbox" class="listCheckbox" />
                            <span class="checkmark"></span>
                          </label>
                        </th>
                        <td>Trident</td>
                        <td>Internet Explorer 5.0</td>
                        <td>Win 95+</td>
                        <td>5</td>
                      </tr>
                      <tr>
                        <th>
                          <label class="customcheckbox">
                            <input type="checkbox" class="listCheckbox" />
                            <span class="checkmark"></span>
                          </label>
                        </th>
                        <td>Trident</td>
                        <td>Internet Explorer 5.5</td>
                        <td>Win 95+</td>
                        <td>5.5</td>
                      </tr>
                      <tr>
                        <th>
                          <label class="customcheckbox">
                            <input type="checkbox" class="listCheckbox" />
                            <span class="checkmark"></span>
                          </label>
                        </th>
                        <td>Trident</td>
                        <td>Internet Explorer 6</td>
                        <td>Win 98+</td>
                        <td>6</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Collspan Table Example</h5>
                </div>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First</th>
                      <th scope="col">Last</th>
                      <th scope="col">Handle</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td colspan="2">Larry the Bird</td>
                      <td>@twitter</td>
                    </tr>
                  </tbody>
                </table>
              </div> -->
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Countries List</h5>
                  <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                            <th>Serial No.</th>
                            <th>Country Code</th>
                            <th>Country Name</th>
                            <th>Create Date</th>
                            <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($country as $countries)
                            <tr>
                                <td>{{ $countries->id }}</td>
                                <td>{{ $countries->country_code }}</td>
                                <td>{{ $countries->name }}</td>
                                <td>{{ \Carbon\Carbon::parse($countries->created_at)->format('d-m-Y') }}</td>
                                <td><i class="me-2 mdi mdi-account-edit"></i> |  <i class="me-2 mdi mdi-delete"></i></td>
                            </tr>
                        @endforeach
                      </tbody>
                      <tfoot>
                      <tr>
                          <th>Serial No.</th>
                          <th>Country Code</th>
                          <th>Country Name</th>
                          <th>Create Date</th>
                          <th>Action</th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ============================================================== -->
          <!-- End PAge Content -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- Right sidebar -->
          <!-- ============================================================== -->
          <!-- .right-sidebar -->
          <!-- ============================================================== -->
          <!-- End Right sidebar -->
          <!-- ============================================================== -->
        </div>
        @include('Backend.components.footer') 
     