<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
use PDF;

class PdfFeedback extends Controller
{
    public function getAllFeedback()
    {
        $feedback = Feedback::all();
        return view('feedback',compact('feedback'));
    }
    public function downloadPDF()
    {
        $feedback = Feedback::all();
        $pdf = PDF::loadview('feedback',compact('feedback'));
        return $pdf->download('feedback.pdf');
    }
}
