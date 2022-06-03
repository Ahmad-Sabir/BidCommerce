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
<center><h1>Edit product</h1></center>
<div class="container">

    <div class="jumbotron">
{{--        <button  class="btn btn-default"  ><a href="{{url('view123')}}">view product</a> </button>--}}

        <form class="form-horizontal" enctype="multipart/form-data" method="post" action="/updateimage/{{$views->id}}">
         {{csrf_field()}}
            {{method_field('PUT')}}
            <input type="hidden" name="id" class="form-control" value="{{$views->id}}">
           <div class="form-group">
               <label class="control-label col-sm-2" for="email">Name:</label>
               <div class="col-sm-10">
                   <input type="text" class="form-control" name="name"  value="{{$views->name}}">
               </div>
           </div>
           <div class="form-group">
               <label class="control-label col-sm-2" for="email">Email:</label>
               <div class="col-sm-10">
                   <input type="email" class="form-control" name="email" id="email" value="{{$views->email}}" >
               </div>
           </div>
           <div class="form-group">
               <label class="control-label col-sm-2" for="email">Post:</label>
               <div class="col-sm-10">
                   <input type="text" name="post"  class="form-control" value="{{$views->post}}">
               </div>
           </div>
           <div class="form-group">
               <label class="control-label col-sm-2" for="email">Image:</label>
               <div class="col-sm-10">
                   <input type="file" name="image" value="{{$views->image}}" class="custom-file-input">
               </div>
           </div>
           <div class="form-group">
               <div class="col-sm-offset-2 col-sm-10">
                   <button type="submit" name="Submit" class="btn btn-default">Update</button>
               </div>
           </div>
       </form>
   </div>
</div>

</body>
</html>
