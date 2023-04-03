<?php
	//require_once "php/conexion.php";
	/*$conexion=conexion();
	$sql="SELECT fechaVenta,montoVenta
			from ventas order by fechaVenta";
	$result=mysqli_query($conexion,$sql);
	$valoresY=array();//montos
  $valoresX=array();//fechas*/

  //datos con vectores
$valoresY=array("1010","800","1300","3200","1700","2400");
$valoresX=array("2017-01-01","2017-01-05","2017-02-12","2017-02-17","2017-03-23","2017-03-28");

/*	while ($ver=mysqli_fetch_row($result)) {
		$valoresY[]=$ver[1];
		$valoresX[]=$ver[0];
	}*/

	
 ?>

<div id="graficaBarras"></div>

<script type="text/javascript">
	function crearCadenaBarras(json){
		var parsed = JSON.parse(json);
		var arr = [];
		for(var x in parsed){
			arr.push(parsed[x]);
		}
		return arr;
	}
</script>

<script type="text/javascript">

	datosX=crearCadenaBarras();
	datosY=crearCadenaBarras();

	var data = [
		{
			x: datosX,
			y: datosY,
			type: 'bar'
		}
	];

	Plotly.newPlot('graficaBarras', data);
</script>
