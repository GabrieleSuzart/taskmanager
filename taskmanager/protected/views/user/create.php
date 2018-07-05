<?php

$this->breadcrumbs = array(
	'Usuários' => array('index'),
	Yii::t('app', 'Cadastros'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Listar') . ' ' . '', 'url' => array('index')),
	array('label'=>Yii::t('app', 'Gerenciar') . ' ' . '', 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Cadastro de usuário'); ?></h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model,
		'buttons' => 'create'));
?>