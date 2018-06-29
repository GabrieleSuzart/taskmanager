<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('idtasktype')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->idtasktype), array('view', 'id' => $data->idtasktype)); ?>
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

</div>