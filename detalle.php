<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<style type="text/css">
		.panel{

			position: relative;
			height: 99%;
			width: 48vw;

			margin: 0.5%;
			background-color: #000;

			border:solid 2px red;
			text-decoration: none;
			

			font-family: Arial;
		}
		body{
			background-image: url("fondo.jpeg");
			background-position: center;
			background-repeat: no-repeat;
			background-size: 75%;
			background-color: black;
			height: 100vh;
			width: 100vw;
			display: flex;
			align-content: center;
			justify-content: center;

			color: #FFF;
		}
		.titulo{
			position: absolute;
			left: 15%;
			top: 2%;

			font-size: 20pt;
		}
		.estacion{
			display: flex;
			flex-direction: row;
		}
		.row{
			display: flex;
			flex-direction: row;
		}
		.col{
			display: flex;
			flex-direction: column;
		}
		
		.control-temp{
			height: 20vh;
			width: 23vw;

			margin: 0.5% 0.5% 0.5% 0.5%;

			color: #fff;

			background-color: #000;
			border-color: red;
			border-radius: 10px;

			font-size: 30pt;
		}

		.temp-panel{
			position: relative;
			float: left;
			width: 50%;
			height: 100vh;
			margin-top: 15%;
		}
		.temp-titulo{
			font-size: 28pt;
			position: absolute;
			top: 20%;
			left: 10%;
		}
		.temp-acc, .temp-sen{
			position: absolute;
			top: 30%;
			left: 10%;
			font-size: 18pt;
		}
		.temp-min{
			position: absolute;
			top: 40%;
			left: 10%;
			color: white;
		}

		.hum-panel{
			position: relative;
			width: 100%;
			height: 100vh;
			margin-top: 15%;
		}
		.hum-titulo{
			font-size: 28pt;
			position: absolute;
			top: 35%;
			left: 35%;
		}
		.hum-acc{
			position: absolute;
			top: 40%;
			left: 40%;
			font-size: 18pt;
		}

		.hum-panel{
			position: relative;
			width: 100%;
			height: 100vh;
			margin-top: 15%;
		}
		.hum-titulo{
			font-size: 28pt;
			position: absolute;
			top: 35%;
			left: 35%;
		}
		.hum-acc{
			position: absolute;
			top: 40%;
			left: 40%;
			font-size: 18pt;
		}

		.vien-titulo{
			font-size: 28pt;
			position: absolute;
			top: 35%;
			left: 20%;
		}
		.vien-acc{
			position: absolute;
			top: 40%;
			left: 20%;
			font-size: 18pt;
		}
		.vien-max{
			position: absolute;
			top: 45%;
			left: 20%;
			font-size: 14pt;
		}
		.vien-dic{
			font-size: 20pt;
			position: absolute;
			top: 40%;
			right: 20%;
		}

		.pres-titulo{
			font-size: 28pt;
			position: absolute;
			top: 35%;
			left: 42%;
		}
		.pres-acc{
			position: absolute;
			top: 40%;
			left: 47%;
			font-size: 18pt;
		}

		.volver{
			position: absolute;
			top: 20px;
			left: 0px;

			padding-top: 20px;

			text-decoration: none;

			background-color: red;
			color: black;

			height: 40px;
			width: 40px;
		}
</style>

<body onload="mostrar(0)">
	<?php
		echo '<p id="idPag" style="display: none;">'.$_GET['chipid'].'</p>';
	?>	
	<a href="panel.html" class="volver"><center><</center></a>
	<div class="estacion">
		<div class="panel">
			<div class="titulo"></div>
			<div class="temperatura" style="display: none;">
				<div class="temp-panel">
					<div class="temp-titulo">Temperatura</div>
					<div class="temp-acc"></div>
					<div class="temp-min"></div>
					<div class="temp-max"></div>
				</div>
				<div class="temp-panel">
					<div class="temp-titulo">Sensacion</div>
					<div class="temp-sen"></div>
					<div class="temp-sen-min"></div>
					<div class="temp-sen-max"></div>
				</div>
			</div>
			<div class="humedad" style="display: none;">
				<div class="hum-panel">
					<div class="hum-titulo">Humedad</div>
					<div class="hum-acc"></div>
				</div>
			</div>
			<div class="incendio" style="display: none;">
				<div class="temp-panel">
					<center>
						<h2 class="ffmc-titulo">FFMC</h2>
						<div class="inc-ffmc"></div>
						<h2 class="dmc-titulo">DMC</h2>
						<div class="inc-dmc"></div>
						<h2 class="dc-titulo">DC</h2>
						<div class="inc-dc"></div>
					</center>
				</div>
				<div class="temp-panel">
					<center>
						<h2 class="isi-titulo">ISI</h2>
						<div class="inc-isi"></div>
						<h2 class="bui-titulo">BUI</h2>
						<div class="inc-bui"></div>
						<h2 class="fwi-titulo">FWI</h2>
						<div class="inc-fwi"></div>
					</center>
				</div>
			</div>
			<div class="viento" style="display: none;">
				<div class="hum-panel">
					<div class="vien-titulo">Viento</div>
					<div class="vien-acc"></div>
					<div class="vien-max"></div>
					<div class="vien-dic"></div>
				</div>
			</div>
			<div class="presion" style="display: none;">
				<div class="hum-panel">
					<div class="pres-titulo">Presion</div>
					<div class="pres-acc"></div>
				</div>
			</div>
		</div>
		<div class="panel col" style="background-color: #0000; border-color: #0000;">
			<div class="row">
				<button class="control-temp" onclick="mostrar(0)">TEMPERATURA</button>
				<button class="control-temp" onclick="mostrar(1)">HUMEDAD</button>
			</div>
			<div class="row">
				<button class="control-temp" onclick="mostrar(2)">INCENDIO</button>
				<button class="control-temp" onclick="mostrar(3)">VIENTO</button>
			</div>
			<div class="row">
				<button class="control-temp" onclick="mostrar(4)">PRESION</button>
			</div>
		</div>
	</div>

	<script type="text/javascript">

		function mostrar(opt) {
			const temp = document.querySelector(".temperatura");
			const hum = document.querySelector(".humedad");
			const inc = document.querySelector(".incendio");
			const vien = document.querySelector(".viento");
			const pres = document.querySelector(".presion");

			switch(opt) {
				case 0:
					temp.setAttribute("style", "display: block;")
					hum.setAttribute("style", "display: none;")
					inc.setAttribute("style", "display: none;")
					vien.setAttribute("style", "display: none;")
					pres.setAttribute("style", "display: none;")
					break;

				case 1:
					temp.setAttribute("style", "display: none;")
					hum.setAttribute("style", "display: block;")
					inc.setAttribute("style", "display: none;")
					vien.setAttribute("style", "display: none;")
					pres.setAttribute("style", "display: none;")
					break;

				case 2:
					temp.setAttribute("style", "display: none;")
					hum.setAttribute("style", "display: none;")
					inc.setAttribute("style", "display: block;")
					vien.setAttribute("style", "display: none;")
					pres.setAttribute("style", "display: none;")
					break;

				case 3:
					temp.setAttribute("style", "display: none;")
					hum.setAttribute("style", "display: none;")
					inc.setAttribute("style", "display: none;")
					vien.setAttribute("style", "display: block;")
					pres.setAttribute("style", "display: none;")
					break;

				case 4:
					temp.setAttribute("style", "display: none;")
					hum.setAttribute("style", "display: none;")
					inc.setAttribute("style", "display: none;")
					vien.setAttribute("style", "display: none;")
					pres.setAttribute("style", "display: block;")
					break;
			}
		}

		document.addEventListener("DOMContentLoaded", () => {
			refreshDatos();
			refreshId = setInterval(refreshDatos, 60000)
		})

		async function refreshDatos (){
			let idPag = document.querySelector("#idPag");
			const resp = await fetch("https://mattprofe.com.ar/proyectos/app-estacion/datos.php?chipid="+idPag.innerHTML+"&cant=1")
			const data = await resp.json()

			var i = 0

			document.querySelector(".titulo").innerHTML = "<p>"+data[i].ubicacion+"</p>";

			//temperatura
			document.querySelector(".temp-acc").innerHTML = "<p>"+data[i].temperatura+"</p>";
			document.querySelector(".temp-min").innerHTML[0] = "<p>"+data[i].tempmax+"</p>";
			document.querySelector(".temp-max").innerHTML[0] = "<p>"+data[i].tempmin+"</p>";
			//sensacion
			document.querySelector(".temp-sen").innerHTML = "<p>"+data[i].sensacion+"</p>";
			document.querySelector(".temp-sen-min").innerHTML[1] = "<p>"+data[i].sensamax+"</p>";
			document.querySelector(".temp-sen-max").innerHTML[1] = "<p>"+data[i].sensamin+"</p>";
			//humedad
			document.querySelector(".hum-acc").innerHTML = "<p>"+data[i].humedad+"</p>";
			//incendio
			document.querySelector(".inc-ffmc").innerHTML = "<p>"+data[i].ffmc+"</p>";
			document.querySelector(".inc-dmc").innerHTML = "<p>"+data[i].dmc+"</p>";
			document.querySelector(".inc-dc").innerHTML = "<p>"+data[i].dc+"</p>";
			document.querySelector(".inc-isi").innerHTML = "<p>"+data[i].isi+"</p>";
			document.querySelector(".inc-bui").innerHTML = "<p>"+data[i].bui+"</p>";
			document.querySelector(".inc-fwi").innerHTML = "<p>"+data[i].fwi+"</p>";
			//viento
			document.querySelector(".vien-acc").innerHTML = "<p>"+data[i].viento+" Km/h</p>";
			document.querySelector(".vien-max").innerHTML = "<p>"+data[i].maxviento+" Km/h</p>";
			document.querySelector(".vien-dic").innerHTML = "<p>"+data[i].veleta+"</p>";
			//presion
			document.querySelector(".pres-acc").innerHTML = "<p>"+data[i].presion+"</p>";
		}	

	</script>
</body>
</html>