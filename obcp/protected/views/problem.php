<?php
/* @var $this TblProblemController */
/* @var $model TblProblem */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tbl-problem-problem-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title'); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model,'description'); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created_On'); ?>
		<?php echo $form->textField($model,'created_On'); ?>
		<?php echo $form->error($model,'created_On'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_update_On'); ?>
		<?php echo $form->textField($model,'last_update_On'); ?>
		<?php echo $form->error($model,'last_update_On'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created_By'); ?>
		<?php echo $form->textField($model,'created_By'); ?>
		<?php echo $form->error($model,'created_By'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_Open'); ?>
		<?php echo $form->textField($model,'is_Open'); ?>
		<?php echo $form->error($model,'is_Open'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'credit'); ?>
		<?php echo $form->textField($model,'credit'); ?>
		<?php echo $form->error($model,'credit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tags'); ?>
		<?php echo $form->textField($model,'tags'); ?>
		<?php echo $form->error($model,'tags'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'images'); ?>
		<?php echo $form->textField($model,'images'); ?>
		<?php echo $form->error($model,'images'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'links'); ?>
		<?php echo $form->textField($model,'links'); ?>
		<?php echo $form->error($model,'links'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'downloadables'); ?>
		<?php echo $form->textField($model,'downloadables'); ?>
		<?php echo $form->error($model,'downloadables'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'docs'); ?>
		<?php echo $form->textField($model,'docs'); ?>
		<?php echo $form->error($model,'docs'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->