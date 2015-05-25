<?php
/* @var $this TblProblemController */
/* @var $data TblProblem */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tags')); ?>:</b>
	<?php echo CHtml::encode($data->tags); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('images')); ?>:</b>
	<?php echo CHtml::encode($data->images); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('links')); ?>:</b>
	<?php echo CHtml::encode($data->links); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('downloadables')); ?>:</b>
	<?php echo CHtml::encode($data->downloadables); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('docs')); ?>:</b>
	<?php echo CHtml::encode($data->docs); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_On')); ?>:</b>
	<?php echo CHtml::encode($data->created_On); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_update_On')); ?>:</b>
	<?php echo CHtml::encode($data->last_update_On); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_By')); ?>:</b>
	<?php echo CHtml::encode($data->created_By); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_Open')); ?>:</b>
	<?php echo CHtml::encode($data->is_Open); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('credit')); ?>:</b>
	<?php echo CHtml::encode($data->credit); ?>
	<br />

	*/ ?>

</div>