<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style>
        /* Tambahkan style ini untuk mengatur warna latar belakang input */
        input[type="text"],
        input[type="number"],
        select.form-control {
            background-color: #f5f5f5;
            /* Ganti dengan warna latar belakang yang sesuai */
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        <!-- Include your sidebar, navbar, and other content here -->
        @include('admin.sidebar')
        @include('admin.navbar')

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
                        <h1 class="text-center">Add Doctor</h1>
                        <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Doctor Name</label>
                                <input type="text" class="form-control" required="" name="name" id="name" placeholder="Write the name">
                            </div>
                            <div class="form-group">
                                <label for="number">Phone</label>
                                <input type="number" class="form-control" required="" name="number" id="number" placeholder="Write the number">
                            </div>
                            <div class="form-group">
                                <label for="speciality">Specialty</label>
                                <select class="form-control" name="speciality" required="" id="speciality" style="color:black;">
                                    <option value="">-- Select --</option>
                                    <option value="skin">Skin</option>
                                    <option value="heart">Heart</option>
                                    <option value="eye">Eye</option>
                                    <option value="nose">Nose</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="other">Room No</label>
                                <input type="text" class="form-control" required="" name="room" id="room" placeholder="Write the room number">
                            </div>
                            <div class="form-group">
                                <label for="other">Doctor Schedule</label>
                                <input type="text" class="form-control" required="" name="doctor_schedule" id="doctor_schedule" placeholder="Write the Doctor Schedule">
                            </div>
                            <div class="form-group">
                                <label for="other">Doctor Image</label>
                                <input type="file" class="form-control" required="" name="file" id="other" placeholder="Write the room number">
                            </div>
                            <!-- Add more form fields as needed -->
                            <div class="text-center">
                                <button class="btn btn-success" type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include your scripts and other footer content here -->
    @include('admin.script')
</body>

</html>