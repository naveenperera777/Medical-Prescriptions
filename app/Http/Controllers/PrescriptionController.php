<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\patient;

class PrescriptionController extends Controller
{

    public function getPrescription()
    {
        return view('Prescriptions.showPrescription');
    }

    public function storePrescriptions(Request $request){
        // dd($request->fname);
        $report = new patient();
        $report->first_name = $request->fname;
        $report->last_name = $request->lname;
        $report->age = $request->age;
        $report->gender = $request->gender;
        $report->diagnosis = $request->diagnosis;
        $report->remarks = $request->remarks;
        $report->save();

        return view('Prescriptions.PrescriptionReport');
    }

}
