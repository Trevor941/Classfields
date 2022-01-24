<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Area;
class AreaController extends Controller
{
    public function store(Area $area){

        session()->put('area', $area->slug);
        return redirect()->back();
    }
}
