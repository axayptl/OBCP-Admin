<?php
/* @var $this TblGeneralMessageController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tbl General Messages',
);

$this->menu=array(
	array('label'=>'Create TblGeneralMessage', 'url'=>array('create')),
	array('label'=>'Manage TblGeneralMessage', 'url'=>array('admin')),
);
?>

<h1>Tbl General Messages</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
