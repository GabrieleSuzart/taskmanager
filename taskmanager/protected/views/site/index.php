<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<!-- <h1><?php echo CHtml::encode(Yii::app()->name); ?></h1> -->
<h1>Tarefas pendentes</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(

	'id' => 'task-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		'title',
		'description',
		array(
				'name'=>'idtasktype_fk',
				'value'=>'GxHtml::valueEx($data->idtasktypeFk)',
				'filter'=>GxHtml::listDataEx(Tasktype::model()->findAllAttributes(null, true)),
                ),
	
	),
)); ?>