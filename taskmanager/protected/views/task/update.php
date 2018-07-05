<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	GxHtml::valueEx($model) => array('view', 'id' => GxActiveRecord::extractPkValue($model, true)),
	Yii::t('app', 'Update'),
);

$this->menu = array(
	array('label' => Yii::t('app', 'Listar'), 'url'=>array('index')),
	array('label' => Yii::t('app', 'Novo'), 'url'=>array('create')),
	array('label' => Yii::t('app', 'Visualizar'), 'url'=>array('view', 'id' => GxActiveRecord::extractPkValue($model, true))),
	array('label' => Yii::t('app', 'Gerenciar'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Editando') . ' ' . GxHtml::encode($model->label()) . ': ' . GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model));
?>