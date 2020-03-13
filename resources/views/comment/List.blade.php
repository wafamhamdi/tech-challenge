@extends('layout.Layout')
   
@section('content')<!DOCTYPE html>
<form action="{{ route('comments.store' ) }}" method="POST" name="comment">
{{ csrf_field() }}

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
    
      <h4>{{Auth::user()->name }}</h4>
      <ul class="nav nav-pills nav-stacked">
      <li>{{ Auth::user()->email }}</li>
      <br>
      <button type="button" data-toggle="modal" data-target="#infos" class="btn btn-primary">Submit Your Code</button>
        <div class="modal" id="infos">
      <div class="modal-dialog">
        <div class="modal-content">
         <div class="modal-header">
        <h4 class="modal-title">
        <label>{{ $challenge->title }}</label>
        <br>
       <label>Participant Name:{{Auth::user()->name }}</label>
        
        </h4>
        <button type="button" class="close" data-dismiss="modal">
          <span>&times;</span>
        </button>            
         </div>
         <div class="modal-body">
         <form action="{{ route('comments.store') }}" method="POST" name="code">
         {{ csrf_field() }}
         <textarea class="form-control" col="4" name="code" placeholder="Enter your code" ></textarea>

          </div>
          <div class="modal-footer">
           <button type="button" class="btn btn-primary" data-dismiss="modal">submit</button>
           </form>
         </div>
       </div>
      </div>
      </div>

     
       
      </ul><br>
    
    </div>

    <div class="col-sm-9">
      <h4><small>Welcome to The challenge</small></h4>
      <hr>
      <h2>{{ $challenge->title }}</h2>
      <h5><span class="glyphicon glyphicon-time"></span> {{ $challenge->endDate }}
  
      </h5>
      <h5><span class="label label-success">Ongoing</span> </h5><br>
      <h2>Details</h2>
      <p>{{ $challenge->description }}</p>

      <br>
      <br>

      <a  data-toggle="modal" data-target="#infos" >Winner Code</a>
   <div class="modal" id="infos">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Plus d'informations</h4>
        <button type="button" class="close" data-dismiss="modal">
          <span>&times;</span>
        </button>            
      </div>
      <div class="modal-body">
        Le Tigre (Panthera tigris) est un mammifère carnivore de la famille des félidés...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>
      <br>
      
      <br>
      

      <h4>Leave a Comment:</h4>
      

        <div class="form-group">
          <textarea name="content" id="content" class="form-control" rows="3" required></textarea>
        </div>
        <input type="text" hidden id="challenge_id" name="challenge_id" value="{{ $challenge->id }}"/> 
        <input type="text" hidden id ="participant_id"  name="participant_id" value="{{Auth::user()->id }}" /> 
        <button type="submit" class="btn btn-primary">Submit</button>
    
      <br><br>
      
      <p><span class="badge">{{count($challengeComment)}}</span> Comments:</p><br>
      
      <div class="row">
        <div class="col-sm-2 text-center">
          <img src="bandmember.jpg" class="img-circle" height="65" width="65" alt="Avatar">
        </div>
        @foreach($challengeComment as $comment)
        <div class="col-sm-10">
          <h4>wafa <small>Sep 29, 2015, 9:12 PM</small></h4>
          <br>
          <P>dzfqefrzefrj </P>
        </div>
        @endforeach
        
        
         
        
      </div>

    </div>
  </div>
</div>
</form>


 @endsection  