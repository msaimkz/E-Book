@extends('Admin.master')
@section("content")
<style>

tbody tr th img {
    border-radius: 5px;
    width: 80px;

}
</style>
<a href="{{url('admin/Addproduct')}}" class="btn btn-primary m-5">Add Product</a>
<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">All Product</h6>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Image</th>
                                <th scope="col">Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Author</th>
                                <th scope="col">Categroy</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($product as $prd)
                            <tr>
                                <th><img src="{{asset('images/'.$prd->img)}}" alt=""></th>
                                <th>{{$prd->name}}</th>
                                <th>{{$prd->price}}</th>
                                <th>{{$prd->arthur}}</th>
                                <th>{{$prd->category}}</th>
                                <th>{{$prd->status}}</th>
                                <th>
                                    <a href="{{url('admin/edit-Product',$prd->id)}}" class="btn btn-warning">Edit</a>
                                    <a href="{{url('admin/delete-Product',$prd->id)}}" class="btn btn-danger">delete</a>
                                </th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Table End -->
@endsection