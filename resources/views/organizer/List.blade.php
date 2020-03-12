@extends('layout.Layout')
   
@section('content')
 <div class="row">
  <div class="col-sm-6">
    <h4>User List</h4>
  </div>
  <div class="col-sm-6 text-right">
    <a href="{{ route('users.create') }}" class="btn btn-success mb-2">Add</a> 
  </div>
</div>
 
 <div class="row">
      <div class="col-12">          
        <table class="table table-bordered" id="laravel_crud">
         <thead>
            <tr>
               <th class="text-center">Id</th>
               <th class="text-center"> Name</th>
               <th class="text-center">Email</th>
               <th class="text-center">Password</th>
               <th class="text-center">Type</th>
            
               <th colspan="2" class="text-center">Action</th>
            </tr>
         </thead>
         <tbody>
            @foreach($users as $user)
            @if( $user->type==$organizerType)
            <tr class="text-center">
               <td>$organizerType {{ $user->id }}</td>
               <td>{{ $user->name }}</td>
               <td>{{ $user->email }}</td>
               <td>{{ $user->password }}</td>
               <td>{{ $user->type }}</td>
            
             
               <td class="text-center">
                <a href="{{ route('users.edit',$user->id)}}" class="btn btn-primary">Edit</a></td>
               <td class="text-center">
               <form action="{{ route('users.destroy', $user->id)}}" method="post">
                {{ csrf_field() }}
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Delete</button>
              </form>
              </td>
            </tr>
            @endif
            @endforeach
 
            @if(count($users) < 1)
              <tr class="text-center">
               <td colspan="10" class="text-center">There are no user available yet!</td>
              </td>
            </tr>
            @endif
         </tbody>
        </table>
        {!! $users->links() !!}
     </div> 
 </div>
 @endsection  