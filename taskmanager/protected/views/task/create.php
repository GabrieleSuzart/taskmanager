<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	Yii::t('app', 'Cadastro'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Listar'), 'url' => array('index')),
	array('label'=>Yii::t('app', 'Gerenciar'), 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Cadastro de') . ' ' . GxHtml::encode($model->label()); ?></h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model,
		'buttons' => 'create'));
?>