<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssetController extends Controller
{
    //
    public function hello(){
        return 'Hello World';

    }
    /*public function store(){
        $asset = new Asset;
        $asset->title = Input::get('title');
        $asset->description = Input::get('description');
        $asset->save();
        return redirect('assets');
    }*/
    // injecting dependencies examples.  if you prefer to use the request object instead of the facade, just typehint Illuminate\Http\Request in your  parameter.
    public function store(Illuminate\Http\Request $request){
        $asset = new Asset;
        $asset->title = $request->input('title');
        $asset->description = $request->input('description');
        $asset->save();
        return redirect('assets');

    }
}
