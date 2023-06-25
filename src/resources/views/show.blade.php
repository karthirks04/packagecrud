<!-- show.blade.php -->


<!DOCTYPE html>
<html>
<head>
    <title>Employee Records</title>
    
</head>
<body>
    <div class="container">
    <h1>Employee Details</h1>

    <div>
        <strong>Name:</strong> {{ $data->name }}
    </div>
    <div>
        <strong>Designation:</strong> {{ $data->designation }}
    </div>
    <div>
        <strong>Profile Image:</strong>
        @if($data->profile_image)
            <img src="{{ asset('storage/'.$data->profile_image) }}" alt="Profile Image" width="100">
        @else
            No image available
        @endif
    </div>
    <div>
        <a href="{{ route('crud.index') }}" class="btn btn-primary">Back to List</a>
    </div>
</div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>