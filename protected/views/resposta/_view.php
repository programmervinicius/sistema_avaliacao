<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idresposta')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idresposta), array('view', 'id'=>$data->idresposta)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idprova')); ?>:</b>
	<?php echo CHtml::encode($data->idprova); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idquestao')); ?>:</b>
	<?php echo CHtml::encode($data->idquestao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idalternativa')); ?>:</b>
	<?php echo CHtml::encode($data->idalternativa); ?>
	<br />


</div>