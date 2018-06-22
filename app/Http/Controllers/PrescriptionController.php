<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\patient;
use App\PatientPrescription;
Use PDF;

class PrescriptionController extends Controller
{

    public function getPrescription()
    {
        return view('Prescriptions.showPrescription');
    }

    public function storePrescriptions(Request $request){

        // dd($request->brand);
        
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
        // dd($prescription->id);

        $drugs = new PatientPrescription();
        $drugs->patient_id=$prescription->id;
        $drugs->brand = $request->brand;
        $drugs->save();
       
        $drugReport = PatientPrescription::where('patient_id','=', $prescription->id )->first();

        // dd($drugReport);
            
        return view('Prescriptions.PrescriptionReport',['lastID'=>$lastInsertedID,
                                                         'prescription'=>$prescription,
                                                         'drugReport'=>$drugReport]);


    }
    
    public function generatePrescription($id){

        $prescription = patient::find($id);
        $drugs = PatientPrescription::where('patient_id','=', $prescription->id )->first();
		
		$pdf = PDF::loadView( 'Prescriptions/convertedPdf', compact('prescription','drugs'));

		return $pdf->download( 'Prescriptions.pdf' );
        
    }
}
