<?php
$this->breadcrumbs=array(
	'Respostas'=>array('index'),
	$model->idresposta,
);

$this->menu=array(
	array('label'=>'List Resposta', 'url'=>array('index')),
	array('label'=>'Create Resposta', 'url'=>array('create')),
	array('label'=>'Update Resposta', 'url'=>array('update', 'id'=>$model->idresposta)),
	array('label'=>'Delete Resposta', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idresposta),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Resposta', 'url'=>array('admin')),
);
?>

<h1>View Resposta #<?php echo $model->idresposta; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idresposta',
		'idprova',
		'idquestao',
		'idalternativa',
	),
)); ?>
