<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
    <div class="container">
        <h1>Create File</h1>
        <hr>
        <div class="row">
            <div class="col-12">
                <form action="#" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="file_name">File Name</label>
                        <input class="form-control" type="text" placeholder="File Name" name="file_name">
                    </div>
                    <div class="form-group">
                        <label for="student_id">Select Student</label>
                        <select class="form-control" name="student_id" id="student_id">
                            @foreach($students as $student)
                                <option value="{{ $student->id }}">{{ $student->full_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="teacher_id">Select Teacher</label>
                        <select class="form-control" name="teacher_id" id="teacher_id">
                            @foreach($teachers as $teacher)
                                <option value="{{ $teacher->id }}">{{ $teacher->full_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button class="btn btn-primary" type="submit">Save File</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>