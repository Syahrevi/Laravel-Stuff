<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @extends('layouts\mainlayout')
@section('content')
   <div class="album text-muted">
     <div class="container">
       <div class="row">
         <h1>This is a demo text</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas dolor vulputate quam convallis consequat. Quisque eu lorem eget magna lacinia suscipit. Maecenas condimentum vehicula eros. Fusce massa lacus, blandit et leo sed, accumsan commodo sem. Sed eget pulvinar tellus. Praesent ex diam, sodales at consequat id, viverra ut dolor. In eget orci sit amet magna sagittis mattis sit amet sed augue. Vivamus facilisis libero ligula, vel sodales ipsum sollicitudin id. Duis vitae urna rutrum, dignissim arcu ac, elementum augue. Quisque id interdum ligula. Donec tincidunt feugiat massa sed aliquam. Duis eu vehicula turpis.</p>
</div>
     </div>
   </div>
@endsection
<b></b>
<!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bukan Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <style>
a:link {
  color: grey;
  background-color: transparent;
  text-decoration: none;
}
a:visited {
  color: grey;
  background-color: transparent;
  text-decoration: none;
}
a:hover {
  color: white;
  background-color: transparent;
  text-decoration: none;
}
a:active {
  color: white;
  background-color: transparent;
  text-decoration: none;
}
</style>

    </head>
    <body style="background-color: black;font-family: helvetica">
            <div class="content">
                <div style="color: white;text-align: center;" >
                    <h2> Muhammad Syahrevi:  The Profile</h2>
                </div>

                <div style="color: white;text-align: center;margin-top: 5%;">
                    <h5>
            Muhammad Syahrevi adalah seorang siswa yang sedang dalam masa belajar di SMK Taruna Bhakti Depok dan berjurusan 
            <br>
            RPL(Rekayasa perangkat lunak) yang berkelas XII RPL 2 dan masih berstatus N_E_ 
            
            <img src="{{ ('/img/aqua.png') }}" width="40" style="opacity: 0.2;" >

            <div style="text-align: center;margin-top: 5%;border-radius: 50%;">
                <img src="{{ ('/img/foto.jpg') }}" width="200" style="border-radius: 100%;">
            </div>
            
                    </h5>
                </div>

                <div style="text-align: center;margin-top: 10%;">
                    <h4>
                    <a href="/profile">Profile</a>
                    <a href="/experience">Experience</a>
                    <a href="/portofolio">Portofolio</a>
                    </h4>
                </div>
            </div>
        </div>
        
  </body>
    
    
</html>
