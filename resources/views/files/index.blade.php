<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<body>
    <h1>Files</h1>
    <a class="btn btn-primary" href="{{ route('files.create') }}">Create New File</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>File Name</th>
                <th>Student Name</th>
                <th>Teacher</th>
            </tr>
        </thead>
        <tbody>
            @foreach($files as $file)
                <tr>
                    <td>{{ $file->id }}</td>
                    <td>{{ $file->file_name }}</td>
                    <td>{{ $file->student->full_name }}</td>
                    <td>{{ $file->teacher->full_name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>