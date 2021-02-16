<link rel="stylesheet" href="/css/Home.css">
@extends('Layout/navbar')


@section('DetailPage')

<div class = "Home">

    
    @foreach ($allData1 as $a)
    <div>
        <p class="titledrama">
             {{$a->title}}
        </p>
    </div>

    <div class="dramagen"> 
        <div>
            <img class="imgdrama" src={{ asset($a->photo) }} alt="vector">
        </div>

        <div class="description">
            <div>
                <p>{{$a->description}}</p>
            </div>
            <div>
                <p class="rating">
                    Rating: {{$a->rating}}
                </p>
            </div>
            <div>
                @foreach ($allGenre as $g)
                <p>
                    Genre: <a href="/genre/{{$a->genre_id}}">{{$g->name}}</a> 
                </p>
                @endforeach
            </div>
        </div>

        <div class="wraper row">
            <div class="conPagi col-md-6">
                <div>
                    <p class="epTitle">
                        Episode:
                    </p>
                </div>
                {{-- Episode Table --}}
                <div class="setTable">
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col" style="width:5rem">Episode</th>
                            <th scope="col" style="width:25rem">Title</th>
                          </tr>
                        </thead>
                        @foreach ($allPagination as $ap)
                        <tbody>
                          <tr>
                            <th scope="row" style="width:5rem">{{$ap->episode}}</th>
                            <td style="width:25rem">{{$ap->title}}</td>
                          </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>

            </div>
    
            <div class="pegipegi col-md-6">
                <div class="optionbar">
                    {{ $allPagination->links() }}
                </div>
            </div>
        </div>
       
    </div>
    @endforeach
</div>
@endsection