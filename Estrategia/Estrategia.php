<?php

interface Estrategia {

	function hacerReporte();
}


class ReporteBarra implements  Estrategia{
	private $datos;

	function __construct($datos) {

		$this->datos = $datos;

	}

	function hacerReporte(){

			echo "Magia negra de programacion para realizar una grafica de barra con los Datos<br>";


	}
}


class ReporteExportacionExcel implements Estrategia{
	private $datos;

	function __construct($datos){

		$this->datos = $datos;


	}

	public function hacerReporte(  ) {
		// TODO: Auto-generated method stub
		echo  "Magia negra de programacion para realizar una archivo de excel con los Datos<br>";
	}




}


class Reporte {

	private $estrategia;
	private $datos;

	function __construct($datos){

		$this->datos = $datos;

	}

	function setEstrategia( Estrategia $estrategia ){
		$this->estrategia = $estrategia;

	}

	function ejecutar(){


		$this->estrategia->hacerReporte();


	}


}


$datos = array();


$reporte = new Reporte( );


$reporte->setEstrategia( new ReporteBarra($datos) );

$reporte->ejecutar();

$reporte->setEstrategia( new ReporteExportacionExcel($datos) );

$reporte->ejecutar();





