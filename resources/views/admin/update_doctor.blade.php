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
        {{-- <div class="container" align="center" style="padding-top:100px;">
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
        </div> --}}

        <div class="container-fluid page-body-wrapper">
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="container" style="padding-top: 30px;">
                        @if (session()->has('message'))
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert"></button>
                            {{session()->get('message')}}
                        </div>
                        @endif
                        <h1 class="text-center">Update Doctor</h1>
                        <form action="{{url('editdoctor',$data->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="name">Doctor Name</label>
                                <input type="text" class="form-control text-primary" required="" name="name" id="name" placeholder="Write the name" value="{{ $data->name }}">
                            </div>
                            <div class="form-group">
                                <label for="number">Phone</label>
                                <input type="number" class="form-control text-primary" required="" name="phone" id="number" placeholder="Write the number" value="{{ $data->phone }}">
                            </div>
                            <div class="form-group">
                                <label for="speciality">Specialty</label>
                                <select class="form-control text-primary" name="speciality" required="" id="speciality" style="color:black;">
                                    <option value="" disabled>-- Select --</option>
                                    <option value="skin" @if($data->speciality == "skin") selected @endif>Skin</option>
                                    <option value="heart" @if($data->speciality == "heart") selected @endif>Heart</option>
                                    <option value="eye" @if($data->speciality == "eye") selected @endif>Eye</option>
                                    <option value="nose" @if($data->speciality == "nose") selected @endif>Nose</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="other">Room No</label>
                                <input type="text" class="form-control text-primary" required="" name="room" id="room" placeholder="Write the room number" value="{{ $data->room }}">
                            </div>
                            <div class="form-group">
                                <label for="other">Doctor Schedule</label>
                                <input type="text" class="form-control text-primary" required="" name="doctor_schedule" id="doctor_schedule" placeholder="Write the Doctor Schedule" value="{{ $data->schedule }}">
                            </div>

                            <div style="padding: 10px;">
                                <label for="image">Old Image</label>
                                <img height="150" width="150" src="{{ asset('doctorimage/' . $data->image) }}" alt="">
                            </div>
                            <div style="padding: 10px;">
                                <label>Change Image</label>
                                <input type="file" name="file">
                            </div>
                            
                            {{-- <div class="form-group">
                                <label for="other">Doctor Image</label>
                                <input type="file" class="form-control" required="" name="file" id="other" placeholder="Write the room number">
                            </div> --}}
                            <!-- Add more form fields as needed -->
                            <div class="text-center">
                                <button class="btn btn-success" type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
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