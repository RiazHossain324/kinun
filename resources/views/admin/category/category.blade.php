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

            <div style="float: left; width:180px">
                <h3>Add Category:</h3>
            </div>
            <!-- <div style="float:left; width:500px">
                <form action="categories" method="POST">
                    @csrf
                    <input type="text" name="category" placeholder="Inpute Category name">
                    <button type="submit">Add Category</button>
                </form>
            </div> -->

            <div style="float:left; width:500px">
                <input type="text" name="category" id="category" placeholder="Inpute Category name">
                <button type="button" onclick="addCategory()">Add Category</button>
            </div>

            <br><br>

            
            <!-- <Table border=".5px">
                <tr>
                    <td style="padding:5px;">Id</td>
                    <td style="width: 80%; padding:5px;">Catagory Name</td>
                    <td style="width: 20% padding:5px;"><a href="#">Edit Catagory</a></td>
                    <td style="width: 20% padding:5px;"><a href="#">Delete Catagory</a></td>
                </tr>
                @foreach ($categorys as $category)
                <tr>
                    <td style="padding:5px;">{{ $category['id'] }}</td>
                    <td style="width: 100%; padding:5px;">{{ $category['category'] }}</td>
                    <td style="padding:5px;"><a href="#">Edit</a></td>
                    <td style="padding:5px;"><a href="#">Delete</a></td>
                </tr>
                @endforeach
            </Table> -->

            <table border=".5px">
            <thead>
                <tr>
                    <th style="padding:5px;">Id</th>
                    <th style="width: 80%; padding:5px;">Catagory Name</th>
                    <th style="width: 20%; padding:5px;"><a href="#">Edit Catagory</a></th>
                    <th style="width: 20%; padding:5px;"><a href="#">Delete Catagory</a></th>
                </tr>
            </thead>
            <tbody id="category-table">
                <input type="hidden" id="count_value" value="{{ count($categorys) }}">
                @foreach ($categorys as $category)
                    <tr>
                        <td style="padding:5px;">{{ $category['id'] }}</td>
                        <td style="width: 100%; padding:5px;">{{ $category['category'] }}</td>
                        <td style="padding:5px;"><a href="#">Edit</a></td>
                        <td style="padding:5px;"><a href="#">Delete</a></td>
                    </tr>
                @endforeach
            </tbody>
            
            </table>
            
            


<script>
function addCategory() {
    var category = $('#category').val();
    var data = {
        "category": category,
        "_token": "{{ csrf_token() }}"
    }
    $.ajax({
        type: "POST",
        url: '{{ url("categories") }}',
        data: data,
        success: function(response) {
            console.log(response);
            var html = '';
            if (response.status == 2) {
                $.each(response.errors, function(key, value) {
                    toastr.error(value);
                });
            } else if (response.status == 1) {
                toastr.success(response.text);
                var sl = parseInt($('#count_value').val())+1;
                html += '<tr>'
                        +'<td style="padding:5px;">'+sl+'</td>'
                        +'<td style="width: 100%; padding:5px;">'+category+'</td>'
                        +'<td style="padding:5px;"><a href="#">Edit</a></td>'
                        +'<td style="padding:5px;"><a href="#">Delete</a></td>'
                        +'</tr>';
                $('#count_value').val(sl);
                $('#category-table').append(html);
            } else {
               toastr.success('Something is worng.');
            }
        }
    });
}


</script>










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
