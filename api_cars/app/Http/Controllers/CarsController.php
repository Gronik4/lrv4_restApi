<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use App\Http\Requests\CarsRequest;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $objList = Cars::paginate(10);
        return view('/cars_list', [
            'listCars'=> $objList,
            'listHead'=> 'В БД cars:'
        ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/add_cars', ['addCars'=> 'Добавить новое авто']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CarsRequest $request)
    {
        $brand = $request-> brand;
        $model = $request-> model;
        $price = $request-> price;
        //$valid = Cars::created($request-> validate());
        
            DB::table('cars')->insert([
                'brand'=> $brand,
                'model'=> $model,
                'price'=> $price
            ]);
            return redirect('/cars_list');
        
        /*$list = new Project('1');
        $list-> brand = request('brand');
        $list-> model = request('model');
        $list-> save();
        return $request-> all();*/
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Cars::findOfFaill($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CarsRequest $request, Cars $cars)
    {
        $cars-> fill($request-> validate());
        return $cars-> save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cars $cars)
    {
        if ($cars-> delete()) {
            return response(null, 404);
        }
        return null;
    }
}
