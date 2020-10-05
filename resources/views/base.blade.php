<html lang="en">
<head>
    <!--
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        </meta> -->
    <title>
        Admin Super DPM
    </title>

    <!-- Bootstrap Core CSS -->

    <!-- Custom CSS -->
    <link href="css/one-page-wonder.css" rel="stylesheet"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"  integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="//cdn.ckeditor.com/4.15.0/basic/ckeditor.js"></script>

</head>
<body>
<!-- membuat menu navigasi -->
<nav class="navbar navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"> Admin Super DPM</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="/vadminsuper">Admin <span class="sr-only">(current)</span></a></li>
                <li><a href="/visimisipoltekkes">Visi Misi <span class="sr-only">(current)</span></a></li>
                <li><a href="/vmdpm">Visi Misi  DPM <span class="sr-only">(current)</span></a></li>
                <li><a href="/vanggota">Anggota DPM<span class="sr-only">(current)</span></a></li>
                <li><a href="/vaktivitasdpm">Aktivitas <span class="sr-only">(current)</span></a></li>
                <li><a href="/vphukum">Produk Hukum <span class="sr-only">(current)</span></a></li>
                <li><a href="/vormawa">Ormawa <span class="sr-only">(current)</span></a></li>
                <li><a href="/vaspirasi">Aspirasi <span class="sr-only">(current)</span></a></li>
                <li><a href="/vadvonews">Advo News <span class="sr-only">(current)</span></a></li>
                <li><a href="/vpemira">Pemira <span class="sr-only">(current)</span></a></li>
                 <li><a href="/logout" class="btn btn-primary">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>

@yield('content') {{-- Semua file konten kita akan ada di bagian ini --}}


<div class="clearfix"></div>

<nav class="navbar navbar-default" style="bottom: 0;margin: 0">
    <div class="container">
        <center>

            <ul class="nav navbar-nav">
                <li><a href="#">Copyright @ 2020.</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Developer</a></li>
            </ul>
        </center>
    </div>
</nav>

</body>
<!-- <script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script> -->
 <script>
        CKEDITOR.replace( 'summary-ckeditor' );
</script>
<!--<script>
  var konten = document.getElementById("konten");
    CKEDITOR.replace(konten,{
    language:'en-gb'
  });
  CKEDITOR.config.allowedContent = true;
</script> -->
</html>