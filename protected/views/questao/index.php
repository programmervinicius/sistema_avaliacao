<?php
$this->breadcrumbs=array(
	'Questaos',
);

$this->menu=array(
	array('label'=>'Create Questao', 'url'=>array('create')),
	array('label'=>'Manage Questao', 'url'=>array('admin')),
);
?>

<h1>Questaos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
