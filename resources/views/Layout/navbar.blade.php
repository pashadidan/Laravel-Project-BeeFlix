<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/Home.css">
    <title>BeeFlix</title>
</head>

<style>

    .navbar{
      background: transparent !important ;
      transition: 0.5s ease;
    }

    .navbar.scrolled{
      background: #000000 !important;
    }
  </style>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
        <button class="btnnavbar navbar-toggler bg-warning" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navtitle navbar-brand text-warning font-weight-bolder" href="/">BEEFLIX</a>
      
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link text-light" href="/">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="/genre/1">Drama</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="/genre/2">Kids</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="/genre/3">TV Shows</a>
              </li>
          </ul>
        </div>
      </nav>

      @yield('Home')
      @yield('DetailPage')
    
</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" 
crossorigin="anonymous"></script>
<script>
  $(window).scroll(function(){
  $('nav').toggleClass('scrolled', $(this).scrollTop() > 100);
  });
 </script>

</html>