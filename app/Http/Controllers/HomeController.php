<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Appointment;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::id()) {
            return redirect('home');
        } else {
            $doctor = doctor::all();
            return view('user.home', compact('doctor'));
        }
    }

    public function redirect()
    {
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->usertype == '0') {
                $doctor = Doctor::all();
                return view('user.home', compact('doctor'));
            } elseif ($user->usertype == '1') {
                $data = doctor::all();
                return view('admin.showdoctor', compact('data'));
            } elseif ($user->usertype == '2') {
                $data = appointment::all();
                return view('dokter.showappointment', compact('data'));
            }
        } else {
            return redirect()->back();
        }
    }


    public function appointment(Request $request)
    {
        $data = new Appointment; // Make sure the model name is capitalized
        $data->name = $request->name;
        $data->email = $request->email;
        $data->date = $request->date;
        $data->phone = $request->number; // Corrected to 'number' based on your form input name
        $data->message = $request->message;
        $data->doctor = $request->doctor;
        $data->status = 'In Progress';

        if (Auth::check()) { // Check if the user is authenticated
            $data->user_id = Auth::user()->id;
        }

        $data->save();

        return redirect()->back()->with('message', 'Appointment Request Successful. We will contact you soon');
    }

    public function myappointment()
    {
        if (Auth::id()) {
            $userid = Auth::user()->id;
            $appoint = appointment::where('user_id', $userid)->get();
            // dd($appoint);
            return view('user.my_appointment', compact('appoint'));
        } else {
            return redirect()->back();
        }
    }

    public function cancel_appoint($id)
    {
        $data = appointment::find($id);
        $data->delete();
        return redirect()->back();
    }

    // public function doctor_schedule()
    // {
    //     return view('user.doctor_schedule');
    // }
}
