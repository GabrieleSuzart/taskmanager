<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('idtask')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->idtask), array('view', 'id' => $data->idtask)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('create_date')); ?>:
	<?php echo GxHtml::encode($data->create_date); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('update_date')); ?>:
	<?php echo GxHtml::encode($data->update_date); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('title')); ?>:
	<?php echo GxHtml::encode($data->title); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('iduser_fk')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->iduserFk)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('privacy')); ?>:
	<?php echo GxHtml::encode($data->privacy); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('description')); ?>:
	<?php echo GxHtml::encode($data->description); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('idtasktype_fk')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->idtasktypeFk)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('status')); ?>:
	<?php echo GxHtml::encode($data->status); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('conclusion_date')); ?>:
	<?php echo GxHtml::encode($data->conclusion_date); ?>
	<br />
	*/ ?>

</div>