<?php
/* @var $this TblSolutionController */
/* @var $model TblSolution */

$this->breadcrumbs=array(
	'Tbl Solutions'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List TblSolution', 'url'=>array('index')),
	array('label'=>'Create TblSolution', 'url'=>array('create')),
	array('label'=>'Update TblSolution', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TblSolution', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TblSolution', 'url'=>array('admin')),
);
?>

<h1>View TblSolution #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'tag',
		'description',
		'links',
		'images',
		'downloads',
		'created_by',
		'created_on',
		'helpful_count',
		'not_helpful_count',
	),
)); ?>
