<?php

namespace Usuario\MpdfTemplate303;

class Modelo303Render
{
    public static function render()
    {
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->SetDocTemplate(__DIR__ . '/../template/plantilla-modelo-303.pdf');

        $mpdf->AddPage();
        $mpdf->SetFont('dejavu');
        $mpdf->WriteText(66, 55, 'Aquí va el nombre del cliente');


        $mpdf->Output('ejemplo-303.pdf');
    }
}