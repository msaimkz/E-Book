@extends('Admin.master')
@section('content')
  <!-- Form Start -->
  <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Basic Form</h6>
                            <form>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Book Name</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Book Price</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="form-floating mb-3">
                                <select class="form-select" style="width:200px; height:70px;">
                                    <option selected>Book Categroy</option>
                                    <option value="story">Story</option>
                                    <option value="coding">Coding</option>
                                    <option value="Knowledge">Knowledge</option>
                                </select>
                                <!-- <label for="floatingSelect">Works with selects</label> -->
                            </div>
                                <button type="submit" class="btn btn-primary">Add</button>
                            </form>
                        </div>
                    </div>
                   
                </div>
            </div>
            <!-- Form End -->
@endsection