<?php
namespace App\Http\ViewComposer;
use Illuminate\View\View;
use App\Models\Area;
class AreaComposer{


    private $area;
    public function  compose(View $view){

       if(! $this->area){
        $this->area = Area::where('slug', session()->get('area', config()->get('classfields.default.area')))->first();
       }
        return $view->with('area',$this->area);

    }
}







?>