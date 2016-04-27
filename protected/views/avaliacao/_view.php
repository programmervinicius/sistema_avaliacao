<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idavaliacao')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idavaliacao), array('view', 'id'=>$data->idavaliacao)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idmateria')); ?>:</b>
	<?php echo CHtml::encode($data->idmateria); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descricao')); ?>:</b>
	<?php echo CHtml::encode($data->descricao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />


</div>