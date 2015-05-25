<?php
/* @var $this TblProblemController */
/* @var $model TblProblem */

$this->breadcrumbs=array(
	'Tbl Problems'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List TblProblem', 'url'=>array('index')),
	array('label'=>'Create TblProblem', 'url'=>array('create')),
	array('label'=>'Update TblProblem', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TblProblem', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TblProblem', 'url'=>array('admin')),
);
?>

<h1>View TblProblem #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'tags',
		'title',
		'description',
		'images',
		'links',
		'downloadables',
		'docs',
		'created_On',
		'last_update_On',
		'created_By',
		'is_Open',
		'credit',
	),
)); ?>
