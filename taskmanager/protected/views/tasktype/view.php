<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'Listar') . ' ' . '', 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Novo') . ' ' . '', 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Editar') . ' ' . '', 'url'=>array('update', 'id' => $model->idtasktype)),
	array('label'=>Yii::t('app', 'Excluir') . ' ' . '', 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->idtasktype), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Gerenciar') . ' ' . '', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Visualizando') . ' ' . GxHtml::encode($model->label()) . ': ' . GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'idtasktype',
'create_date',
'update_date',
'name',
	),
)); ?>

<h2><?php echo GxHtml::encode($model->getRelationLabel('tasks')); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->tasks as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('task/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?>