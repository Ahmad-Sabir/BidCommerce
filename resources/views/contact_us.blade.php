@extends('header')
@section('content')
    <div class="center_content">
        <div class="center_title_bar_contact">Contact Us</div>
        <div class="welc1"><center>Please Leave Your Message to contact us.</center></div><br><br>
        <div id="contact" class="container">
            <div class="row">
                <div class="col-md-4">
                    <p><span class="glyphicon glyphicon-user"></span> &nbsp; &nbsp;Leave A Message.</p>
                    <p><span class="glyphicon glyphicon-map-marker"></span> &nbsp; Lahore, Pakistan</p>
                    <p><span class="glyphicon glyphicon-phone"></span> &nbsp; Phone: +92305 5563217</p>
                    <p><span class="glyphicon glyphicon-envelope"></span>&nbsp; Email: usmanathar33m@gmail.com</p>
                </div>
                <form action="" method="post">

                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                            </div>
                            <div class="col-sm-6 form-group">
                                <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                            </div>
                        </div>
                        <textarea class="form-control" id="comments" name="comment" placeholder="Comment" rows="5"></textarea>
                        <br>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <input name="submit" value="Send" class="btn pull-right" type="submit">

                            </div>
                        </div>
                </form>
            </div>
    </div>
    </div>

@endsection
