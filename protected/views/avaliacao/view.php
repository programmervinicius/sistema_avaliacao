<?php
$this->breadcrumbs=array(
	'Avaliacaos'=>array('index'),
	$model->idavaliacao,
);

$this->menu=array(
	array('label'=>'List Avaliacao', 'url'=>array('index')),
	array('label'=>'Create Avaliacao', 'url'=>array('create')),
	array('label'=>'Update Avaliacao', 'url'=>array('update', 'id'=>$model->idavaliacao)),
	array('label'=>'Delete Avaliacao', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idavaliacao),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Avaliacao', 'url'=>array('admin')),
);
?>

<h1>View Avaliacao #<?php echo $model->idavaliacao; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idavaliacao',
		'idmateria',
		'descricao',
		'status',
	),
)); ?>
