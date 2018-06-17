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
        
        $report = new patient();
        $report->first_name = $request->fname;
        $report->last_name = $request->lname;
        $report->age = $request->age;
        $report->gender = $request->gender;
        $report->diagnosis = $request->diagnosis;
        $report->remarks = $request->remarks;
        $report->save();

        $lastInsertedID = $report->id;
        $prescription= patient::find( $lastInsertedID );
            
        return view('Prescriptions.PrescriptionReport',['lastID'=>$lastInsertedID,
                                                         'prescription'=>$prescription]);
    }

}
