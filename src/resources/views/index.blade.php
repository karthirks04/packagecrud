<!-- index.blade.php -->



<!DOCTYPE html>
<html>
<head>
    <title>Employee Records</title>
    <style type="text/css">
        body {
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
}

.container {
  margin-top: 20px;
}
.table {
    width: 100%;
    border-collapse: collapse;
}

.table th,
.table td {
    padding: 10px;
    border: 1px solid #ccc;
}

.table th {
    background-color: #f0f0f0;
    font-weight: bold;
}

.table img {
    max-width: 50px;
    height: auto;
}

    </style>
    
</head>
<body>
    <div class="container">
    <h1>CRUD Records</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('crud.create') }}" class="btn btn-primary mb-3">Create Record</a>

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Designation</th>
                <th>Profile Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $record)
                <tr>
                    <td>{{ $record->name }}</td>
                    <td>{{ $record->designation }}</td>
                    <td>
                        @if($record->profile_image)
                            <img src="{{ asset('storage/'.$record->profile_image) }}" alt="Profile Image" width="50">
                        @else
                            No image available
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('crud.show', $record->id) }}" class="btn btn-primary">View</a>
                        <a href="{{ route('crud.edit', $record->id) }}" class="btn btn-secondary">Edit</a>
                        <form action="{{ route('crud.destroy', $record->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


</div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>