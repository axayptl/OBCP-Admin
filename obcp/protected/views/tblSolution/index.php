<?php
/* @var $this TblSolutionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tbl Solutions',
);

$this->menu=array(
	array('label'=>'Create TblSolution', 'url'=>array('create')),
	array('label'=>'Manage TblSolution', 'url'=>array('admin')),
);
?>

<h1>Tbl Solutions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
