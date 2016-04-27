<?php
$this->breadcrumbs=array(
	'Materias'=>array('index'),
	$model->idmateria,
);

$this->menu=array(
	array('label'=>'List Materia', 'url'=>array('index')),
	array('label'=>'Create Materia', 'url'=>array('create')),
	array('label'=>'Update Materia', 'url'=>array('update', 'id'=>$model->idmateria)),
	array('label'=>'Delete Materia', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idmateria),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Materia', 'url'=>array('admin')),
);
?>

<h1>View Materia #<?php echo $model->idmateria; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idmateria',
		'idcurso',
		'idusuario',
		'nome',
		'descricao',
	),
)); ?>
