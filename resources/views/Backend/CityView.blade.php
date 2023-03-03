@include('Backend.components.header') 
      <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
          <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
              <h4 class="page-title">View City</h4>
              <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                      City
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
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Cities List</h5>
                  <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                            <th>Serial No.</th>
                            <th>Country Name</th>
                            <th>City Name</th>
                            <th>Create Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i=1; ?>
                        @foreach($city as $cities)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ $cities->country_name }}</td>
                                <td>{{ $cities->city_name }}</td>
                                <td>{{ \Carbon\Carbon::parse($cities->created_at)->format('d-m-Y') }}</td>
                                <td>@if($cities->status === 1)  
                                    <button type="button" onclick="updateStatus(<?php echo $cities->city_id ?>, 0);" class="btn btn-success">Active</button>
                                  @else 
                                    <button type="button" onclick="updateStatus(<?php echo $cities->city_id ?>, 1);" class="btn btn-danger">Inactive</button>
                                @endif</td>
                                <td><a href="{{ url('/admin/edit-city', $cities->city_id) }}"><i class="me-2 mdi mdi-account-edit"></i></a>  |  <a href="{{ url('/admin/delete-city', $cities->city_id) }}"><i class="me-2 mdi mdi-delete"></i></a></td>
                            </tr>
                           <?php $i++; ?> 
                        @endforeach
                      </tbody>
                      <tfoot>
                        <tr>
                          <th>Serial No.</th>
                          <th>Country Name</th>
                          <th>City Name</th>
                          <th>Create Date</th>
                          <th>Status</th>
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
        
  <script>
    function updateStatus(id, status){
      var token = "<?=csrf_token()?>";
          $.ajax({
              url:"{{ url('/admin/update-city-status') }}",    
              type: "post",    
              dataType: 'json',
              data: {id: id, status: status, _token: token},
              success:function(result){
                console.log(result); 
                location.reload();
              }
            });
    }
  </script>
     