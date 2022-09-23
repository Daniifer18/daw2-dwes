<?php 

    ob_end_clean();
    require('fpdf.php');

    // Instantiate and use the FPDF class 
    $pdf = new FPDF();
  
    //Add a new page
    $pdf->AddPage();
    
    // Set the font for the text
    $pdf->SetFont('Arial', 'B', 18);
    
    // Prints a cell with given text 
    $nb = $pdf->Cell(60,20,$_GET["nombre"]);
    $empresa = $pdf->Cell(60,20,$_GET["empresa"]);
    $repre = $pdf->Cell(60,20,$_GET["representante"]);
    $date = $pdf->Cell(60,20,$_GET["fecha"]);

    // return the generated output
    $pdf->Output();
?>