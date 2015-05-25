<?php
/* @var $this TblSolutionController */
/* @var $model TblSolution */

$this->breadcrumbs=array(
	'Tbl Solutions'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TblSolution', 'url'=>array('index')),
	array('label'=>'Create TblSolution', 'url'=>array('create')),
	array('label'=>'View TblSolution', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TblSolution', 'url'=>array('admin')),
);
?>

<h1>Update TblSolution <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>