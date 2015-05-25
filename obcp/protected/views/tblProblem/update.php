<?php
/* @var $this TblProblemController */
/* @var $model TblProblem */

$this->breadcrumbs=array(
	'Tbl Problems'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TblProblem', 'url'=>array('index')),
	array('label'=>'Create TblProblem', 'url'=>array('create')),
	array('label'=>'View TblProblem', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TblProblem', 'url'=>array('admin')),
);
?>

<h1>Update TblProblem <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>