
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Alll user</title>
</head>
<body>
    <h1> All User listing</h1>
        <div class="container mt-5">
            <div class="row">
                {{-- <a href=""></a> --}}
                @php
                    if(isset($msg))
                    echo '<span class="color-success">'.$msg.' <span>';
                @endphp
                <div class="col-6">
                    <a href="{{route('show')}}" class="btn btn-dark">Home</a>
                    <form action="{{route('update', $user->id)}}" class="form mt-2" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" class="form-control m-2" placeholder="Name" value="{{ $user->name }}">
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" class="form-control m-2" placeholder="Email" value="{{ $user->email }}">
                        </div>
                        <div class="form-group">
                            <input type="text" name="age" class="form-control m-2" placeholder="Age" value="{{ $user->age }}">
                        </div>
                        <div class="form-group">
                            <input type="text" name='city' class="form-control m-2" placeholder="City" value="{{ $user->city }}">
                        </div>
                        <input type="submit" name='submit' value="submit" class="btn btn-primary form-control m-2">
                    </form>
                </div>
            </div>
        </div>
</body>
</html>