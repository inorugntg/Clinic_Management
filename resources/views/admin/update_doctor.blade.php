<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style type="text/css">
        label {
            display: inline-block;
            width: 200px;
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->
        @include('admin.navbar')
        <!--partial-->
        <div class="container" align="center" style="padding-top:100px;">
            @if (session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert"></button>
                {{session()->get('message')}}
            </div>
            @endif
            <form action="{{url('editdoctor',$data->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div style="padding: 10px;">
                    <label for="name">Doctor Name</label>
                    <input type="text" style="color: black;" name="name" id="name" value="{{ $data->name }}">
                </div>
                <div style="padding: 10px;">
                    <label for="phone">Phone</label>
                    <input type="number" style="color: black;" name="phone" id="phone" value="{{ $data->phone }}">
                </div>
                <div style="padding: 10px;">
                    <label for="speciality">Speciality</label>
                    <input type="text" style="color: black;" name="speciality" id="speciality" value="{{ $data->speciality }}">
                </div>
                <div style="padding: 10px;">
                    <label for="room">Room</label>
                    <input type="text" style="color: black;" name="room" id="room" value="{{ $data->room }}">
                </div>
                <div style="padding: 10px;">
                    <label for="schedule">Schedule</label>
                    <input type="text" style="color: black;" name="doctor_schedule" id="schedule" value="{{ $data->schedule }}">

                </div>
                <div style="padding: 10px;">
                    <label for="image">Old Image</label>
                    <img height="150" width="150" src="{{ asset('doctorimage/' . $data->image) }}" alt="">
                </div>
                <div style="padding: 10px;">
                    <label>Change Image</label>
                    <input type="file" name="file">
                </div>
                <div style="padding: 10px;">
                    <input type="submit" class="btn btn-primary">
                </div>
            </form>
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