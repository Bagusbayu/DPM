<html lang="en">
<head>
    <title>
        Admin DPM
    </title>
    <!-- <link href="css/one-page-wonder.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-default">
<div class="container">
 <h3>Login Admin DPM</h3>
                <hr>
                @if(\Session::has('alert'))
                    <div class="alert alert-danger">
                        <div>{{Session::get('alert')}}</div>
                    </div>
                @endif
                @if(\Session::has('alert-success'))
                    <div class="alert alert-success">
                        <div>{{Session::get('alert-success')}}</div>
                    </div>
                @endif
                <form action="{{ url('/loginPost') }}" method="post">
                {{ csrf_field() }}
                    <div class="row">
                        <div class="col-xl-12 col-md-12">
                            <input type="text" class="form-control" id="username" placeholder="Input User Name" name="username">
                        </div>
                        <div class="col-xl-12 col-md-12"><br>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Masukan Password">
                        </div><br>
                        <div class="col-xl-12 col-md-12"><br>
                            <button type="submit" class="btn btn-md btn-primary" style="width:100%">Login</button>
                            </div>
                    </div>
                </form>
                </div>
</nav>
<div class="clearfix"></div>
    <!-- form itself end -->
</body>
</html>