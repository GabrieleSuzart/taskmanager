<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	Yii::t('app', 'Gerenciar'),
);

$this->menu = array(
		array('label'=>Yii::t('app', 'Listar') . ' ' . '', 'url'=>array('index')),
		array('label'=>Yii::t('app', 'Novo') . ' ' . '', 'url'=>array('create')),
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

<h1><?php echo Yii::t('app', 'Gerenciar') . ' ' . GxHtml::encode($model->label(2)); ?></h1>

<!-- <p>
You may optionally enter a comparison operator (&lt;, &lt;=, &gt;, &gt;=, &lt;&gt; or =) at the beginning of each of your search values to specify how the comparison should be done.
</p> -->

<?php echo GxHtml::link(Yii::t('app', 'Pesquisa avançada'), '#', array('class' => 'search-button')); ?>
<div class="search-form">
<?php $this->renderPartial('_search', array(
	'model' => $model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'task-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		'idtask',
		// 'create_date',
		// 'update_date',
		'title',
		array(
				'name'=>'iduser_fk',
				'value'=>'GxHtml::valueEx($data->iduserFk)',
				'filter'=>GxHtml::listDataEx(User::model()->findAllAttributes(null, true)),
				),
		'privacy',
		/*
		'description',
		array(
				'name'=>'idtasktype_fk',
				'value'=>'GxHtml::valueEx($data->idtasktypeFk)',
				'filter'=>GxHtml::listDataEx(Tasktype::model()->findAllAttributes(null, true)),
				),
		'status',
		'conclusion_date',
		*/
		array(
			'class' => 'CButtonColumn',
		),
	),
)); ?>