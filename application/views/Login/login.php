<div class="container">
	<div class="row ">
		<div class="col-lg-4 col-md-4 col-sm-8 col-xs-10 centrada animated fadeIn">
			<div class="panel panel-default">
				<div class="panel-body">
					<h4 class="text-center">Iniciar Sesión</h4>
					<img class="logo img-responsive" src="<?php echo base_url('assets/img/sosbella.png');?>" alt="">
					<form class="form-horizontal" method="POST">
						<div class="form-group">
							<div class="col-lg-12">
								<label for="inputEmail" class="control-label azul">Usuario</label>
								<input type="text" class="form-control azul" id="inputUsuario" placeholder="Usuario" required>
							</div>
						</div>
						<div class="form-group">
							<div class="col-lg-12">
								<label for="inputPassword" class="control-label azul">Contraseña</label>
								<input type="password" class="form-control azul" id="inputPassword" placeholder="Contraseña" required>
							</div> 
						</div>
						<a data-toggle="modal" href='#modal-id'>¿Olvidaste tu contraseña?</a>
						<div class="modal fade" id="modal-id">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										<h4 class="modal-title">Recuperar Contraseña</h4>
									</div>
									<div class="modal-body">
										<p>Ingresa tu email</p>
										<input type="email" class="form-control">
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
										<button type="button" class="btn btn-material-deep-purple-400 btn-raised">Recuperar</button>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 centrada">
							<button type="submit" class="btn btn-morado btn-raised btn-block">Ingresar</button>	
							<div class="loader">

							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-8 col-xs-10 centrada">
			<div class="alert alert-dismissible alert-sos" id="alerta">
				<p><i class="icon-exclamacion-single"></i> El usuario y/o la contraseña son incorrectos</p>
			</div>
		</div>
	</div>
</div>
<script defer="defer">
	$(function () {
		$('form').on('submit', function (e) {
			e.preventDefault();
			$.ajax({
				url: "<?php echo base_url('Login');?>",
				type: 'post',
				data: {usuario:$('#inputUsuario').val(),contra:$('#inputPassword').val()},
				beforeSend:function(e){
					$('.loader').spinner({
						radius: 15,
						strokeWidth: 3,
						duration: 2,
						color: '#7E57C2'
					}).fadeIn();
				},
				success: function (data) {
					console.log(data);
					if(data!='false'){
						document.location.href="<?php echo base_url('administracion');?>"
					}
					else{
						var ends='webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
						$('#alerta').show().addClass('animated flipInX').one(ends,function(){
							$(this).removeClass('animated flipInX')
						});
						setTimeout(function(){
							$('#alerta').fadeOut();
						}, 4000);
					}
					$('.loader').fadeOut('slow');
				},
				error:function(x,h,r){
					console.log("Error al iniciar sesion "+x+h+r);
				}
			});
		});
	});
</script>