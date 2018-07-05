<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<!-- <h1><?php echo CHtml::encode(Yii::app()->name); ?></h1> -->
<h1>Tarefas pendentes</h1>

<?php

$this->menu = array(
	array('label'=>Yii::t('app', 'List') . ' ' . $model->label(2), 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' ' . $model->label(), 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('task-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<?php $this->widget('zii.widgets.grid.CGridView', array(

	'id' => 'task-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
		'columns' => array(
			'title',
			'status',
			array(
				'name'=>'iduser_fk',
				'value'=>'GxHtml::valueEx($data->iduserFk)',
				'filter'=>GxHtml::listDataEx(User::model()->findAllAttributes(null, true)),
				),
			'description',
			array(
					'name'=>'idtasktype_fk',
					'value'=>'GxHtml::valueEx($data->idtasktypeFk)',
					'filter'=>GxHtml::listDataEx(Tasktype::model()->findAllAttributes(null, true)),
					),
		
		),
)); 

?>