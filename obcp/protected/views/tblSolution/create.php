<?php
/* @var $this TblSolutionController */
/* @var $model TblSolution */

$this->breadcrumbs=array(
	'Tbl Solutions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TblSolution', 'url'=>array('index')),
	array('label'=>'Manage TblSolution', 'url'=>array('admin')),
);
?>

<h1>Create TblSolution</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>