<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

    public function index()
    {
    	$cars = Car::all();

    	return view('main.index', compact('cars'));
    }

    public function add()
    {
    	return view('main.add');
    }

    public function contact()
    {
        return view('main.contact');
    }

    public function save(Request $request)
    {
    	$car = new Car();
    	$car->marka = $request->marka;
    	$car->model = $request->model;
    	$car->rocznik = $request->rocznik;
    	$car->save();

    	return view('main.saveSucces');
    }

    public function show(Car $car)
    {
    	return view('main.show', compact('car'));
    }

    public function edit(Car $car)
    {
        return view('main.edit', compact('car'));
    }

    public function editRecord(Car $car,Request $request)
    {     

        DB::table('cars')
            ->where('id', $car->id)
            ->update(array('marka' => $request->marka,'model' => $request->model,'rocznik' => $request->rocznik));
        return view('main.editRecord');
    }

    public function delete(Car $car)
    {     
        DB::table('cars')
            ->where('id', '=', $car->id)->delete();
        return view('main.delete');
    }


}
