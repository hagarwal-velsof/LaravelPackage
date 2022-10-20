<?php

namespace SpinWheel\SpinWheel\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\Code;
use App\Models\CodeAttempt;
use App\Models\User;
use Config;
use Illuminate\Support\Facades\Log;
use Session;
use Illuminate\Support\Facades\Http;
use Illuminate\Database\QueryException;

class SpinWheelMainController extends Controller
{

    /*
     * Function to show the form
     */
    public function index()
    {
        return view('home');
    }

    /*
     * Function to show the spin wheel
     */
    public function SpinTheWheel()
    {
		
		$segments = array(
                array(
                    'id' => 1,
                    'label' => "CASH Rs.50",
                    'availability' => array('is_available' => 'true'),
                ),
                array(
                    'id' => 2,
                    'label' => "CASH RS.25",
                    'availability' => array('is_available' => 'true'),
                ),
                array(
                    'id' => 3,
                    'label' => "CASH RS.20",
                    'availability' => array('is_available' => 'true'),
                ),
                array(
                    'id' => 4,
                    'label' => "100 Loyalty Points",
                    'availability' => array('is_available' => 'true'),
                ),
            );
            return view('SpinWheel::spinWheel', compact(['segments']));
			
			
			
	    

    }
}
