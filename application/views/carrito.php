<div class="container grande">
	<div class="panel panel-default">
		<div class="panel-body">
			<div class="row">
				<h3 class="text-center">Carrito de Compras</h3>
		   <div class="col-lg-10 col-lg-offset-1">
			   <div class="table-responsive">
			   	<table class="table table-striped">
			   		<thead>
			   			<tr>
			   				<th>Producto</th>
			   				<th>Imagen</th>
			   				<th>Cantidad</th>
			   				<th>Precio Unitario</th>
			   				<th>Subtotal</th>
			   			</tr>
			   		</thead>
			   		<tbody id="tabla_carrito">
			   		<?php
			   		if($carrito=$this->cart->contents()){
			   			foreach ($carrito as $key => $producto) {
			   				?>
			   				<tr>
				   				<td><a href='<?php echo base_url("productos/detalle/$producto[id]");?>'><?php echo $producto['name'];?></a></td>
				   				<td><img src="http://lorempixel.com/50/50/food/<?php echo $producto['id'];?>" class="img-responsive"></img></td>
				   				<td><?php echo $producto['qty'];?></td>
				   				<td><?php echo '$'.number_format($producto['price']);?></td>
				   				<td><?php echo '$'.number_format($producto['price']*$producto['qty']);?></td>
				   				<td><button type="button" class="btn btn-danger btn-xs btn-quitar" data-producto="<?php echo $producto['rowid'];?>"><i class="icon-quitar-carrito"></i> Quitar</button></td>
			   				</tr>
			   				<?php
			   			}
			   		}
			   		else{
			   			?>
			   			<tr>
			   				<td>No hay productos en el carrito</td>
			   				<td></td>
			   				<td></td>
			   				<td></td>
			   				<td></td>
			   			</tr>
			   			<?php
			   		}
			   		?>	
			   		</tbody>
			   	</table>
			   </div>
		   </div>
			</div>
		    <div class="row">
		    	<div class="col-lg-10 col-lg-offset-1">
		    		<a class="btn btn-default btn-raised pull-left btn-sm" href="<?php echo base_url('productos');?>"> <i class="icon-agregar-carrito"></i> Seguir Comprando</a>
		    		<button type="button" class="btn btn-warning btn-raised pull-right btn-sm" id="vaciar"> <i class="icon-exclamacion"></i> Vaciar Carrito</button>
		   			<button type="button" class="btn btn-success btn-raised pull-right btn-sm"><i class="icon-checklist"></i> Realizar Compra</button>
		   		</div>
		    </div>
		</div>
	</div>
</div>