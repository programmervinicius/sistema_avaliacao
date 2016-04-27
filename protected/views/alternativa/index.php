<?php
$this->breadcrumbs=array(
	'Alternativas',
);

$this->menu=array(
	array('label'=>'Create Alternativa', 'url'=>array('create')),
	array('label'=>'Manage Alternativa', 'url'=>array('admin')),
);
?>

<h1>Alternativas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
