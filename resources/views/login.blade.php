@extends('layouts/login-regis')

@section('title','Login')

@section('form') 
    <h5 class="text-center text-muted mb-4">Login</h5>
<form method="POST" action="{{route('login')}}">    
    {{ csrf_field() }}
        <div class="form-group">                           
            <label for="exampleInputEmail1">NIM</label>
            <input type="text" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp"  name="email">
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1" name="password">
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            
        </div>
        <input type="submit" value="LOGIN" class="btn btn-danger w-100" >
    </form>                  
@endsection