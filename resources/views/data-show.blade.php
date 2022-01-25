<x-app-layout>

<div class="container">
    
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Number</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">State</th>
      <th scope="col">Zip</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody> 
  @forelse ($alldata as $key=>$data)
    <tr>
      <th scope="row">{{$key+1 }}</th>
      <td>{{ $data->number }}</td>
      <td>{{ $data->first_name }}</td>
      <td>{{ $data->last_name }}</td>
      <td>{{ $data->email }}</td>
      <td>{{ $data->state }}</td>
      <td>{{ $data->zip }}</td>
      <td>{{ $data->created_at }}</td>
    </tr>
    @empty
    <h4>No data</h4>
    @endforelse
  </tbody>
</table>


{{$alldata->links()}}


</div>




</x-app-layout>
