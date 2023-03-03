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
                   Edit  Countries
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
              <form action="{{ url('/admin/edit-country-data') }}"  method="Post" class="form-horizontal">
                  @csrf
                <div class="card-body">
                  <h4 class="card-title">Edit Country</h4>
                    @foreach($country as $countries)
                    <input type="hidden" name="country_id" value="{{ $countries->id }}">
                  <div class="form-group row">
                    <label for="countryCode" class="col-sm-3 text-end control-label col-form-label">Country Code</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" value="{{ $countries->country_code }}" id="countryCode" required name="country_code"/>  
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="CountryName" class="col-sm-3 text-end control-label col-form-label">Country Name</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" value="{{ $countries->name }}" id="CountryName" required name="country_name" placeholder="Country Name Here"/>  
                    </div>
                  </div>

                    @endforeach
                </div>
                <div class="border-top">
                  <div class="card-body">
                    <button type="submit" class="btn btn-primary">Submit</button>
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