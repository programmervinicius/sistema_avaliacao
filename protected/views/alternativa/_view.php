<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idalternativa')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idalternativa), array('view', 'id'=>$data->idalternativa)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descricao')); ?>:</b>
	<?php echo CHtml::encode($data->descricao); ?>
	<br />


</div>