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
                <h2>Medical Devices CRUD</h2>
                <a href="#" class="btn btn-success mb-2">Add Medical Device</a>
                <table class="table table-bordered" style="width: 900px; height: 200px;">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Device Name</th>
                            <th>Serial Number</th>
                            <th>Speciality</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="font-size: 16px;">
                            <td style="padding: 10px;">1</td>
                            <td style="padding: 10px;">Device 1</td>
                            <td style="padding: 10px;">SN12345</td>
                            <td style="padding: 10px;">Heart</td>
                            <td style="padding: 10px;">
                                <a href="#" class="btn btn-info btn-sm" style="font-size: 14px;">Edit</a>
                                <a href="#" class="btn btn-danger btn-sm" style="font-size: 14px;">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 10px;">2</td>
                            <td style="padding: 10px;">Device 2</td>
                            <td style="padding: 10px;">SN67890</td>
                            <td style="padding: 10px;">Skin</td>
                            <td style="padding: 10px;">
                                <a href="#" class="btn btn-info btn-sm" style="font-size: 14px;">Edit</a>
                                <a href="#" class="btn btn-danger btn-sm" style="font-size: 14px;">Delete</a>
                            </td>
                        </tr>
                        <!-- Tambahkan data lainnya di sini -->
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