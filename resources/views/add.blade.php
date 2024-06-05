<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href={{ asset('bootstrap.min.css') }}>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Add a Student</title>
</head>
<body>
    <div class="container">
        <h1>Add a student</h1>
        <form class="row g-3 needs-validation m-5" action="{{ route('create') }}" method="post">
            @csrf
            <div class="col-md-4">
                <label class="form-label">First Name</label>
                <input type="text" class="form-control" name="first_name"  required>
            </div>
            <div class="col-md-4">
                <label class="form-label">Last Name</label>
                <input type="text" name="last_name" class="form-control"  required>
            </div>
            <div class="col-md-4">
                <label class="form-label">Grade</label>
                <input type="number" name="grade" class="form-control" required>
            </div>
            <div class="col-md-4">
                <label class="form-label">Passed</label>
                <select name="passed" class="form-control" required>
                    <option value="1" >Yes</option>
                    <option value="0">No</option>
                </select>
            </div>
            <div class="col-12 m-5">
                <input type="submit" class="btn btn-success" value='Add a student'/>
                <a href="/" class="btn btn-danger">Cancel</a>
            </div>
        </form>
    </div>
</body>
</html>
