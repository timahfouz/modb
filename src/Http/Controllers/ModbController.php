<?php

namespace Segmatech\LaravelModb\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ModbController extends Controller
{
    public function index()
    {
        return view('Modb::index');
    }
    
    public function store(Request $request)
    {
        $output = [];
        $retval=null;
        $url = __DIR__.'/../../../../';
        
        foreach ($request->models as $model) {
            $modelName = $model['name'];
            $options = (isset($model['migration']) || isset($model['factory'])) ? '-' : '';
            if (isset($model['migration'])) {
                $options .= 'm';
            }
            if (isset($model['factory'])) {
                $options .= 'f';
            }

            exec("cd $url && php artisan make:model $modelName $options 2>&1", $output,$retval);
        }

        return redirect()->back();
    }
}