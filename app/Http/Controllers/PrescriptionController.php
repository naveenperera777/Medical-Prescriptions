<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\patient;
Use PDF;

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
    
    public function generatePrescription($id){

        $prescription = patient::find($id);
		// $userid  = Auth::user()->id;
		// $student = Student::where( 'user_id', '=', $userid )->first();

		$pdf = PDF::loadView( 'Prescriptions/convertedPdf', compact('prescription'));

		return $pdf->download( 'Prescriptions.pdf' );
        
    }
}
