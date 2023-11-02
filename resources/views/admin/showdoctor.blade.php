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
            <div class="ms-4" style="padding-top:100px; overflow:auto;">
                <table class="table table-dark table-hover border rounded align-middle" style="width: 100px;">
                    <tr>
                        <th class="text-center mx-3">Doctor Name</th>
                        <th class="text-center mx-3">Phone</th>
                        <th class="text-center mx-3">Speciality</th>
                        <th class="text-center mx-3">Room No</th>
                        <th class="text-center mx-3">Image</th>
                        <th class="text-center mx-3">Schedule</th>
                        <th class="text-center mx-3">Action</th>
                    </tr>
                    @foreach ($data as $doctor)
                    <tr class="table-success table-hover border rounded">
                        <td class="align-middle text-center mx-3">{{ $doctor->name }}</td>
                        <td class="align-middle text-center mx-3">{{ $doctor->phone }}</td>
                        <td class="align-middle text-center mx-3">{{ $doctor->speciality }}</td>
                        <td class="align-middle text-center mx-3">{{ $doctor->room }}</td>
                        <td class="align-middle text-center mx-3"><img src="doctorimage/{{ $doctor->image }}" alt="" style=""></td>
                        <td class="align-middle text-center mx-3">{{ $doctor->schedule }}</td>
                        <td class="align-middle text-center mx-3">
                            <div class="mx-4">
                                <a class="btn btn-warning text-black" href="{{url('updatedoctor',$doctor->id)}}">Update</a>
                                <a  onclick="return confirm('Are you sure to delete this?')"
                                class="btn btn-danger text-black" 
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