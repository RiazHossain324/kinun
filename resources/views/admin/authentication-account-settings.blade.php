@extends('admin.admin_layout')
@section('admin_container')
<!-- ============================================================== --> 
<!-- End Left Sidebar - style you can find in sidebar.scss  --> 
<!-- ============================================================== --> 

<!-- ============================================================== --> 
<!-- Page wrapper  --> 
<!-- ============================================================== -->
<div class="page-wrapper"> 
  <!-- ============================================================== --> 
  <!-- Container fluid  --> 
  <!-- ============================================================== -->
  <div class="container-fluid"> 
    <!-- ============================================================== --> 
    <!-- Bread crumb and right sidebar toggle --> 
    <!-- ============================================================== -->
    <div class="row page-titles">
      <div class="col-6 align-self-center">
        <h3>Account Settings</h3>
      </div>
      <div class="col-6 text-right font-12"> <a href="index.html">Admin</a>  &gt;  Account Settings</div>
      <div class="">
        <button class="right-side-toggle waves-effect waves-light bg-primary btn btn-circle btn-sm pull-right ml-10"><i class="ti-settings text-white"></i></button>
      </div>
    </div>
       <!-- ============================================================== --> 
    <!-- Bread crumb and right sidebar toggle --> 
    <!-- ============================================================== -->
    
   <div class="row">
     
      <div class="col-lg-4 col-md-6 col-sm-12 userprofile">
        <div class="p-relative"> <img src="../assets/images/profile/edit-cover-image.jpg" class="img-fluid" alt="" title="">
          <div class="userpic"> <img src="../assets/images/profile/profile.jpg" class="userpicimg" alt="" title="" > </div>
          <div class="edit-cover"><a href="#"><i class="fa fa-edit"></i> Edit Cover Image</a></div>
          <div class="card">
            <div class="card-body"> </div>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <h2 class="font-20  text-blue"><img src="../assets/images/profile/user-img.png" alt="" title="" >&nbsp; Edit Profile</h2>
            <div class="form-group">
              <input class="form-control" type="text" placeholder="Name">
            </div>
            <div class="form-group">
              <input class="form-control" type="text" placeholder="Password">
            </div>
            <div class="form-group">
              <input class="form-control" type="text" placeholder="Change Password / New Password">
            </div>
            <div class="form-group">
              <input class="form-control" type="text" placeholder="Confirm Password">
            </div>
            <div class="text-center"> <a href="#" class="btn btn-rounded btn-success font-13 text-dark mb-10">Save</a> &nbsp; 
            <a href="#" class="btn btn-rounded btn-danger font-13 text-dark mb-10">Delete Profile</a> &nbsp; 
            <a href="#" class="btn btn-rounded btn btn-secondary font-13 mb-10">Cancel</a> </div>
          </div>
        </div>
      </div>
      <div class="col-lg-8 col-md-6 col-sm-12">
        <div class="card">
          <div class="card-body">
            <h2 class="font-20 text-blue">Basic Info</h2>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" type="text" placeholder="First Name">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" type="text" placeholder="Last Name">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" type="text" placeholder="Email Address">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" type="text" placeholder="Phone Number">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <input class="form-control" type="text" placeholder="Address">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <input class="form-control" type="text" placeholder="City">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <input class="form-control" type="text" placeholder="Postal Code">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <select class="form-control">
                    <option>Country</option>
                    <option>Country</option>
                    <option>Country</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <h2 class="font-20 text-blue">About</h2>
            <textarea class="form-control" rows="4">Write something about yourself</textarea>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card">
          <div class="card-body">
            <h2 class="font-20  text-blue"><img src="../assets/images/profile/user-img.png" alt="" title="" >&nbsp; Social Links</h2>
            <div class="form-group">
              <input class="form-control" type="text" placeholder="Facebook">
            </div>
            <div class="form-group">
              <input class="form-control" type="text" placeholder="Google">
            </div>
            <div class="form-group">
              <input class="form-control" type="text" placeholder="Twitter">
            </div>
            <div class="form-group">
              <input class="form-control" type="text" placeholder="Pinterest">
            </div>
            <div> <a href="#" class="btn btn-rounded btn-success font-13 text-dark">Save</a> &nbsp; 
            <a href="#" class="btn btn-rounded btn-secondary font-13">Cancel</a> </div>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card">
          <div class="card-body">
            <h2 class="font-20 text-blue">Upload Photos</h2>
            <div class="row">
              <div class="col-md-4 col-sm-4 dropify-wrapper2 mb-20 psr-5">
                <input type="file" id="input-file-now1" class="dropify" />
              </div>
              <div class="col-md-4 col-sm-4 dropify-wrapper2 mb-20  psl-5  psr-5">
                <input type="file" id="input-file-now2" class="dropify" />
              </div>
              <div class="col-md-4 col-sm-4 dropify-wrapper2 mb-20 psl-5">
                <input type="file" id="input-file-now3" class="dropify" />
              </div>
              <div class="col-md-4 col-sm-4 dropify-wrapper2 mb-20 psr-5">
                <input type="file" id="input-file-now4" class="dropify" />
              </div>
              <div class="col-md-4 col-sm-4 dropify-wrapper2 mb-20 psl-5 psr-5">
                <input type="file" id="input-file-now5" class="dropify" />
              </div>
              <div class="col-md-4 col-sm-4 dropify-wrapper2 mb-20 psl-5 psr-5">
                <input type="file" id="input-file-now6" class="dropify" />
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <div class="text-right"> 
            <a href="#" class="btn btn-rounded btn-success font-13 text-dark">Save</a> &nbsp;
            <a href="#" class="btn btn-rounded btn-secondary font-13">Cancel</a> </div>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
    <!-- ============================================================== --> 
    <!-- End PAge Content --> 
    <!-- ============================================================== --> 
    
    <!-- ============================================================== --> 
    <!-- Right sidebar --> 
    <!-- ============================================================== --> 
    <!-- .right-sidebar -->
    <div class="right-sidebar">
      <div class="slimscrollright">
        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
        <div class="r-panel-body">
          <ul id="themecolors" class="mt-20">
            <li><b>With Light sidebar</b></li>
            <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
            <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
            <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
            <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme">4</a></li>
            <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
            <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
            <li class="d-block mt-30"><b>With Dark sidebar</b></li>
            <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme working">7</a></li>
            <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
            <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
            <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
            <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
            <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- ============================================================== --> 
    <!-- End Right sidebar --> 
    <!-- ============================================================== --> 
    <!-- ============================================================== --> 
    <!-- End Container fluid  --> 
    <!-- ============================================================== --> 
    <!-- ============================================================== --> 
    <!-- footer --> 
    <!-- ============================================================== -->
    <footer class="footer">
      <div class="row">
        <div class="col-md-6 col-sm-6 font-12">Copyrights 2019. Organic E-store Admin. All Rights Reserved</div>
        <div class="col-md-6 col-sm-6 text-right font-12">Designed & Developed by <a href="http://www.srgit.com/" target="_blank" class="text-themecolor">SRGIT</a></div>
      </div>
    </footer>
    <!-- ============================================================== --> 
    <!-- End footer --> 
    <!-- ============================================================== --> 
  </div>
  <!-- ============================================================== --> 
  <!-- End Page wrapper  --> 
  <!-- ============================================================== --> 
</div>
<!-- ============================================================== --> 
<!-- End Wrapper --> 
<!-- ============================================================== --> 
</div>
@endsection