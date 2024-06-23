<h1> User Detail </h1>
<a href="{{route('show')}}">Home</a>
@foreach ($data as $id=>$user)
<h2>ID : {{$user->id}}</h2>
<h2>User : {{$user->name}}</h2>
<h2>Email : {{$user->email}}</h2>
{{-- <h2>Age :{{$user->age}}</h2> --}}
    
@endforeach