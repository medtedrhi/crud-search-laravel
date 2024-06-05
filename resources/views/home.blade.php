<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href={{ asset('bootstrap.min.css') }}>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <h1>Students list </h1>

    <div class="container">
        <form action="{{ route('show')}}" method="get">
        <div class="input-groupe mb-3">
            <input type="text" class="form-control" value="@isset($found){{ $found->id}} @endisset" name="id" id="" placeholder="ID Student">
            <input type="submit" value="Search for a student" class="btn btn-primary" type="button" />
        </div>
        </form>
    </div>


    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="me-md-2 btn btn-success" href="add">Add a student</a>
    </div>

    @isset($ZeroStudent)
        <br> <br> <br>
        <h1> There is no Students</h1> <br> <br> <br>
    @endisset

    @isset($notexist)
        <h1> Student Not Found</h1> <br> <br> <br>
    @endisset

    @isset($found)
    <table class="table ">
        <thead class="table-dark">
            <td>Id</td>
            <td>First_name</td>
            <td>Last_name</td>
            <td>Grade</td>
            <td>Passed</td>
            <td>Updated_at</td>
            <td>functions</td>
        </thead></td>
        <tr>
            <td>{{ $found -> id}}</td>
            <td>{{ $found -> first_name}}</td>
            <td>{{ $found -> last_name}}</td>
            <td>{{ $found -> grade}}</td>
            <td>{{ $found -> passed}}</td>
            <td>{{ $found -> updated_at}}</td>
            <td>
                <div class="d-grid gap-2 d-md-block">
                        <a href="{{route('edit',$found->id)}}" class="btn btn-primary" type="button">Update</a>
                        <a href="{{route('destroy',$found->id)}}" class="btn btn-danger" type="button">Delete</a>
                </div>
            </td>
        </tr>
    </table>

    @endisset

    @isset ($index)
    <table class="table ">
        <thead class="table-dark">
            <td>Id</td>
            <td>First_name</td>
            <td>Last_name</td>
            <td>Grade</td>
            <td>Passed</td>
            <td>Updated_at</td>
            <td>functions</td>
        </thead>
        @foreach ($ss as $s)
            <tr>
                <td>{{ $s -> id}}</td>
                <td>{{ $s -> first_name}}</td>
                <td>{{ $s -> last_name}}</td>
                <td>{{ $s -> grade}}</td>
                <td>{{ $s -> passed}}</td>
                <td>{{ $s -> updated_at}}</td>
                <td>
                    <div class="d-grid gap-2 d-md-block">
                        <a href="{{route('edit',$s->id)}}" class="btn btn-primary" type="button">Update</a>
                        <a href="{{route('destroy',$s->id)}}" class="btn btn-danger" type="button">Delete</a>
                    </div>
                </td>
            </tr>
        @endforeach

    </table>


            {{ $ss->links() }}

    @endisset

    <div class="d-grid gap-2 d-md-block">
            <a href="{{route('destroyall')}}" class="btn btn-danger" >delete all</a>
            <a href="/" class="btn btn-success" >show all</a>
        </div>
</body>
</html>
