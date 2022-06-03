@extends('layouts.app')
    <!DOCTYPE html>
<html lang="en">
<head>

        <link rel="stylesheet" href="css/bootstrap.css">



    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> Dashboard</title>
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="css_admin/sb-admin-2.css" rel="stylesheet">
    <!-- <link href="css/sb-admin-2.min.css" rel="stylesheet"> -->
    <link href="css_admin/common.css" rel="stylesheet">
</head>
<body id="page-top">
<!-- Page Wrapper -->


@section('content')
    @if (session('status'))
        {{ session('status') }}
    @endif
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand" href="{{url('home')}}">
                <div class="sidebar-brand-icon">
                    <img src="img/logo.png" alt="eshop" class="img-fluid">
                </div>

            </a>
            <a class="sidebar-brand p-0" href="">
                <div class="sidebar-brand-icon">
                    <img src="" alt="image" class="img-fluid main_img">
                </div>
                <div class="sidebar-brand p-0 mb-3"> usman </div>
            </a>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{{url('home')}}">
                    <span>Dashboard</span></a>
            </li>
            <!-- Heading -->
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link collapsed" href="{{url('../products')}}" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">

                    <span>Products </span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="py-2 collapse-inner rounded">

                        <a class="collapse-item nav-link collapsed multi-collapse" href=""  data-toggle="collapse" data-target="#mine_1" aria-expanded="false" aria-controls="mine_1">Products</a>
                        <div id="mine_1" class="collapse">
                            <div class="py-2 collapse-inner rounded">
                                <!-- <h6 class="collapse-header">Marco economics:</h6> -->
                                <a class="collapse-item" href="">New Product</a>
                                <a class="collapse-item" href="">Edit Product</a>
                                <a class="collapse-item" href="">Delete Product</a>

                            </div>
                        </div>

                        <a class="collapse-item nav-link collapsed multi-collapse" href=""  data-toggle="collapse" data-target="#mine_4" aria-expanded="false" aria-controls="mine_4">Product Category</a>
                        <div id="mine_4" class="collapse">
                            <div class="py-2 collapse-inner rounded">
                                <!-- <h6 class="collapse-header">Marco economics:</h6> -->
                                <a class="collapse-item" href="">New category</a>
                                <a class="collapse-item" href="">Edit Category</a>
                                <a class="collapse-item" href="">Delete Category</a>

                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">

                    <span>Notification</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">
                    <span>Management</span></a>
            </li>



        </ul>
        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="topbar">


                        @if (Route::has('login'))
                            @auth

                            @else
                                <li><i class="ti-user"></i> <a href="{{ route('login') }}">Login</a></li>
                                @if (Route::has('register'))
                                    <li><i class="ti-power-off"></i><a href="{{ route('register') }}">Register</a></li>
                                @endif
                            @endauth

                        @endif

                    </div>

                    <div >
                        <h1><center>Products</center></h1><br>
                        <table class="table table-striped table-bordered table-hover order-column" style="width:80%">
                            <thead>
                            <tr>
                                <th>
                                    category_id
                                </th>
                                <th>
                                    category name
                                </th>
                                <th>
                                    catimage
                                </th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data ?? '' as $row)
                                <tr>
                                    <td>
                                        {{$row->categoryid}}
                                    </td>
                                    <td>
                                        {{$row->categoryname}}
                                    </td>
                                    <td>
                                        {{$row->catimage}}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
@endsection

<!-- End of Page Wrapper -->



</div>

</body>
</html>
