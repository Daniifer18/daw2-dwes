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
    $pdf->Cell(60,20,' Carta de presentacion ');
    $pdf->ln(20);
    $pdf->Cell(10,20,"-Nombre: " . $_GET["nombre"]);
    $pdf->ln(10);
    $pdf->Cell(10,20,"-Empresa: " .$_GET["empresa"]);
    $pdf->ln(10);
    $pdf->Cell(10,20,"-Representante: " . $_GET["representante"]);
    $pdf->ln(10);
    $pdf->Cell(10,20,"-Fecha: " . $_GET["fecha"]);

    // return the generated output
    $pdf->Output();
?>