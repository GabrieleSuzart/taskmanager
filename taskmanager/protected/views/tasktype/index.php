<?php

$this->breadcrumbs = array(
	Tasktype::label(2),
	Yii::t('app', 'Listar'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Novo') . ' ' . '', 'url' => array('create')),
	array('label'=>Yii::t('app', 'Gerenciar') . ' ' . '', 'url' => array('admin')),
);
?>

<h1><?php echo GxHtml::encode('Lista de '.Tasktype::label(2)); ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 