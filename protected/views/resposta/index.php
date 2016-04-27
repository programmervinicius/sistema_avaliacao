<?php
$this->breadcrumbs=array(
	'Respostas',
);

$this->menu=array(
	array('label'=>'Create Resposta', 'url'=>array('create')),
	array('label'=>'Manage Resposta', 'url'=>array('admin')),
);
?>

<h1>Respostas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
