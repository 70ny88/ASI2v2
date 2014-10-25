<?=heading($title,4);

$attributes = array('id' => 'form_login', 'class'=>'users'); 

$SKU = array('SKU'=>'SKU', 'id'=>'SKU','class'=>'input','placeholder'=>'SKU',
                      'value'=>set_value('SKU'), 'size'=> '35');  

$marca = array('name'=>'marca', 'id'=>'marca','class'=>'input','placeholder'=>'Marca',
                      'value'=>set_value('marca'), 'size'=> '35');	

$precio = array('precio'=>'precio', 'id'=>'precio','class'=>'input','placeholder'=>'Precio',
                      'value'=>set_value('precio'), 'size'=> '35');					  

$opcion = array('Opcion'=>'opcion', 'id'=>'opcion','class'=>'input','placeholder'=>'Opci&oacute;n del atributo',
                      'value'=>set_value('opcion'), 'size'=> '35');	
				  
$data = array('id'=>'id', 'value'=>set_value('id'));					  

if(validation_errors()){ ?> 
	
<div id="error"><?=validation_errors();?></div>

<?php } ?>

<?=form_open('manage_products/add', $attributes);?>

<div class="padding"><?=form_label('SKU');?></div>
<div class="padding"><?=form_input($SKU)?></div>

<div class="padding"><?=form_label('Marca');?></div>
<div class="padding"><?=form_input($marca)?></div>

<div class="padding"><?=form_label('Precio')?></div>
<div class="padding"><?=form_input($precio)?></div>

<div class="padding"><?=form_label('Presentacion')?></div>
<div class="padding"><?=form_input($opcion)?></div>

<?=form_submit(array('name' => 'submit','class'=>'submit','value' => 'Guardar'))?>

<?=form_close();?>

<div class="clear"></div>