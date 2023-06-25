<!-- create.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Employee Records</title>
 <style type="text/css">
 
.container {
    max-width: 600px;
    margin: 0 auto;
}

.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}

.form-control {
    width: 100%;
    padding: 10px;
    border-radius: 4px;
    border: 1px solid #ccc;
}

.form-control-file {
    display: block;
    width: 100%;
    padding: 10px;
}

.btn-primary {
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.btn-primary:hover {
    background-color: #0056b3;
}
    </style>
</head>
<body>
    <div class="container">


    <h1>Create Employee</h1>

    <form action="{{ route('crud.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="designation">Designation</label>
            <input type="text" name="designation" id="designation" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="profile_image">Profile Image</label>
            <input type="file" name="profile_image" id="profile_image" class="form-control-file">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>