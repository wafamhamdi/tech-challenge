@extends('layout.Layout')
 
@section('content')
 
<div class="row">
  <div class="col-sm-6">
    <h4>Edit Challenge</h4>
  </div>
  <div class="col-sm-6 text-right">
    <a href="{{ route('challenges.index') }}" class="btn btn-danger mb-2">Go Back</a> 
  </div>    
</div>
<hr /> 
<form action="{{ route('challenges.update', $challenge_info->id) }}" method="POST" name="update_challenge">
  {{ csrf_field() }}
  @method('PATCH')
  <div class="row">
      <div class="col-md-12">
          <div class="form-group">
              <strong>Title</strong>
              <input type="text" name="title" class="form-control" placeholder="Enter Title" value="{{ $challenge_info->title }}" >
              <span class="text-danger">{{ $errors->first('title') }}</span>
          </div>
      </div>
    
      </div>
      <div class="col-md-12">
          <div class="form-group">
              <strong>Description</strong>
              <textarea class="form-control" col="4" name="description" placeholder="Enter Description" >{{ $challenge_info->description }}</textarea>
              <span class="text-danger">{{ $errors->first('description') }}</span>
          </div>
      </div>
      <div class="col-md-12">
            <div class="form-group">
                <strong>Start Date</strong>
                <input type="date" id="startDate"   name="startDate" value="{{ $challenge_info->startDate }}" />
                <span class="text-danger">{{ $errors->first('startDate') }}</span>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>End Date</strong>
                <input type="date" id="endDate" name="endDate" value="{{ $challenge_info->endDate }}"  />
                <span class="text-danger">{{ $errors->first('endDate') }}</span>
            </div>
        </div>
     
      <div class="col-md-12">
          <button type="submit" class="btn btn-primary">Submit</button>
          <a href="{{ route('challenges.index') }}" class="btn btn-danger">Cancel</a> 
      </div>
  </div>
    
</form>

@endsection