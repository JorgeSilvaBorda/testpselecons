<div class="modulo" id="modulo-contacto">
    <header id="header-contacto" class="header">
	<div class="overlay"></div>
	<div class="container">
	    <div class="description">
		<h1 class="display-3">Contacto.
		    <p class="lead">Ante cualquier consulta, por favor sírvase utilizar cualquiera de nuestros medios de contacto y su consulta será resuelta a la brevedad.
		    </p>   
		</h1>
	    </div>
	</div>
    </header>
    <br />
    <hr class="separador" />
    <section>

	<div class="container">
	    <div class="py-5 text-center">
		<img class="d-block mx-auto mb-4" src="images/brand.png" alt="" width="120" >
		<h2 class="display-3">Formulario de contacto</h2>
		<p class="lead">Por favor complete los campos indicados más abajo para ponerse en contacto con nosotros.</p>
	    </div>

	    <div class="row">
		<div class="col-md-8 order-md-1">
		    <h4 class="mb-3">Datos personales</h4>
		    <form class="needs-validation" novalidate>
			<div class="row">
			    <div class="col-md-4 mb-3">
				<label for="nombres">Nombres</label>
				<input type="text" class="form-control" id="nombres" placeholder="" value="" required>
				<div class="invalid-feedback">
				    El campo de nombres es requerido.
				</div>
			    </div>
			    <div class="col-md-4 mb-3">
				<label for="appaterno">Aplellido Paterno</label>
				<input type="text" class="form-control" id="appaterno" placeholder="" value="" required>
				<div class="invalid-feedback">
				    El apellido paterno es requerido
				</div>
			    </div>
			    <div class="col-md-4 mb-3">
				<label for="apmaterno">Aplellido Materno</label>
				<input type="text" class="form-control" id="apmaterno" placeholder="" value="" required>
				<div class="invalid-feedback">
				    El apellido materno es requerido
				</div>
			    </div>
			</div>

			<div class="mb-3">
			    <label for="email">Correo electrónico <span class="text-muted"></span></label>
			    <input type="email" class="form-control" id="email" placeholder="you@example.com">
			    <div class="invalid-feedback">
				Please enter a valid email address for shipping updates.
			    </div>
			</div>

			<div class="row">
			    <div class="col-md-12 mb-3">
				<label for="comentarios">Comentarios</label>
				<textarea class="custom-select d-block w-100" id="comentarios" style="height: 150px;" required>
				</textarea>
			    </div>
			</div>
			
			<hr class="mb-4">
			<div class="row">
			    <div class="col-md-4"></div>
			    <div class="col-md-4">
				<button class="btn btn-success btn-outline-success btn-md btn-block" type="button">Enviar</button>
			    </div>
			    <div class="col-md-4"></div>
			</div>
		    </form>
		</div>
	    </div>
	</div>

    </section>
</div>