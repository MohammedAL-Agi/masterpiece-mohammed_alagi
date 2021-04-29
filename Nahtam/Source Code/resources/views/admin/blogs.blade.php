@extends('layouts.app')

@section('content')
<div class="section__content section__content--p30">
  <div class="container-fluid">
    <div class="row m-t-30">
      <div class="col-md-12">
        <h1>Manage Blogs</h1>
        <!-- DATA TABLE-->
        <div class="table-responsive m-b-40">
          <table class="table table-borderless table-data3">
            <thead>
              <tr>
                <th>ID</th>
                <th>Customer ID</th>
                <th>Heading</th>
                <th>Status</th>
                <th>View</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($blogs as $blog)
              <tr>
                <td>{{$blog->id}}</td>
                <td>{{$blog->customer_id}}</td>
                <td>{{$blog->heading}}</td>
                <td>
                  <select id="{{$blog->id}}" name="status" class="form-control" onchange="statusChange({{$blog->id}})">
                    <option value="Pending">Pending
                    </option>
                    <option value="Approved" {{$blog->status == "Approved" ? "selected" : ""}}>Approved</option>
                  </select>
                </td>
                <td><a href="{{ asset('admin/blogs/view/'. $blog->id)}}" class="btn myColor">View</a></td>
                  <td>
                      <form action="{{ route('admin.deleteBlog', $blog->id)}}" method="post">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-danger" type="submit">Delete</button>
                      </form>
                  </td>
              </tr>
              @endforeach

            </tbody>
          </table>
        </div>
        <!-- END DATA TABLE-->
      </div>
    </div>
    <div class="row pagination_box mt-70">
      <div class="col-12">
        {{$blogs->links()}}
      </div>
    </div>
  </div>
</div>
<script>
  function statusChange (id){
    var e = document.getElementById(id);
    var status = e.value;
    document.location.href = `/admin/blogs/${id}/${status}`;
  }
  //   $('#status').on('change', function() {
//   alert( this.value );
// });
</script>
@endsection
