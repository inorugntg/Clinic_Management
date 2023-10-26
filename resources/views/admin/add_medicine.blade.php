<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('admin.css')
</head>

<body>
    <div class="container-scroller">
        @include('admin.sidebar')
        @include('admin.navbar')
        <div class="container">
            <h2>Add Medicine</h2>
            <form action="{{ url('medicine/add') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="medicine_name">Medicine Name</label>
                    <input type="text" class="form-control" required name="medicine_name" id="medicine_name" placeholder="Enter medicine name">
                </div>
                <div class="form-group">
                    <label for="stock_quantity">Stock Quantity</label>
                    <input type="number" class="form-control" required name="stock_quantity" id="stock_quantity" placeholder="Enter stock quantity">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" required name="price" id="price" placeholder="Enter price">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" required name="description" id="description" placeholder="Enter description"></textarea>
                </div>
                <div class="form-group">
                    <label for="doctor">Doctor</label>
                    <select class="form-control" name="doctor_id" id="doctor">
                        <!-- Add options dynamically based on doctors from database -->
                        @foreach($doctors as $doctor)
                            <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    @include('admin.script')
</body>

</html>
