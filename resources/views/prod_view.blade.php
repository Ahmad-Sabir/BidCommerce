<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
   <center> <h1>Products from database</h1></center>
    <div class="jumbotron">
        <center>
        <a class="btn btn-success btn-lg" href="{{url('add_product')}}">Add Product</a> </center>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Post</th>
                <th>Image</th>
                <th>Image:2</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($views ?? '' as $view)



            <tr>
                <td>{{$view->id}}</td>
                <td>{{$view->name}}</td>
                <td>{{$view->email}}</td>
                <td>{{$view->post}}</td>
                <td><img src="{{asset('uploads/products/'.$view->image)}}" width="100px;" height="100px;" alt="Image"></td>
                <td><img src="{{asset('uploads/products/'.$view->image2)}}" width="100px;" height="100px;" alt="Image2"></td>
                <td><a href="/editimage/{{$view->id}}" class="btn btn-success"> Edit</a> </td>
                <td><a href="/deleteimage/{{$view->id}}" class="btn btn-danger"> Delete</a> </td>

            </tr>
            @endforeach
            </tbody>
        </table>

    </div>

</div>
</body>
</html>
