<?php
$this->breadcrumbs=array(
	'Alternativas'=>array('index'),
	$model->idalternativa,
);

$this->menu=array(
	array('label'=>'List Alternativa', 'url'=>array('index')),
	array('label'=>'Create Alternativa', 'url'=>array('create')),
	array('label'=>'Update Alternativa', 'url'=>array('update', 'id'=>$model->idalternativa)),
	array('label'=>'Delete Alternativa', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idalternativa),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Alternativa', 'url'=>array('admin')),
);
?>

<h1>View Alternativa #<?php echo $model->idalternativa; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idalternativa',
		'descricao',
	),
)); ?>
