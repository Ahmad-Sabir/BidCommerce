<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="jquery/1.9.1/jquery.js"></script>
</head>
<body>
<center><h1>Add product</h1></center>
<div class="container">
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Sorry!</strong> There were more problems with your HTML input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="jumbotron">
      <center>  <a class="btn btn-success btn-lg" href="{{url('prod_view')}}">view product</a>
      </center><br>
        <form class="form-horizontal" enctype="multipart/form-data" method="post" action="{{route('addimage')}}">
         {{csrf_field()}}
           <div class="form-group">
               <label class="control-label col-sm-2" for="email">Name:</label>
               <div class="col-sm-10">
                   <input type="text" class="form-control" name="name"  placeholder="Enter name" >
               </div>
           </div>
           <div class="form-group">
               <label class="control-label col-sm-2" for="email">Email:</label>
               <div class="col-sm-10">
                   <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" >
               </div>
           </div>
           <div class="form-group">
               <label class="control-label col-sm-2" for="email">Post:</label>
               <div class="col-sm-10">
                   <input type="text" name="post"  class="form-control" placeholder="Enter post">
               </div>
           </div>
           <div class="form-group">
               <label class="control-label col-sm-2" for="email">Image:</label>
               <div class="col-sm-10">
                   <input type="file" name="image" class="form-control">
               </div>
           </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Image   2:</label>
                <div class="col-sm-10">
                    <input type="file" name="image2" class="form-control">
                </div>
            </div>
           <div class="form-group">
               <div class="col-sm-offset-2 col-sm-10">
                   <button type="submit" name="Submit" class="btn btn-success">Submit</button>
               </div>
           </div>
       </form>
   </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $(".btn-success").click(function(){
            var lsthmtl = $(".clone").html();
            $(".increment").after(lsthmtl);
        });
        $("body").on("click",".btn-danger",function(){
            $(this).parents(".hdtuto control-group lst").remove();
        });
    });
</script>
</body>
</html>
