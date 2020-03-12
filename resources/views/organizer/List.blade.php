@extends('layout.Layout')
   
@section('content')
 <div class="row">
  <div class="col-sm-6">
    <h4>organizer List</h4>
  </div>
  <div class="col-sm-6 text-right">
    <a href="{{ route('organizers.create') }}" class="btn btn-success mb-2">Add</a> 
  </div>
</div>
 
 <div class="row">
      <div class="col-12">          
        <table class="table table-bordered" id="laravel_crud">
         <thead>
            <tr>
               <th>Id</th>
               <th> Name</th>
               <th>Email</th>
               <th>Password</th>
            
            
               <th colspan="2" class="text-center">Action</th>
            </tr>
         </thead>
         <tbody>
            @foreach($organizers as $organizer)
            <tr>
               <td>{{ $organizer->id }}</td>
               <td>{{ $organizer->name }}</td>
               <td>{{ $organizer->email }}</td>
               <td>{{ $organizer->password }}</td>
              
            
             
               <td class="text-center">
                <a href="{{ route('organizers.edit',$organizer->id)}}" class="btn btn-primary">Edit</a></td>
               <td class="text-center">
               <form action="{{ route('organizers.destroy', $organizer->id)}}" method="post">
                {{ csrf_field() }}
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Delete</button>
              </form>
              </td>
            </tr>
            @endforeach
 
            @if(count($organizers) < 1)
              <tr>
               <td colspan="10" class="text-center">There are no organizer available yet!</td>
              </td>
            </tr>
            @endif
         </tbody>
        </table>
        {!! $organizers->links() !!}
     </div> 
 </div>
 @endsection  