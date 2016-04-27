<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idmateria')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idmateria), array('view', 'id'=>$data->idmateria)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idcurso')); ?>:</b>
	<?php echo CHtml::encode($data->idcurso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idusuario')); ?>:</b>
	<?php echo CHtml::encode($data->idusuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome')); ?>:</b>
	<?php echo CHtml::encode($data->nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descricao')); ?>:</b>
	<?php echo CHtml::encode($data->descricao); ?>
	<br />


</div>