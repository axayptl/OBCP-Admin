<?php
/* @var $this TblProblemController */
/* @var $model TblProblem */

$this->breadcrumbs=array(
	'Tbl Problems'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TblProblem', 'url'=>array('index')),
	array('label'=>'Manage TblProblem', 'url'=>array('admin')),
);
?>

<h1>Create TblProblem</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>