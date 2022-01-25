<x-app-layout>

<div class="container">
    <h2 class="text-center p-3">User Table</h2>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">status</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody> 
  @forelse ($alldata as $key=>$user)
    <tr>
      <th scope="row">{{$key+1 }}</th>
      <td>{{ $user->name }}</td>
      <td>{{ $user->email }}</td>
      <td>{{ $user->status }}</td>
      <td class="actions">

            @if($user->status == 'Active')
                <a href="{{route('updateUserStatus' , ['user_id' => $user->id , 'status_code' => 'block'])}}" class="btn" title="Block User"><i class="fas fa-user-alt-slash"></i> </a>
                                
                    @else
                        <a href="{{route('updateUserStatus' , ['user_id' => $user->id , 'status_code' => 'Active'])}}" class="btn" title="Active User"><i class="fas fa-user-check"></i></a>
                    @endif

                <!-- edit -->
                <a href="{{ route('editUser',$user->id) }}"  title="Edit User">
                    <button class="btn btn-sm btn-icon btn-pure btn-default on-default m-r-5 button-edit" data-toggle="tooltip" data-original-title="Edit"> 
                        <i class="fa fa-pencil"></i>
                    </button>
                </a>
                <a href="{{ route('deleteUser', $user->id) }}" class="btn btn-sm btn-icon btn-pure btn-default on-default " title="Delete User"><i class="fa fa-trash"></i></a>
        </td>
    </tr>
    @empty
    <h4>No data</h4>
    @endforelse
  </tbody>
</table>


{{$alldata->links()}}


<br>
        @if(session('success_msg'))
            <span class="text-center" style="color:green; padding:5px; border:1px solid green">{{session('success_msg')}}</span>
        @endif

</div>




</x-app-layout>
