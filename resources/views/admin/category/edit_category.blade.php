@extends("admin.admin_layout")
@section('admin_container')
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


            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    {{ session('status') }}
                </div>
            @elseif(session('failed'))
                <div class="alert alert-danger" role="alert">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    {{ session('failed') }}
                </div>
            @endif
            <form action="/create" method="post">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <table>
                    <tr>
                        <td>Category Name</td>
                        <td><input type='text' name='catagory' /></td>
                    </tr>
                    

                    <tr>
                        <td colspan='2'>
                            <input type='submit' value="Add Catagory" />
                        </td>
                    </tr>
                </table>




        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer">
            <div class="row">
                <div class="col-md-6 col-sm-6 font-12">Copyrights 2019. Organic E-store Admin. All Rights Reserved</div>
                <div class="col-md-6 col-sm-6 text-right font-12">Designed & Developed by <a href="#" target="_blank"
                        class="text-themecolor">SRGIT</a></div>
            </div>
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
@endsection
