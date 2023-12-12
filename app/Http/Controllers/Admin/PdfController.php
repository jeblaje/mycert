<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use setasign\Fpdi\Fpdi;

class PdfController extends Controller
{
    
    public function gen(Certificate $file){

        // return mb_strlen($file->student->name);
        $pdf = public_path("certf.pdf");
        $this->processPdf($pdf, $file);
        
        
        // $pdfOutputPath = public_path('certf-ouput.pdf');
        // return response()->file($pdfOutputPath);
    }



    public function processPdf($file, Certificate $document) {
        
        $fpdi = new Fpdi();
        $count = $fpdi->setSourceFile($file);

        
        $template = $fpdi->importPage(1);
        $size = $fpdi->getTemplateSize($template);
        $fpdi->addPage($size['orientation'],array($size['width'],$size['height']));
        $fpdi->useTemplate($template);

        // NAME STUDENT
        $fpdi->SetFont("Arial","",30);
        $fpdi->SetTextColor(255,0,0);
        $left = 75;
        $top = 118;
        $text = $document->student->name;
        if (mb_strlen($document->student->name) > 28) {
            $left = 70;
        }

        if (mb_strlen($document->student->name) < 22) {
            $left = 90;
        }

        if (mb_strlen($document->student->name) < 17) {
            $left = 100;
        }

        $fpdi->Text($left, $top, $text);

        // DAY STUDENT
        $fpdi->SetFont("Arial","",14);
        $fpdi->SetTextColor(255,0,0);
        $left = 218;
        $top = 170;
        $text = $document->day;
        if ($document->day > 9) {
            $left = 217;
        }
        $fpdi->Text($left, $top, $text);

        // // MONTH STUDENT
        $fpdi->SetFont("Arial","",13);
        $fpdi->SetTextColor(255,0,0);
        
        $monthh = "";
        if ($document->month == "1") {
            $monthh = "Enero";
        }

        if ($document->month == "2") {
            $monthh = "Febrero";
        }

        if ($document->month == "3") {
            $monthh = "Marzo";
        }
        
        if ($document->month == "4") {
            $monthh = "Abril";
        }

        if ($document->month == "5") {
            $monthh = "Mayo";
        }

        if ($document->month == "6") {
            $monthh = "Junio";
        }

        if ($document->month == "7") {
            $monthh = "Julio";
        }

        if ($document->month == "8") {
            $monthh = "Agosto";
        }

        if ($document->month == "9") {
            $monthh = "Septiembre";
        }

        if ($document->month == "10") {
            $monthh = "Octubre";
        }

        if ($document->month == "11") {
            $monthh = "Noviembre";
        }

        if ($document->month == "12") {
            $monthh = "Diciembre";
        }

        $left = 130;
        $top = 180;
        if (mb_strlen($monthh) <= 7) {
            $left = 134;
        }

        $text = $monthh;
        $fpdi->Text($left, $top, $text);

        // YEAR STUDENT
        $fpdi->SetFont("Arial","",14);
        $fpdi->SetTextColor(255,0,0);
        $left = 188;
        $top = 180;
        $text = $document->year;
        $fpdi->Text($left, $top, $text);

        return $fpdi->Output('I', 'generated.pdf');

    }
}
