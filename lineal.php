
<?php
	//require_once "php/conexion.php";
	/*$conexion=conexion();
	$sql="SELECT fechaVenta,montoVenta
			from ventas order by fechaVenta";
	$result=mysqli_query($conexion,$sql);
	$valoresY=array();//montos
	$valoresX=array();//fechas*/

	//datos con vectores
$valoresY=array("1000","2200","1300","3200","1700","2400");
$valoresX=array("2017-01-01","2017-01-05","2017-02-12","2017-02-17","2017-03-23","2017-03-28");
 //$j=0;
/*	while ($ver=mysqli_fetch_row($result)) {
		$valoresY[]=$ver[1];
		$valoresX[]=$ver[0];
	//	echo $valoresY[$j];echo "  ";echo $valoresX[$j]; echo "<br>";
		$j++;
	}*/

	//$datosX=json_encode($valoresX);
	//$datosY=json_encode($valoresY);
 //echo $datosX;echo "  "; echo $datosY;echo "<br>";
 ?>
<div id="graficaLineal"></div>

<script type="text/javascript">
	function crearCadenaLineal(json){
		var parsed = JSON.parse(json);
		var arr = [];
		for(var x in parsed){
			arr.push(parsed[x]);
		}
		return arr;
	}
</script>


<script type="text/javascript">

	datosX=crearCadenaLineal('<?php echo $datosX ?>');
	datosY=crearCadenaLineal('<?php echo $datosY ?>');
//los dos tipos de graficas en un solo grafico
	var lineas = {
		x: datosX,
		y: datosY,
		type: 'scatter'
	};
	var barras = {
		x: datosX,
		y: datosY,
		type: 'bar'
	};


	var data = [lineas,barras];

	Plotly.newPlot('graficaLineal', data);
</script>
