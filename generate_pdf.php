<?php
require_once('tcpdf/tcpdf.php');

// Get the values from the table
$product_names = $_POST['product_name'];
$counts = $_POST['count'];

// Create a new PDF document
$pdf = new TCPDF();

// Add a page
$pdf->AddPage();

// Loop through the values and add them to the PDF
for ($i = 0; $i < count($product_names); $i++) {
    $product_name = $product_names[$i];
    $count = $counts[$i];
    $pdf->Write(0, "$product_name: $count\n");
}

// Output the PDF to the browser
$pdf->Output('example.pdf', 'I');
?>
