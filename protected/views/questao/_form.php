<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'questao-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idavaliacao'); ?>
		<?php echo $form->textField($model,'idavaliacao'); ?>
		<?php echo $form->error($model,'idavaliacao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idalternativa'); ?>
		<?php echo $form->textField($model,'idalternativa'); ?>
		<?php echo $form->error($model,'idalternativa'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->