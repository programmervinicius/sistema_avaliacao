<?php
$this->breadcrumbs=array(
	'Provas'=>array('index'),
	$model->idprova,
);

$this->menu=array(
	array('label'=>'List Prova', 'url'=>array('index')),
	array('label'=>'Create Prova', 'url'=>array('create')),
	array('label'=>'Update Prova', 'url'=>array('update', 'id'=>$model->idprova)),
	array('label'=>'Delete Prova', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idprova),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Prova', 'url'=>array('admin')),
);
?>

<h1>View Prova #<?php echo $model->idprova; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idprova',
		'idmatricula',
		'idavaliacao',
		'nota',
	),
)); ?>
