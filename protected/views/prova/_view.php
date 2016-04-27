<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idprova')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idprova), array('view', 'id'=>$data->idprova)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idmatricula')); ?>:</b>
	<?php echo CHtml::encode($data->idmatricula); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idavaliacao')); ?>:</b>
	<?php echo CHtml::encode($data->idavaliacao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nota')); ?>:</b>
	<?php echo CHtml::encode($data->nota); ?>
	<br />


</div>