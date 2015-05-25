<?php
/* @var $this TblProblemController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tbl Problems',
);

$this->menu=array(
	array('label'=>'Create TblProblem', 'url'=>array('create')),
	array('label'=>'Manage TblProblem', 'url'=>array('admin')),
);
?>

<h1>Tbl Problems</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
