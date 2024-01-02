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

        $si = [
            'W' => $size['width'], //254.0
            'H' => $size['height'] //190.5
        ];

        // dd($si);
        // NAME STUDENT
        $fpdi->SetFont("Times","I",30);
        // $fpdi->SetTextColor(255,0,0);
        $text = $document->student->name;
        $fpdi->SetY(85);
        $fpdi->Cell(0,11,$text,0,0,'C');

        // DAY STUDENT
        $fpdi->SetFont("Times","I",13);
        // $fpdi->SetTextColor(255,0,0);
        $left = 166;
        $top = 130;
        $text = $document->day;
        if ($document->day > 9) {
            $left = 165;
        }
        $fpdi->Text($left, $top, $text);

        // MONTH STUDENT
        $fpdi->SetFont("Times","I",13);
        // $fpdi->SetTextColor(255,0,0);
        
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

        $left = 198;
        $top = 130;
        if (mb_strlen($monthh) <= 7) {
            $left = 199;
        }

        $text = $monthh;
        $fpdi->Text($left, $top, $text);

        // YEAR STUDENT
        $fpdi->SetFont("Times","I",13);
        // $fpdi->SetTextColor(255,0,0);
        $left = 137;
        $top = 136;
        $text = $document->year;
        $fpdi->Text($left, $top, $text);

        // DNI STUDENT
        $fpdi->SetFont("Times","I",13);
        // $fpdi->SetTextColor(255,0,0);
        $fpdi->SetXY(28, 95);
        $text = $document->student->dni;
        $fpdi->Cell(0,11,$text,0,0,'C');

        // EXPEDICION STUDENT
        $fpdi->SetFont("Times","I",13);
        // $fpdi->SetTextColor(255,0,0);
        $fpdi->SetXY(150, 95);
        $text = $document->student->locate_expe_dni;
        // $text = $document->student->exoedience;
        $fpdi->Cell(0,11,$text,0,0,'C');



        // TEXTO CURSO STUDENT
        $fpdi->SetFont("Times","I",20);
        // $fpdi->SetTextColor(255,0,0);
        $text = 'Por su destacada participación en el curso ';
        $fpdi->SetY(105);
        $fpdi->MultiCell(0, 7, utf8_decode($text), 0, 'C');


        // CURSO STUDENT
        $fpdi->SetFont("Times","I",20);
        // $fpdi->SetTextColor(255,0,0);
        $text = $document->course->name;
        $fpdi->MultiCell(0, 7, utf8_decode($text), 0, 'C');
        
        
        return $fpdi->Output('I', 'generated.pdf');
    }
}
