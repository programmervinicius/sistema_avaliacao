<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idmatricula')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idmatricula), array('view', 'id'=>$data->idmatricula)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idcurso')); ?>:</b>
	<?php echo CHtml::encode($data->idcurso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idusuario')); ?>:</b>
	<?php echo CHtml::encode($data->idusuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />


</div>