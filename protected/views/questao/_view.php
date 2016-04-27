<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idquestao')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idquestao), array('view', 'id'=>$data->idquestao)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idavaliacao')); ?>:</b>
	<?php echo CHtml::encode($data->idavaliacao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idalternativa')); ?>:</b>
	<?php echo CHtml::encode($data->idalternativa); ?>
	<br />


</div>