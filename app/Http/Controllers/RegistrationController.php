<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Registration;

use App\Payment;

use Response;

class RegistrationController extends Controller
{
	public function adminIndex()
	{
		$newClients = Registration::where('status', '=', '0')->get();

		$totalReservation = Registration::all();

		$countTotalReservation = count($totalReservation);
		$countNewClients = count($newClients);

		return view('index_admin')->with(['newClient' => $countNewClients, 'totalReservation' => $countTotalReservation]);
	}
    public function store(Request $request)
    {
    	$reserve = new Registration;

        $reserve->fname = $request->fname;
        $reserve->mname = $request->mname;
        $reserve->sname = $request->sname;
        $reserve->contactNo = $request->contactNumber;
        $reserve->email = $request->email;
        $reserve->people = $request->people;
        $reserve->court = $request->court;
        $reserve->date = $request->date;
        $reserve->startTime = $request->startTime;
        $reserve->endTime = $request->endTime;

        $reserve->save();

        return Response::json(array('message' => 'Success'));
    }

    public function reserve()
    {
    	$reserve = Registration::where('status', '=', '0')
    							->orderBy('id', 'desc')
    							->orderBy('status', 'asc')
    							->get();
		return view('reservation_admin')->with('reservations', $reserve);
    }

    public function reject($id)
    {
    	$reserve = Registration::find($id);

    	$reserve->status = 2;

    	$reserve->save();
    }
    public function payment($id, Request $request)
    {
    	$payment = new Payment;

    	$payment->registrationID = $id;
    	$payment->payment = $request->payment;

    	$payment->save();

    	$reserve = Registration::find($id);

    	$reserve->status = 1;

    	$reserve->save();
    }
}
