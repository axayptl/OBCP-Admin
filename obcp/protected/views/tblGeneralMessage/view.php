<?php
/* @var $this TblGeneralMessageController */
/* @var $model TblGeneralMessage */

$this->breadcrumbs=array(
	'Tbl General Messages'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TblGeneralMessage', 'url'=>array('index')),
	array('label'=>'Create TblGeneralMessage', 'url'=>array('create')),
	array('label'=>'Update TblGeneralMessage', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TblGeneralMessage', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TblGeneralMessage', 'url'=>array('admin')),
);
?>

<h1>View TblGeneralMessage #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'from_user_id',
		'message',
	),
)); ?>
