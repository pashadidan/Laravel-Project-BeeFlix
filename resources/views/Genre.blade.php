<link rel="stylesheet" href="/css/Home.css">
@extends('Layout/navbar')


@section('Home')

{{-- Drama --}}
    <div class="allcon col-md-12 mt-5">
        @foreach ($alltest as $testName)
        <p class="Gtitle font-weight-bold text-light mb-3">{{$testName->name}}</p>
        @endforeach
        <div class="allcontent row mx-auto">
            @foreach ($allCategory as $cate)
            <div class="card mt-1 mr-3 ml-3 zoom" style="width:20rem;">
                <img src="{{URL::asset($cate->photo)}}" class="card-img-top" alt="" style="height: 27rem">
                <div class="card body">
                    <h5 class="text-center card title m-3 font-weight-bold">{{$cate->title}}</h5>
                    <a class="btn btn-secondary"href="/Detail/{{$cate->id}}"> View  Detail</a>
                </div>
            </div>
            @endforeach 
        </div>
    </div>
@endsection