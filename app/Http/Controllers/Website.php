<?php

namespace App\Http\Controllers;

use App\Models\Data;
use App\Models\Image;
use App\Models\Team;
use Illuminate\Http\Request;

class Website extends Controller
{
    public function index()
    {
        
    }
    public function website()
    {
        $images = Image::all();
        $data['images'] = $images;
        $text = Data::all();
        $data['datai'] = $text;
        $team = Team::all();
        $data['teamimage'] = $team;
        
        // dd($text);

        return view('welcome')->with($data);
    }


}
