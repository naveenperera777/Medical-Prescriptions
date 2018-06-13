<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrescriptionController extends Controller
{

    public function getPrescription()
    {
        return view('Prescriptions.showPrescription');
    }

}
