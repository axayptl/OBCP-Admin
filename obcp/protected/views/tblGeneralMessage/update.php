<?php
/* @var $this TblGeneralMessageController */
/* @var $model TblGeneralMessage */

$this->breadcrumbs=array(
	'Tbl General Messages'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TblGeneralMessage', 'url'=>array('index')),
	array('label'=>'Create TblGeneralMessage', 'url'=>array('create')),
	array('label'=>'View TblGeneralMessage', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TblGeneralMessage', 'url'=>array('admin')),
);
?>

<h1>Update TblGeneralMessage <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>