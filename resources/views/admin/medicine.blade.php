<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('admin.css')
</head>
<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->
        @include('admin.navbar')
        <!--partial-->
        <div class="container-fluid page-body-wrapper">
            <div class="container">
                <h2>Medicines CRUD</h2>
                <a href="#" class="btn btn-success mb-2">Add Medicine</a>
                <table class="table table-bordered" style="width: 900px; height: 200px;">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Medicine Name</th>
                            <th>Stock Quantity</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Doctor</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr style="font-size: 16px;">
                            <td style="padding: 10px;">1</td>
                            <td style="padding: 10px;">Promag</td>
                            <td style="padding: 10px;">12</td>
                            <td style="padding: 10px;">Rp 36.000/Packs</td>
                            <td style="padding: 10px;">Obat untuk sakit maag</td>
                            <td style="padding: 10px;">Mr. Wanto</td>
                            <td style="padding: 10px;">
                                <a href="#" class="btn btn-info btn-sm" style="font-size: 14px;">Edit</a>
                                <a href="#" class="btn btn-danger btn-sm" style="font-size: 14px;">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
</body>

</html>
