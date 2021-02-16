<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\movies;
use App\episodes;
use App\genres;

class datacontroller extends Controller
{
    public function showDrama(){
        $variabelDrama1 = movies::select('*')->where('genre_id','=','1')->get();
        $variabelKids1 = movies::select('*')->where('genre_id','=','2')->get();
        $variabelTvShow1 = movies::select('*')->where('genre_id','=','3')->get();
        return view('Home', ['allDrama'=>$variabelDrama1,'allKids'=>$variabelKids1,'allTvShow'=>$variabelTvShow1]);
    }

    public function showData($id){
        $variabelDummy = movies::select('genre_id')->where('id','=',$id)->get();
        $variabelData1 = movies::select('*')->where('id','=',$id)->get();
        $variabelPagination = episodes::select('*')->where('movie_id','=',$id)->paginate(3);
        $variabelGenre = genres::select('*')->where('id','=',$variabelDummy[0]->genre_id)->take(1)->get();
        return view('DetailPage',['allData1'=>$variabelData1, 'allPagination'=>$variabelPagination,'allGenre'=>$variabelGenre]);
    }

    public function showGenre($genre_id){
        $variabelCategory = movies::select('*')->where('genre_id','=',$genre_id)->get();
        // $variabelDummy = movies::select('genre_id')->where('id','=',$genre_id)->get();
        // $variabelCateName = genres::select('name')->where('id','=',$variabelDummy[0]->genre_id)->take(1)->get();
        $variabeltest = genres::select('name')->where('id','=',$genre_id)->take(1)->get();
        return view('Genre',['allCategory'=>$variabelCategory, 'alltest'=>$variabeltest]);
    }
}
