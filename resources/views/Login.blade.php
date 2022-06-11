@extends('Layouts.navigation')
@section('content')
<h1>Login Page</h1>
<br>
<br>

<form action="" method="post">
    {{csrf_field()}}

    Email: <input type="email" name="email" value="{{old('email')}}"> </br>
    @error('email')
        <span class="text-danger">{{$message}}</span><br>
    @enderror
    <br>

    Password: <input type="password" name="password"> </br>
    @error('password')
        <span class="text-danger">{{$message}}</span><br>
    @enderror
    <br>

    <input type="submit" value="Login">

</form>
@endsection