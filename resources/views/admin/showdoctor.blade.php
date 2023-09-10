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
            <div align="center" style="padding-top:100px;">
                <table>
                    <tr style="background-color: black;">
                        <th style="padding: 10px">Doctor Name</th>
                        <th style="padding: 10px">Phone</th>
                        <th style="padding: 10px">Speciality</th>
                        <th style="padding: 10px">Room No</th>
                        <th style="padding: 10px">Image</th>
                        <th style="padding:10px">Action</th>
                    </tr>
                    @foreach ($data as $doctor)
                    <tr align="center" style="background-color: skyblue;">
                        <td>{{ $doctor->name }}</td>
                        <td>{{ $doctor->phone }}</td>
                        <td>{{ $doctor->speciality }}</td>
                        <td>{{ $doctor->room }}</td>
                        <td><img src="doctorimage/{{ $doctor->image }}" alt="" style="width: 100px; height: 100px;"></td>
                        <td>
                            <div class="btn-group">
                                <a class="btn btn-warning" href="{{url('updatedoctor',$doctor->id)}}">Update</a>
                                <a  onclick="return confirm('Are you sure to delete this?')"
                                class="btn btn-danger" 
                                href="{{url('deletedoctor',$doctor->id)}}">Delete</a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
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
<!-- Your other content goes here -->