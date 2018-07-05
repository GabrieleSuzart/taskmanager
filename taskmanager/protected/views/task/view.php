<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'Listar'), 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Novo'), 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Editar'), 'url'=>array('update', 'id' => $model->idtask)),
	array('label'=>Yii::t('app', 'Excluir'), 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->idtask), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Gerenciar'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View') . ' ' . GxHtml::encode($model->label()) . ' ' . GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'idtask',
'create_date',
'update_date',
'title',
array(
			'name' => 'iduserFk',
			'type' => 'raw',
			'value' => $model->iduserFk !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->iduserFk)), array('user/view', 'id' => GxActiveRecord::extractPkValue($model->iduserFk, true))) : null,
			),
'privacy',
'description',
array(
			'name' => 'idtasktypeFk',
			'type' => 'raw',
			'value' => $model->idtasktypeFk !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->idtasktypeFk)), array('tasktype/view', 'id' => GxActiveRecord::extractPkValue($model->idtasktypeFk, true))) : null,
			),
'status',
'conclusion_date',
	),
)); ?>

