@extends('layout.Layout')
 
@section('content')
<div class="row">
    <div class="col-sm-6">
        <h4>Add Challenge</h4>
    </div>
    <div class="col-sm-6 text-right">
        <a href="{{ route('challenges.index') }}" class="btn btn-danger mb-2">Go Back</a> 
    </div>    
</div>
<hr />
 
<form action="{{ route('challenges.store') }}" method="POST" name="challenge">
    {{ csrf_field() }}
      
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <strong>Title</strong>
                <input type="text" name="title" class="form-control" placeholder="Enter Title">
                <span class="text-danger">{{ $errors->first('title') }}</span>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>Description</strong>
                <input type="text" name="description" class="form-control" placeholder="Enter Challenge Description">
                <span class="text-danger">{{ $errors->first('description') }}</span>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <strong>Start Date</strong>
                <input type="date" id="startDate" name="startDate" />
                <span class="text-danger">{{ $errors->first('startDate') }}</span>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>End Date</strong>
                <input type="date" id="endDate" name="endDate" />
                <span class="text-danger">{{ $errors->first('endDate') }}</span>
            </div>
        </div>
        

        <div class="col-md-12">
            <div class="form-group">
                <strong>Status</strong>
                <select class="form-control" col="4" name="status">
    <option value="ongoing">Ongoing</option>
    <option value="closed">Closed</option>
</select>
               
                <span class="text-danger">{{ $errors->first('status') }}</span>
            </div>
        </div>
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('challenges.index') }}" class="btn btn-danger">Cancel</a> 
        </div>
    </div>     
</form>
@endsection