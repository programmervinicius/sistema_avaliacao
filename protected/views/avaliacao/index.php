<?php
$this->breadcrumbs=array(
	'Avaliacaos',
);

$this->menu=array(
	array('label'=>'Create Avaliacao', 'url'=>array('create')),
	array('label'=>'Manage Avaliacao', 'url'=>array('admin')),
);
?>

<h1>Avaliacaos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
