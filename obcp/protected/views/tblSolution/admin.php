<?php
/* @var $this TblSolutionController */
/* @var $model TblSolution */

$this->breadcrumbs=array(
	'Tbl Solutions'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List TblSolution', 'url'=>array('index')),
	array('label'=>'Create TblSolution', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tbl-solution-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Tbl Solutions</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tbl-solution-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'title',
		'tag',
		'description',
		'links',
		'images',
		/*
		'downloads',
		'created_by',
		'created_on',
		'helpful_count',
		'not_helpful_count',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
