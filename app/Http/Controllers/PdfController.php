<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;

class PdfController extends Controller
{
    public function userCertificat()
    {
        $user = Auth::user();
        $pdf = Pdf::loadView('pdf.document', compact('user'));

        return $pdf->download('certificat-usuari.pdf');
    }
}
