<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function addview()
    {
        return view('admin.add_doctor');
    }

    public function upload(Request $request)
    {
        $doctor = new Doctor; // Pastikan huruf "D" pada "Doctor" huruf besar sesuai dengan nama model Anda
        $image = $request->file('file');

        if ($image) {
            $imagename = time() . '-' . $image->getClientOriginalName();
            $image->move('doctorimage', $imagename);
            $doctor->image = $imagename;
        }

        $doctor->name = $request->name;
        $doctor->phone = $request->number;
        $doctor->room = $request->room;
        $doctor->speciality = $request->speciality;
        $doctor->save();

        return redirect()->back()->with('message', 'Doctor Data Added Successfully');
    }

    public function showappointment()
    {
        $data = appointment::all();
        return view('admin.showappointment', compact('data'));
    }

    public function approved($id)
    {
        $data = appointment::find($id);
        $data->status = 'approved';
        $data->save();
        return redirect()->back();
    }

    public function canceled($id)
    {
        $data = appointment::find($id);
        $data->status = 'canceled';
        $data->save();
        return redirect()->back();
    }

    public function showdoctor()
    {
        $data = doctor::all();
        return view('admin.showdoctor', compact('data'));
    }

    public function deletedoctor($id)
    {
        $data = doctor::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function updatedoctor($id)
    {
        $data = doctor::find($id);
        return view('admin.update_doctor', compact('data'));
    }

    public function editdoctor(Request $request, $id)
    {
        $doctor = Doctor::find($id);

        // Handle image upload if a new image is provided
        $image = $request->file('file');
        if ($image) {
            $imagename = time() . '-' . $image->getClientOriginalName();
            $image->move('doctorimage', $imagename);
            $doctor->image = $imagename;
        }

        // Update other fields
        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->speciality = $request->speciality;
        $doctor->room = $request->room;
        $doctor->save();

        return redirect()->back()->with('message', 'Doctor Data Updated Successfully');
    }

    public function medicaldeviceintegration()
    {
        return view('admin.medicaldeviceintegration');
    }

    public function medicine()
    {
        return view('admin.medicine');
    }

    // public function doctor_schedule()
    // {
    //     return view('admin.doctor_schedule');
    // }
}
