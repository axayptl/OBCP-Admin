<?php
/* @var $this TblUserController */
/* @var $model TblUser */

$this->breadcrumbs=array(
	'Tbl Users'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List TblUser', 'url'=>array('index')),
	array('label'=>'Create TblUser', 'url'=>array('create')),
	array('label'=>'Update TblUser', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TblUser', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TblUser', 'url'=>array('admin')),
);
?>

<h1>View TblUser #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'image',
		'role_Id',
		'device_push_id',
		'password',
	),
)); ?>
