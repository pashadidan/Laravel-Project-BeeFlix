<link rel="stylesheet" href="/css/Home.css">
@extends('Layout/navbar')


@section('Home')

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="\Assets\Banner\Running-Man-banner-DF.jpg" class="d-block w-100" style="height: 40rem;" alt="...">
          </div>
          <div class="carousel-item">
            <img src="\Assets\Banner\itaewonclass_banner.png" class="d-block w-100" style="height: 40rem;" alt="...">
          </div>
          <div class="carousel-item">
            <img src="\Assets\Banner\naruto_banner.jpg" class="d-block w-100" style="height: 40rem;" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

    {{-- Drama --}}
        <div class="allcon col-md-12 mt-5">
            <p class="Gtitle font-weight-bold text-light mb-3">Drama</p>
            <div class="allcontent row mx-auto">
                @foreach ($allDrama as $d)
                <div class="card mt-1 mr-3 ml-3 zoom" style="width:18rem;">
                    <img src="{{URL::asset($d->photo)}}" class="card-img-top" alt="" style="height: 24rem">
                    <div class="card body">
                        <h5 class="text-center card title m-3 font-weight-bold">{{$d->title}}</h5>
                        <a class="btn btn-secondary"href="/Detail/{{$d->id}}"> View  Detail</a>
                    </div>
                </div>
                @endforeach 
            </div>
        </div>
    
    {{-- Kids --}}
        <div class="allcon col-md-12 mt-5">
            <p class="Gtitle font-weight-bold text-light mb-3">Kids</p>
            <div class="allcontent row mx-auto">
                @foreach ($allKids as $k)
                <div class="card mt-1 mr-3 ml-3 zoom" style="width:18rem;">
                    <img src="{{URL::asset($k->photo)}}" class="card-img-top" alt="" style="height: 24rem">
                    <div class="card body">
                        <h5 class="text-center card title m-3 font-weight-bold">{{$k->title}}</h5>
                        <a class="btn btn-secondary"href="/Detail/{{$k->id}}"> View  Detail</a>
                    </div>
                </div>
                @endforeach 
            </div>
        </div>
    
    {{-- TV Show --}}
        <div class="allcon3 col-md-12 mt-5">
            <p class="Gtitle font-weight-bold text-light mb-3">TV Shows</p>
            <div class="allcontent row mx-auto">
                @foreach ($allTvShow as $t)
                <div class="card mt-1 mr-3 ml-3 zoom" style="width:18rem;">
                    <img src="{{URL::asset($t->photo)}}" class="card-img-top" alt="" style="height: 24rem">
                    <div class="card body">
                        <h5 class="text-center card title m-3 font-weight-bold">{{$t->title}}</h5>
                        <a class="btn btn-secondary"href="/Detail/{{$t->id}}"> View  Detail</a>
                    </div>
                </div>
                @endforeach 
            </div>
        </div>

@endsection