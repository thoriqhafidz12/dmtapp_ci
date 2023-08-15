<?php

namespace App\Libraries;

use Dompdf\Dompdf;

class PDF {

    protected $dompdf;

    public function __construct() {
        $this->dompdf = new Dompdf();
    }

    public function load_view($view, $data = array()) {
        $html = view($view, $data);
        $filename = 'Pendaftaran Kredit.pdf';
        $this->dompdf->loadHtml($html);
        $this->dompdf->setPaper('F4', 'portrait');
        $this->dompdf->render();
        $this->dompdf->stream($filename, ['Attachment' => false]);
    }
}
