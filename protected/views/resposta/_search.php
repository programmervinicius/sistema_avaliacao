<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idresposta'); ?>
		<?php echo $form->textField($model,'idresposta'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idprova'); ?>
		<?php echo $form->textField($model,'idprova'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idquestao'); ?>
		<?php echo $form->textField($model,'idquestao'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idalternativa'); ?>
		<?php echo $form->textField($model,'idalternativa'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->