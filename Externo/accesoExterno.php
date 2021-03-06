<section id="accesoExterno" class="body2">
	<div class="row">
		<div class="col s2">Fecha: 01/12/2015</div>	
		<div class="col s3 offset-s9">
			<h6>Entrada:</h6>
			<form action="#">
				<div class="col s6">
					<input name="grpRdoEntrada2" type="radio" id="rdoAlumno2"/>
					<label for="rdoAlumno2">Alumno</label>
				</div>
				<div class="col s6">
					<input name="grpRdoEntrada2" type="radio" id="rdoExterno2" checked />
					<label for="rdoExterno2">Externo</label>
				</div>
			</form>
		</div>
	</div>
	<div class="row">
		<div class="col s2">
			<img class="responsive-img" src="..\img\persona.png">
		</div>
		<div class="col s5">
			<form class="col s12">
				<div class="row">
					<div class="input-field col s12">
						<input id="txtNumeroAdmision" type="text" class="validate">
						<label active for="txtNumeroAdmision">No. de admisión</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input id="txtNombre" type="text" class="validate">
						<label for="txtNombre">Nombre</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input id="txtInstitucion" type="text" class="validate">
						<label for="txtInstitucion">Institución</label>
					</div>
				</div>
				<div class="row">
					<select class="browser-default">
						<option value="" disabled selected>Motivo de uso</option>
						<option value="1">Option 1</option>
						<option value="2">Option 2</option>
						<option value="3">Option 3</option>
					</select>
				</div>
				<div class="row">
					<div class="col s6 offset-s2">
						<h6>Material:</h6>
						<form action="#">
							<div class="col s4">
								<input name="grpRdoMaterial2" type="radio" id="rdoSiE" checked/>
								<label for="rdoSiE">Si</label>
							</div>
							<div class="col s4 offset-s3">
								<input name="grpRdoMaterial2" type="radio" id="rdoNoE" />
								<label for="rdoNoE">No</label>
							</div>
						</form>
					</div>
				</div>
			</form>
		</div>
		<div class="col s5" id="tecladoNumerico">
			<div class="row filaNumeros">
				<p>
					<a class="waves-effect waves-light btn-large light-blue darken-1 col s2 offset-s1" id="btn1E">1</a>
				</p>
				<p>
					<a class="waves-effect waves-light btn-large light-blue darken-1 col s2 offset-s2" id="btn2E">2</a>
				</p>
				<p>
					<a class="waves-effect waves-light btn-large light-blue darken-1 col s2 offset-s2" id="btn3E">3</a>
				</p>
			</div>
			<div class="row filaNumeros">
				<p>
					<a class="waves-effect waves-light btn-large light-blue darken-1 col s2 offset-s1" id="btn4E">4</a>
				</p>
				<p>
					<a class="waves-effect waves-light btn-large light-blue darken-1 col s2 offset-s2" id="btn5E">5</a>
				</p>
				<p>
					<a class="waves-effect waves-light btn-large light-blue darken-1 col s2 offset-s2" id="btn6E">6</a>
				</p>
			</div>
			<div class="row filaNumeros">
				<p>
					<a class="waves-effect waves-light btn-large light-blue darken-1 col s2 offset-s1" id="btn7E">7</a>
				</p>
				<p>
					<a class="waves-effect waves-light btn-large light-blue darken-1 col s2 offset-s2" id="btn8E">8</a>
				</p>
				<p>
					<a class="waves-effect waves-light btn-large light-blue darken-1 col s2 offset-s2" id="btn9E">9</a>
				</p>
			</div>
			<div class="row filaNumeros">
				<p>
					<a class="waves-effect waves-light btn-large blue darken-3 col s2 offset-s1" id="btnDelE">DEL</a>
				</p>
				<p>
					<a class="waves-effect waves-light btn-large light-blue darken-1 col s2 offset-s2" id="btn0E">0</a>
				</p>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col s5 offset-s4">
			<button class="btn waves-effect waves-light  green darken-2" type="submit" name="action" id="btnEntrarE">Entrar
			</button>
			<a class="waves-effect waves-light btn red darken-1" id="btnCancelarE">Cancelar</a>
		</div>
	</div>
</section>
