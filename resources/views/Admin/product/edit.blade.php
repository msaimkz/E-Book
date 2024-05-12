@extends('Admin.master')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    form {
        max-width: 100%;
        padding: 30px;
        margin: 20px;
        /* border: 1px solid #ccc; */
        /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); */

    }

    label {
        display: block;
        margin-bottom: 10px;
    }

    input[type="text"],
    input[type="number"],
    select,
    textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
textarea{
    height: 150px;
}
    input[type="file"] {
        padding: 10px;
        border-radius: 5px;
    }

    input[type="submit"] {
        padding: 10px 20px;
        margin-bottom: 20px;
        border: none;
        border-radius: 5px;
        color: #fff;
        cursor: pointer;
        background:#007DCC;
    }
    .flex{
        margin: 20px;
        width: 200px;
        overflow: hidden;
        border-radius:10px;
        display:flex;
        gap: 20px;
    }
    .flex img{
   width: 200px;

    }
    </style>
</head>

<body>
    
    <form method="POST" action="{{url('admin/update-Product',$product->id)}}" enctype="multipart/form-data">
        @csrf
        <label for="book-name">Book Name:</label>
        <input type="text" id="name" name="name"  value="{{$product->name}}"><br><br>

        <label for="book-category">Book Category:</label>
        <select id="book-category" name="category">
            <option value="">Select Category</option>
            <option value="Story"  @if($product->category == 'Story') selected @endif>Story</option>
            <option value="General-knowledge"  @if($product->category == 'General-knowledge') selected @endif>General knowledge</option>
            <option value="rogramming"  @if($product->category == 'programming') selected @endif>Programming</option>
        </select><br><br>
        <label for="book-status">Book Status:</label>
        <select id="book-status" name="status">
            <option value="available" @if($product->status == 'available') selected @endif>Available</option>
            <option value="unavailable" @if($product->status == 'unavailable') selected @endif>Un-available</option>
            <!-- Add more options here -->
        </select><br><br>

        <label for="book-author">Book Author:</label>
        <input type="text" id="book-author" name="author" value="{{$product->arthur}}"><br><br>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label"> Book Image</label>
            <input type="file" name="image" class="form-control" id="exampleInputPassword1">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Book PDf</label>
            <input type="file" name="pdf" class="form-control" id="exampleInputPassword1"  value="{{$product->pdf}}">
        </div>

        <label for="book-price">Book Price:</label>
        <input type="text" id="price" name="price"  value="{{$product->price}}"><br><br>

        <label for="book-description">Book Description:</label>
        <textarea id="book-description" name="description" >{{$product->description}}</textarea><br><br>
        <div class="flex">
            <img src="{{asset('images/'.$product->img)}}" alt="">
        </div>
        <input type="submit" value="Edit">
    </form>
</body>

</html>
@endsection