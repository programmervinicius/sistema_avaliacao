<?php
$this->breadcrumbs=array(
	'Provas',
);

$this->menu=array(
	array('label'=>'Create Prova', 'url'=>array('create')),
	array('label'=>'Manage Prova', 'url'=>array('admin')),
);
?>

<h1>Provas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
