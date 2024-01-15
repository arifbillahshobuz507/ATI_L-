<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function getpdf(){
        $data = [
            [
                "subject" => "Pdf Generate"
            ],
        ];
        return view('pdf.invoicePDF', ['data' => $data]);
    }

    //Download PDF File
    public function downloadPdf(){       
        $pdf = Pdf::loadView('pdf.downloadInvoice');
        return $pdf->download('PDF Generate.pdf');
    }
}
