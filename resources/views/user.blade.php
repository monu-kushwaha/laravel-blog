
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Alll user</title>
    <style>
        nav .w-5{
            display: none;
        }
    </style>
</head>
<body>
    <h1> All User listing</h1>
        <div class="container mt-5">
            <div class="row">
                {{-- <a href=""></a> --}}
                <div class="col-12">
                    <a href="{{route('addUser')}}" class="btn btn-dark">Add User</a>
                    <table class="table table-boarder table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Age</th>
                            <th>City</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($date as $id => $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->age}}</td>
                            <td>{{$user->city_name}}</td>
                            <td>
                                <a href="{{route('singleUser', $user->id)}}" class="btn btn-primary btn-sm">Show User</a>
                                <a href="{{route('deleteUser', $user->id)}}" class="btn btn-danger btn-sm">Delete User</a>
                                <a href="{{route('updateUsers', $user->id)}}" class="btn btn-info btn-sm">Update User</a>
                            </td>

                        </tr>
                        @endforeach
                    </table>
                    {{-- <div class="mt-5">
                        {{$date->links()}}
                    </div> --}}
                </div>
            </div>
        </div>
</body>
</html>