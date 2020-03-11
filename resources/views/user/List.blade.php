@extends('user.Layout')
   
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
               <th>Id</th>
               <th> Name</th>
               <th>Email</th>
               <th>Password</th>
               <th>Type</th>
            
               <th colspan="2" class="text-center">Action</th>
            </tr>
         </thead>
         <tbody>
            @foreach($users as $user)
            <tr>
               <td>{{ $user->id }}</td>
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
            @endforeach
 
            @if(count($users) < 1)
              <tr>
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