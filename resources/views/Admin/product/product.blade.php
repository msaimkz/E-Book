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

    textarea {
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
        background: #007DCC;
    }
    </style>
</head>

<body>

    <form method="POST" action="{{url('admin/store-Product')}}" enctype="multipart/form-data">
        @csrf
        <label for="book-name">Book Name:</label>
        <input type="text" id="book-name" name="name"><br><br>

        <label for="book-category">Book Category:</label>
        <select id="book-category" name="category">
            <option value="">Select Category</option>
            <option value="Story">Story</option>
            <option value="General-knowledge">General knowledge</option>
            <option value="proagramming">Proagramming</option>
        </select><br><br>
        <label for="book-status">Book Status:</label>
        <select id="book-status" name="status">
            <option value="available">Available</option>
            <option value="unavailable">Un-available</option>
            <!-- Add more options here -->
        </select><br><br>
        <label for="book-status">Book Quality</label>
        <select id="book-status" name="quality">
            <option value="">Select Quality</option>
            <option value="popular">Popular</option>
            <option value="expensive">Expensive</option>
            <option value="simple">Simple</option>
            <!-- Add more options here -->
        </select><br><br>

        <label for="book-author">Book Author:</label>
        <input type="text" id="book-author" name="author"><br><br>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label"> Book Image</label>
            <input type="file" name="image" class="form-control" id="exampleInputPassword1">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Book PDf</label>
            <input type="file" name="pdf" class="form-control" id="exampleInputPassword1">
        </div>

        <label for="book-price">Book Price:</label>
        <input type="text" id="price" name="price"><br><br>

        <label for="book-description">Book Description:</label>
        <textarea id="book-description" name="description"></textarea><br><br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>
@endsection