@include('Backend.components.header') 
  <div class="page-wrapper">
      <!-- ============================================================== -->
      <!-- Bread crumb and right sidebar toggle -->
      <!-- ============================================================== -->
      <div class="page-breadcrumb">
        <div class="row">
          <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Countries</h4>
            <div class="ms-auto text-end">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">
                    Countries
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
        <!-- Start Page Content  -->
        <!-- ============================================================== -->
        <div class="row">
          <div class="col-md-12">
            <div class="card"> 
              <form action="{{ url('/admin/add-country-data') }}"  method="Post" class="form-horizontal">
                  @csrf
                <div class="card-body">
                  <h4 class="card-title">Add Country</h4>
                  <div class="form-group row">
                    <label for="countryCode" class="col-sm-3 text-end control-label col-form-label">Country Code</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="countryCode" required name="country_code" placeholder="Country Code Here"/>  
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="CountryName" class="col-sm-3 text-end control-label col-form-label">Country Name</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="CountryName" required name="country_name" placeholder="Country Name Here"/>  
                    </div>
                  </div>
                </div>
                <div class="border-top">
                  <div class="card-body">
                    <button type="button" class="btn btn-primary">Submit</button>
                  </div>
                </div>
              </form>
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