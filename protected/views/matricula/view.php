<?php
$this->breadcrumbs=array(
	'Matriculas'=>array('index'),
	$model->idmatricula,
);

$this->menu=array(
	array('label'=>'List Matricula', 'url'=>array('index')),
	array('label'=>'Create Matricula', 'url'=>array('create')),
	array('label'=>'Update Matricula', 'url'=>array('update', 'id'=>$model->idmatricula)),
	array('label'=>'Delete Matricula', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idmatricula),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Matricula', 'url'=>array('admin')),
);
?>

<h1>View Matricula #<?php echo $model->idmatricula; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idmatricula',
		'idcurso',
		'idusuario',
		'status',
	),
)); ?>
