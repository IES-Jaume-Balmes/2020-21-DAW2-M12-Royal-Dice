<!DOCTYPE html>
<html lang="es">
<head>
    @include('layouts/head')
</head>
<body>
    @include('layouts/header')
    <div class="juego">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="height: 394px;">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <a href="{{ route('blackjack') }}">
                <img class="d-block w-100" src="{{ asset('img/blackjack.png') }}" alt="First slide" style="width: auto;height: 394px;"></a>
              </div>
              <div class="carousel-item">
                <a href="{{ route('cartamasalta') }}">
                <img class="d-block w-100" src="{{ asset('img/cartas.png') }}" alt="Second slide" style="width: auto;height: 394px;"></a> 
              </div>
              <div class="carousel-item">
                <a href="{{ route('tragaperras') }}">
                <img class="d-block w-100" src="{{ asset('img/tragaperras.png') }}" alt="Third slide" style="width: auto;height: 394px;">
                <!-- </a> -->
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev" style="top: 100px;width: 6%;position: absolute;padding-bottom: 70px;">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next" style=" 
            left: 1188px;top: 144px;width: 6%;position: absolute;padding-bottom: 120px;"
        >
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

    </div>

</body>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>
        $('.carousel').carousel({
            interval: 3000
        })
    </script>

    
</html>
