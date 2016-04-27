<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'prova-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idmatricula'); ?>
		<?php echo $form->textField($model,'idmatricula'); ?>
		<?php echo $form->error($model,'idmatricula'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idavaliacao'); ?>
		<?php echo $form->textField($model,'idavaliacao'); ?>
		<?php echo $form->error($model,'idavaliacao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nota'); ?>
		<?php echo $form->textField($model,'nota'); ?>
		<?php echo $form->error($model,'nota'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->