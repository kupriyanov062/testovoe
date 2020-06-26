<?php

namespace App\Http\Repository;

use Illuminate\Support\Facades\Storage;
use App\{type};

class TypeRepository
{


    public function get_all()
    {
        return type::all();
    }

    public function addArrayDownload($request){
        $array_type_download = [];
        !($request->type_download_up =='1')?:   array_push($array_type_download, $request->type_download_up );
        !($request->type_download_back =='2')?: array_push($array_type_download, $request->type_download_back );
        !($request->type_download_side =='3')?: array_push($array_type_download, $request->type_download_side );
        return $array_type_download;
    }

    public function addArrayBody($request){
        $array_type_body = [];
        !($request->type_body_ref =='1')?:   array_push($array_type_body, $request->type_body_ref );
        !($request->type_body_ten =='2')?: array_push($array_type_body, $request->type_body_ten );
        !($request->type_body_izo =='3')?: array_push($array_type_body, $request->type_body_izo );
        return $array_type_body;
    }

    public function tarifType($type)
    {
        return tarif::where('type',$type)->paginate(9);
    }

    public function tarifID($id)
    {
        return tarif::where('id', $id)->get()[0];
    }

    public function typeBody($id)
    {
        return type_body::where('id',$id)->get()[0];
    }

    public  function typeDownloads($id){
        return type_downloads::where('id',$id)->get()[0];
    }

    public function typeBodyAll()
    {
        return type_body::all();
    }

    public  function typeDownloadsAll(){
        return type_downloads::all();
    }

    public  function tarifOther($type){
        return tarif::where('type',$type)->get();
    }


}
