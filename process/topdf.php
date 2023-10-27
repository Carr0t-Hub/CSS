<?php

//use mpdf
require_once '../vendor/autoload.php';

//sample html to pdf
//use a file
$html = file_get_contents('printable.php');
//ch

//create pdf instance
$mpdf = new \Mpdf\Mpdf(
    //letter size
    [
        'mode' => 'utf-8',
        'format' => 'Letter',
        //font family
        'default_font' => 'calibri'
    ]
);


$mpdf->WriteHTML($html);

//output pdf
$mpdf->Output();
