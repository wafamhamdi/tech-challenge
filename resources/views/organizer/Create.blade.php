@extends('layout.Layout')
 
@section('content')
<div class="row">
    <div class="col-sm-6">
        <h4>Add User</h4>
    </div>
    <div class="col-sm-6 text-right">
        <a href="{{ route('users.index') }}" class="btn btn-danger mb-2">Go Back</a> 
    </div>    
</div>
<hr />
 
<form action="{{ route('users.store') }}" method="POST" name="user">
    {{ csrf_field() }}
      
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <strong>Name</strong>
                <input type="text" name="name" class="form-control" placeholder="Enter your Name">
                <span class="text-danger">{{ $errors->first('name') }}</span>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>Email</strong>
                <input type="text" name="email" class="form-control" placeholder="Enter your email">
                <span class="text-danger">{{ $errors->first('email') }}</span>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>Password</strong>
                <input type="text" name="password" class="form-control" placeholder="Enter your Password">
                <span class="text-danger">{{ $errors->first('password') }}</span>
            </div>
        </div>
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('users.index') }}" class="btn btn-danger">Cancel</a> 
        </div>
    </div>     
</form>
@endsection