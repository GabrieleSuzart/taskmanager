<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('código')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->iduser), array('view', 'id' => $data->iduser)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('Data de cadastro')); ?>:
	<?php echo GxHtml::encode($data->create_date); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('Data da última edição')); ?>:
	<?php echo GxHtml::encode($data->update_date); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('Nome')); ?>:
	<?php echo GxHtml::encode($data->name); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('gênero')); ?>:
	<?php echo GxHtml::encode($data->gender); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('data de nascimento')); ?>:
	<?php echo GxHtml::encode($data->birth_date); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('email')); ?>:
	<?php echo GxHtml::encode($data->email); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('ddd')); ?>:
	<?php echo GxHtml::encode($data->ddd); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('fone')); ?>:
	<?php echo GxHtml::encode($data->fone); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('username')); ?>:
	<?php echo GxHtml::encode($data->username); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('password')); ?>:
	<?php echo GxHtml::encode($data->password); ?>
	<br />
	*/ ?>

</div>