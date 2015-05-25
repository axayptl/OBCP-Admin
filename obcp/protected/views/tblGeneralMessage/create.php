<?php
/* @var $this TblGeneralMessageController */
/* @var $model TblGeneralMessage */

$this->breadcrumbs=array(
	'Tbl General Messages'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TblGeneralMessage', 'url'=>array('index')),
	array('label'=>'Manage TblGeneralMessage', 'url'=>array('admin')),
);
?>

<h1>Create TblGeneralMessage</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>