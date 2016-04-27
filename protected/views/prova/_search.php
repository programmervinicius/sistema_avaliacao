<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idprova'); ?>
		<?php echo $form->textField($model,'idprova'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idmatricula'); ?>
		<?php echo $form->textField($model,'idmatricula'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idavaliacao'); ?>
		<?php echo $form->textField($model,'idavaliacao'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nota'); ?>
		<?php echo $form->textField($model,'nota'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->