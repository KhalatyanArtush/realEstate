<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Posts;

use App\Http\Requests\creatRequest;


class PostsController extends Controller
{

    public function submit(creatRequest $req){


//        dd($req->input('key'));

        $posts = new Posts();
        $posts->key = $req->input('key');
        $posts->title = $req->input('title');
        $posts->agent = $req->input('agent');
        $posts->sum = $req->input('sum');
        $posts->buy_rent = $req->input('buy_rent');
        $posts->country = $req->input('country');
        $posts->region = $req->input('region');
        $posts->type = $req->input('type');
        $posts->building_type = $req->input('building_type');
        $posts->floor = $req->input('floor');
        $posts->room = $req->input('room');
        $posts->swimming = $req->input('swimming');
        $posts->informations = $req->input('informations');
        $posts->busy = $req->input('busy');
        $posts->lat = $req->input('long');
        $posts->long = $req->input('lat');

        $posts->save();
        return redirect()->route('addpost')-> with('succes', 'true');
    }

    public function allData(Request  $request){
        $posts = new Posts();
        $agentFilter= ($request->name !='') ? $request->name : '';
        $buy_rentFilter= ($request->buy_rent !='') ? $request->buy_rent : '';
        $countryFilter= ($request->country !='') ? $request->country : '';
        $regionFilter= ($request->region !='') ? $request->region : '';
        $typeFilter= ($request->type !='') ? $request->type : '';
        $building_typeFilter= ($request->building_type !='') ? $request->building_type : '';
        $floorFilter= ($request->floor !='') ? $request->floor : '';
        $swimmingFilter= ($request->swimming !='') ? $request->swimming : '';
        $roomFilter= ($request->room !='') ? $request->room : '';
        $firstSumFilter= ($request->firstSum !='') ? $request->firstSum : '0';
        $endSumFilter= ($request->endSum !='') ? $request->endSum : '9999999999';

//        dd($posts->all());
//        return view('/home', ['data' => $posts->get()]);

            return view('/home', ['data' => $posts->Where('agent', $agentFilter)->orWhereBetween('sum',[ $firstSumFilter , $endSumFilter])
                ->orWhere('buy_rent', $buy_rentFilter)
                ->orWhere('country', $countryFilter)->orWhere('region', $regionFilter)->orWhere('type', $typeFilter)->orWhere('building_type', $building_typeFilter)
                ->orWhere('floor', $floorFilter)->orWhere('room', $roomFilter)->orWhere('swimming', $swimmingFilter)->get()]);

    }


//    public function filterdatas(Request  $request){
//        $filterposts = new Posts();
//        $filter= $request->filter;
////        dd($posts->all());
//        return view('/home', ['data' => $filterposts->where('agent', $filter)->orWhere('sum', $filter)->orWhere('buy_rent', $filter)
//            ->orWhere('country', $filter)->orWhere('region', $filter)->orWhere('category', $filter)->orWhere('swimming', $filter)->orWhere('room', $filter)->get()]);
//    }



    public function SinglePost (Request  $request){
        $postsSingle = new Posts();
//        dd($postsSingle->get()) ;
        $key = $request->key;
//        return view('/single', ['datasingle' => $posts->get()]);
        return view('/single', ['datasingle' => $postsSingle->where('key', $key)->first()]);

//            dd($key) ;
    }


}
