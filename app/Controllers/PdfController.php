<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Libraries\PDF;
class PdfController extends BaseController
{
    public function index()
    {
        $pdf = new PDF();
        $pdf->load_view('pdf_template');
    }
}
