<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\czesciCar;
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
    public function czesci()
    {
        $czesci = czesciCar::all();

        return view('main.czesci', compact('czesci'));
    }

    public function add()
    {
    	return view('main.add');
    }

    public function addCzesc()
    {
        $cars = Car::all();
        return view('main.addCzesc',compact('cars'));
    }

    public function contact()
    {
        return view('main.contact');
    }

    public function save(Request $request)
    {
        if (($request->marka != "")&&($request->model != "")&&($request->rocznik != ""))
        {
            $car = new Car();
            $car->marka = $request->marka;
            $car->model = $request->model;
            $car->rocznik = $request->rocznik;
            $car->save();

            return view('main.saveSucces');
        }
        else
        {
            return view('main.saveFail');
        }
    }

    public function saveFail()
    {
        return view('main.saveFail');
    }

    public function saveCzesc(Request $request)
    {
        $cars = Car::all();
        $licznik=0;
        foreach($cars as $car)
        {
            $idCars[$licznik]=$car->id;
            $licznik++;
        }

        $success= 0;
        if (($request->nazwa != "")&&($request->idCar != ""))
        {
            for ($i=0; $i<=$licznik-1; $i++) 
            {
                if ($idCars[$i]==$request->idCar) 
                {
                    $czesc = new czesciCar();
                    $czesc->nazwa = $request->nazwa;
                    $czesc->idCar = $request->idCar;
                    $czesc->save();

                    $success++;
                }  
            }
        }
        if ($success>0) 
        {
            return view('main.saveCzescSucces');
        }   
        else
        {
            return view('main.saveCzescFail');
        }
     }

    public function saveCzescFail()
    {
        return view('main.saveFailCzesc');
    }

    public function show(Car $car)
    {
        $czesci = czesciCar::all();
    	return view('main.show', compact('car','czesci'));
    }
    public function search()
    {
        $cars = Car::all();
        return view('main.search', compact('cars'));
    }

    public function searchSuccess(Request $request)
    {
        $cars = Car::all();
        $czesci = czesciCar::all();
        return view('main.searchSuccess',compact('czesci','cars'), compact('request'));
    }

    public function editCzesc(czesciCar $czesc)
    {
        $cars = Car::All();
        return view('main.editCzesc',compact("cars"), compact('czesc'));
    }

    public function editCzescSuccess(czesciCar $czesc,Request $request)
    {
        $validate = false;

        if (($request->nazwa != "")||($request->idCar != ""))
        {
            $validate = true;
        }
        else
        {
            return view('main.falseEdit');  
        }   

        if ($validate==true) 
        {
            $czesc->nazwa = $request->nazwa;
            $czesc->idCar = $request->idCar;
            $czesc->save();

            return view('main.editCzescSuccess');  
        }    
    }

    public function deleteCzesc(czesciCar $czesc)
    {     
        $czesc->delete();

        return view('main.deleteCzesc');
    }

    public function edit(Car $car)
    {
        return view('main.edit', compact('car'));
    }

    public function editRecord(Car $car,Request $request)
    {
        $validate = false;

        if (($request->marka != "")||($request->model != "") ||($request->rocznik != ""))
        {
            $validate = true;
        }
        else
        {
            return view('main.falseEdit');  
        }   

        if ($validate==true) 
        {
            $car->marka = $request->marka;
            $car->model = $request->model;
            $car->rocznik = $request->rocznik;
            $car->save();

            return view('main.editRecord');  
        }    
    }

    public function falseEdit(Car $car)
    {
        return view('main.falseEdit', compact('car'));
    }

    public function falseEditCzesci(czesciCar $czesci)
    {
        return view('main.falseEditCzesci', compact('czesci'));
    }

    public function delete(Car $car)
    {     
        $car->delete();

        return view('main.delete');
    }


}
