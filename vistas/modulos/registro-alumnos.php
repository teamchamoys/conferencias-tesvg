
<link rel="stylesheet" href="<?php echo $url ?>vistas/css/style.css">

<h1>Semana del Administrador
  <br>
  <span>TESVG 2018</span>
</h1>

<div class="agile-its">
	<h2>Ingresa tus Datos</h2>
	<div class="w3layouts">
		<div class="photos-upload-view">
			<form method="POST" autocomplete="off" id="registro-alumno" enctype="multipart/form-data">
					<div class="agileinfo">
					</div>
						<div class="agileinfo-row">
              <input type="hidden" id="alerta" name="" value="">

              <div class="ferry ferry-from">
								<label>Número de Control</label>
								<input type="text" maxlength="10" id="numeroControl" required name="numeroControl" placeholder="201992980">
							</div>

              <div class="ferry ferry-from">
								<label>Nombre Completo</label>
								<input type="text" name="nombre" id="nombre" required placeholder="Juan de la Barrera Mendez Ayala" >
							</div>

              <div class="ferry ferry-from">
								<label>E-mail</label>
								<input type="email" name="email" id="email" required placeholder="juanito@tesvg.com" >
							</div>

              <div class="ferry ferry-from">
  								<label>Carrera</label>
							    <select required name="carrera" style="color:black!important; background-color:#fff!important;">
                    <option value="">---</option>
                    <option value="la">L.A.</option>
                    <option value="otro">Otro</option>
                  </select>
							</div>

              <div class="ferry ferry-from">
                  <label>Grupo</label>
                  <select required style="color:black!important;  background-color: #fff!important;" name="grupo">
                    <option value="">---</option>
                    <option value="101">101</option>
                    <option value="102">102</option>
                    <option value="103">103</option>
                    <option value="104">104</option>
                    <option value="301">301</option>
                    <option value="302">302</option>
                    <option value="303">303</option>
                    <option value="501">501</option>
                    <option value="502">502</option>
                    <option value="503">503</option>
                    <option value="701">701</option>
                    <option value="702">702</option>
                    <option value="703">703</option>
                  </select>
              </div>
						</div>

					<div class="wthree-text">
						<div class="wthreesubmitaits">
							<input type="submit" name="submit" value="Enviar">
						</div>
					</div>
			</form>

		</div>
		<div class="clear"></div>
	</div>
</div>
<div class="footer">
	<p> © 2018. Derechos Reservados | Design by  <a href="http://grupoinntec.com/"> Grupo Innec</a></p>
</div>
