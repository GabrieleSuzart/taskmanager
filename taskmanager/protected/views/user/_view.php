<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('iduser')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->iduser), array('view', 'id' => $data->iduser)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('create_date')); ?>:
	<?php echo GxHtml::encode($data->create_date); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('update_date')); ?>:
	<?php echo GxHtml::encode($data->update_date); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('name')); ?>:
	<?php echo GxHtml::encode($data->name); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('gender')); ?>:
	<?php echo GxHtml::encode($data->gender); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('birth_date')); ?>:
	<?php echo GxHtml::encode($data->birth_date); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('email')); ?>:
	<?php echo GxHtml::encode($data->email); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('fone')); ?>:
	<?php echo GxHtml::encode($data->fone); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('login')); ?>:
	<?php echo GxHtml::encode($data->login); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('password')); ?>:
	<?php echo GxHtml::encode($data->password); ?>
	<br />
	*/ ?>

</div>