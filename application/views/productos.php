<div class="container">
    <h3 class="text-center">Cátalogo de Productos</h3>
    <div class="row">
        <div class="container carro">
            <a href="<?php echo base_url('productos/carrito');?>" id="btn-carrito" class="btn btn-default btn-raised btn-sm top pull-right"><span class="badge"><?php echo $this->cart->total_items();?></span><i class="icon-carrito"></i> Ver Carrito</a>
        </div>
    </div>
    <div class="col-lg-9 col-md-9">
        <div class="panel panel-default">
            <div class="panel-body">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#pulseras" data-toggle="tab">Pulseras</a></li>
                    <li><a href="#cadenas" data-toggle="tab">Cadenas</a></li>
                    <li><a href="#aretes" data-toggle="tab">Aretes</a></li>
                    <li><a href="#bisuteria" data-toggle="tab">Bisuteria</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade active in" id="pulseras">
                        <div class="row">
                            <div class="container">
                                <?php
                                $precios = array(50,150,789,120,470,23,65,78,58,100);
                                $titulos=array('pulsera','refresco','cadena','anillo','collar','pelota','balon','teclado','raton','monitor');
                                for ($i=0; $i<10;$i++) {
                                    ?>
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="thumbnail">
                                            <a data-producto="<?php echo $i;?>" href="productos/detalle/<?php echo $i;?>">
                                                <figure><img class="img-responsive" src="http://lorempixel.com/200/150/food/<?php echo $i;?>" alt=""></figure>
                                            </a>
                                            <div class="caption">
                                                <div class="row">
                                                    <h3 class="pull-left"><?php echo $titulos[$i];?></h3>
                                                    <h5 class="pull-right">$<?php echo number_format($precios[$i]);?></h5>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <label for="cantidad<?php echo $i;?>">Cantidad</label>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <input class="form-control" type="number" id="cantidad<?php echo $i; ?>" min="1">
                                                    </div>
                                                </div>
                                                <button type="button" class="btn btn-raised btn-xs btn-agregar-carrito"><i class="icon-agregar-carrito"></i> Agregar</button>
                                             </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="cadenas">
                        <p>cadenas</p>
                    </div>
                    <div class="tab-pane fade" id="aretes">
                        <p>aretes</p>
                    </div>
                    <div class="tab-pane fade" id="bisuteria">
                        <p>bisuteria</p>
                    </div>
                </div>
            </div>
        </div>    
    </div>
    <div class="col-lg-3 col-md-3">
        <div class="panel panel-default">
            <div class="panel-body nuevos">
                <h4 class="text-center"><i class="icon-estrella-negra"></i> Productos Nuevos</h4>
                <div class="col-lg-12 col-md-12 col-sm-6">
                    <div class="thumbnail">
                        <a href="#">
                            <img class="img-responsive" src="http://lorempixel.com/400/300/food" alt="">
                        </a>
                        <div class="caption">
                            <div class="row">
                                <h3 class="pull-left">Nuevo</h3>
                                <h5 class="pull-right">$500</h5>
                            </div>
                            <div class="row form-group">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <label for="cantidad<?php echo $i;?>">Cantidad</label>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input class="form-control" type="number" id="cantidad<?php echo $i; ?>" min="1">
                                </div>
                            </div>
                            <button type="button" class="btn btn-raised btn-xs btn-agregar-carrito"><i class="icon-agregar-carrito"></i> Agregar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>