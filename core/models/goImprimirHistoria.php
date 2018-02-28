<?php
require_once(ACCESO_DENEGADO . 'controllers/accesoDenegado.php');

if ($_POST["generaHistoriaPediatrica"]=="true") {
    $fecha = date('d/m/Y');
}

require_once(LIBS . 'fpdf/html2pdf.php');

class PDF extends PDF_HTML {
	// Cabecera de página
		function Header() {
		    // Logo
		    $this->Image('view/img/img2.jpg',4,0,145,100); //X(4), Y(0), Largo(145), Alto(100)
		    $this->SetDrawColor(255,0,0);
		    $this->Ln(1);
		}

		// Pie de página
		function Footer() {
			$text01 = utf8_decode('Km 23 Carretera Junquito - Colonia Tovar');
			$text02 = utf8_decode('Vargas - Venezuela.');
		    $this->SetDrawColor(255,0,0);
		    $this->Line(10,195,130,195);
		    // Posición: a 1,5 cm del final
		    $this->SetY(-30);
		    // Arial italic 8
		    $this->SetFont('Arial','I',6);
		    // Número de página
		    $this->SetY(-25);
		    $this->Cell(1);
		    $this->Cell(0,5,$text01,0,0,'C');
		    $this->SetY(-20);
		    $this->Cell(0,10,$text02,0,0,'C');
		}
	}
	
	$pdf=new PDF('P','mm','a4');
	$pdf->AddPage();
	$pdf->SetAutoPageBreak('auto');
	$pdf->SetLeftMargin(5);
	$pdf->SetRightMargin(5);
	$pdf->Line(6,5,6,210); //coordenadas X(6-6(margen)) Y(5-210(largo)) Linea Izquierda-Derecha
	$pdf->Line(134,5,134,210);//coordenada X(134-134(margen)) Y(5-210(largo))Linea Derecha-Izquierda
	$pdf->Line(6,5,134,5);//coordenada X(6-134) Y(5-5(ancho))Linea Superior (arriba-abajo)
	$pdf->Line(6,210,134,210);//coordenada X(6-134) Y(210-210)Linea Inferior
	$pdf->Line(6,37,134,37);//coordenada X(6-134) Y(38-38)Segunda Linea antes de la fecha
	$pdf->Line(6,45,134,45);//coordenada X(6-134) Y(45-45)Tercera Linea despues de la fecha
	$pdf->Line(6,60,134,60);//coordenada X(6-134) Y(60-60)Cuarta Linea despues del nombre y apellido
	$pdf->Line(70,45,70,60); //coordenadas X(70-70) Y(45-60) Linea divisoria
	$pdf->Line(6,72,134,72);//coordenada X(6-134) Y(60-60)Quinta Linea despues del primer parrafo
	$pdf->Line(6,150,134,150);//coordenada X(6-134) Y(150-150)Sexta Linea despues las indicaciones medicas
	$pdf->Line(85,150,85,185);//coordenada X(85-85) Y(150-185)Segunda Linea divisoria
	$pdf->Line(6,168,85,168);//coordenada X(6-85) Y(173-173)Septima Linea
	$pdf->Line(6,185,134,185);//coordenada X(6-134) Y(185-185)Octava Linea
	$pdf->SetFont('Arial','B',9);
	$titlefecha = utf8_decode($fecha);
	$pdf->text(6,100,$titlefecha);//las coordenadas son X(70) Y(148)
	$pdf->Output('historiaPediatrica.pdf','I');

	exit;
	
	


?>