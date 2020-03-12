@extends('layout.Layout')
 
@section('content')
 
<div class="row">
  <div class="col-sm-6">
    <h4>Edit organizer</h4>
  </div>
  <div class="col-sm-6 text-right">
    <a href="{{ route('organizers.index') }}" class="btn btn-danger mb-2">Go Back</a> 
  </div>    
</div>
<hr />
  
<form action="{{ route('organizers.update', $organizer_info->id) }}" method="POST" name="update_organizer">
  {{ csrf_field() }}
  @method('PATCH')
    
  <div class="row">
      <div class="col-md-12">
          <div class="form-group">
              <strong>Name</strong>
              <input type="text" name="name" class="form-control" placeholder="Enter Name" value="{{ $organizer_info->name }}">
              <span class="text-danger">{{ $errors->first('name') }}</span>
          </div>
      </div>
    
      </div>
      <div class="col-md-12">
          <div class="form-group">
              <strong>Email</strong>
              <textarea class="form-control" col="4" name="email" placeholder="Enter Email" >{{ $organizer_info->email }}</textarea>
              <span class="text-danger">{{ $errors->first('email') }}</span>
          </div>
      </div>
      <div class="col-md-12">
          <div class="form-group">
              <strong>Password</strong>
              <textarea class="form-control" col="4" name="password" placeholder="Enter Password" >{{ $organizer_info->password }}</textarea>
              <span class="text-danger">{{ $errors->first('password') }}</span>
          </div>
      </div>
  
    
      <div class="col-md-12">
          <button type="submit" class="btn btn-primary">Submit</button>
          <a href="{{ route('organizers.index') }}" class="btn btn-danger">Cancel</a> 
      </div>
  </div>
    
</form>
@endsection