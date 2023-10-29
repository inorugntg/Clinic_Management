<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\MedicalDevice;
use Illuminate\Http\Request;
use App\Models\Medicine;  // Add this at the top

class AdminController extends Controller
{
    public function addview()
    {
        return view('admin.add_doctor');
    }

    public function upload(Request $request)
    {
        $doctor = new Doctor;
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
        // Update this line to use 'doctor_schedule' instead of 'schedule'
        $doctor->schedule = $request->doctor_schedule;
        $doctor->save();

        return redirect()->back()->with('message', 'Doctor Data Added Successfully');
    }


    public function showappointment()
    {
        $data = appointment::all();
        return view('dokter.showappointment', compact('data'));
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
        // Update this line to use 'doctor_schedule' instead of 'schedule'
        $doctor->schedule = $request->doctor_schedule;
        $doctor->save();

        return redirect()->back()->with('message', 'Doctor Data Updated Successfully');
    }

    public function medical_device()
    {
        $medicalDevices = MedicalDevice::all();
        return view('admin.medical_device', compact('medicalDevices'));
    }

    public function medical_device_add()
    {
        return view('admin.add_medical_device');
    }

    public function store_medical_device(Request $request)
    {
        $request->validate([
            'device_name' => 'required|string|max:255',
            'serial_number' => 'required|integer',
            'speciality' => 'required|string',
            // Add more validation rules for other fields as needed
        ]);

        MedicalDevice::create([
            'device_name' => $request->device_name,
            'serial_number' => $request->serial_number,
            'speciality' => $request->speciality,
            // Add other fields here as needed
        ]);

        return redirect()->route('admin.medical_device')->with('success', 'Medical Device added successfully.');
    }

    public function medical_device_edit($id)
    {
        $device = MedicalDevice::findOrFail($id);
        return view('admin.edit_medical_device', compact('device'));
    }

    public function update_medical_device(Request $request, $id)
    {
        $request->validate([
            'device_name' => 'required|string|max:255',
            'serial_number' => 'required|integer',
            'speciality' => 'required|string',
            // Add more validation rules for other fields as needed
        ]);

        $medicalDevice = MedicalDevice::findOrFail($id);
        $medicalDevice->update($request->all());

        return redirect()->route('admin.medical_device')->with('success', 'Medical Device updated successfully.');
    }

    public function destroy_device($id)
    {
        $medicalDevice = MedicalDevice::findOrFail($id);
        $medicalDevice->delete();

        return redirect()->route('admin.medical_device')->with('success', 'Medical Device deleted successfully.');
    }

    public function medicine()
    {
        $medicines = Medicine::with('doctor')->get();
        return view('admin.medicine', compact('medicines'));
    }

    public function add_medicine()
    {
        return view('admin.add_medicine');
    }

    public function store_medicine(Request $request)
    {
        // Add validation rules as needed
        $request->validate([
            'medicine_name' => 'required|string|max:255',
            'stock_quantity' => 'required|integer',
            'price' => 'required|string',
            'description' => 'required|string',
            'doctor' => 'required|string',
        ]);

        // Create medicine
        // Adjust this part based on your Medical model and database structure
        Medicine::create([
            'medicine_name' => $request->medicine_name,
            'stock_quantity' => $request->stock_quantity,
            'price' => $request->price,
            'description' => $request->description,
            'doctor' => $request->doctor,
        ]);

        return redirect()->route('admin.medicine')->with('success', 'Medicine added successfully.');
    }
}
