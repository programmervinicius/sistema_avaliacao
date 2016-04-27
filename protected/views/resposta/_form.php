<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'resposta-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idprova'); ?>
		<?php echo $form->textField($model,'idprova'); ?>
		<?php echo $form->error($model,'idprova'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idquestao'); ?>
		<?php echo $form->textField($model,'idquestao'); ?>
		<?php echo $form->error($model,'idquestao'); ?>
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