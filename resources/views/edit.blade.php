<!DOCTYPE html>
<html lang="en">
<>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href={{ asset('bootstrap.min.css') }}>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</>
<body>

    <div class="container">
        <h1>update student {{$s->id}}</h1>
        <form class="row g-3 needs-validation m-5" action="{{route('edit',$s->id)}}" method="post">
            @csrf
            <div class="col-md-4">
                <label   class="form-label">ID</label>
                <input type="number" @readonly(true) value="{{$s->id}}" class="form-control" >
            </div>
            <div class="col-md-4">
                <label class="form-label">First Name</label>
                <input type="text" class="form-control" name="first_name" value="t{{$s->first_name}}" required>
            </div>
            <div class="col-md-4">
                <label class="form-label">Last Name</label>
                <input type="text" name="last_name" class="form-control" value="{{$s->last_name}}" required>
            </div>
            <div class="col-md-4">
                <label class="form-label">Grade</label>
                <input type="number" name="grade" class="form-control" value="{{$s->grade}}" required>
            </div>
            <div class="col-md-4">
                <label class="form-label">Passed</label>
                <select name="passed" class="form-control" value="{{$s->passed}}" required>
                    <option value='1' >Yes</option>
                    <option value='0' >No</option>
                </select>
            </div>
            <div class="col-12 m-5">
                <input type="submit" class="btn btn-success" value='update student'/>
                <a href="/" class="btn btn-danger"  >Cancel </a>
            </div>
        </form>
    </div>
</body>
</html>
