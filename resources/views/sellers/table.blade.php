@section('content')

<div>
    <a style="margin: 19px;" href="{{ route('services.create') }}" class="btn btn-primary">Create Service</a>
    </div>  

<div class="row">
<div class="col-sm-12">   
  <table class="table table-striped">
    <thead>
        <tr> <!-- Services here -->
          <th>ID</th>  
           <th>Service Type</th></br>
           <th>Service Status</th>   
          <th colspan = 4>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($sellers as $seller)
        <tr><!-- letak service_type sini-->
            <td>{{$seller->id}}</td>
            <td>{{$seller->seller_username}}</td>
            <td>{{$seller->location}}</td> 
            <td>
                <a href="{{ route('sellers.edit',$seller->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{route('sellers.destroy', $seller->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>

@endsection

