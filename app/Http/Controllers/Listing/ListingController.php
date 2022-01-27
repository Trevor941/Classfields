<?php

namespace App\Http\Controllers\Listing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Area, Category};

class ListingController extends Controller
{
    
    public function index(Area $area, Category $category){
            dd($area);
    }
}
