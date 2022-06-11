@extends('Layouts.navigation')
@section('content')
<h1>Ragistration Page</h1>
<br>
<br>

<form action="" method="post">
    {{csrf_field()}}
    Name : <input type="text" value="{{old('name')}}" name="name"> </br>
    @error('name')
    <span class="text-danger">{{$message}}</span><br>
    @enderror
    <br>

    Id : <input type="text" name="id" value="{{old('id')}}"> </br>
    @error('id')
        <span class="text-danger">{{$message}}</span><br>
    @enderror
    <br>

    Date of Birth: <input type="date" name="dob" value="{{old('dob')}}"> </br>
    @error('dob')
        <span class="text-danger">{{$message}}</span><br>
    @enderror
    <br>

    Email: <input type="email" name="email" value="{{old('email')}}"> </br>
    @error('email')
        <span class="text-danger">{{$message}}</span><br>
    @enderror
    <br>

    Phone: <input type="number" name="phone" value="{{old('phone')}}"> </br>
    @error('phone')
        <span class="text-danger">{{$message}}</span><br>
    @enderror
    <br>

    Password: <input type="password" name="password"></br>
    @error('password')
        <span class="text-danger">{{$message}}</span><br>
    @enderror
    <br>
    Confirm Password : <input type="password" name="conf_password"></br>
    @error('conf_password')
        <span class="text-danger">{{$message}}</span><br>
    @enderror
    <br>

    <input type="submit" value="Create">

</form>
@endsection