<?php
$this->breadcrumbs=array(
	'Questaos'=>array('index'),
	$model->idquestao,
);

$this->menu=array(
	array('label'=>'List Questao', 'url'=>array('index')),
	array('label'=>'Create Questao', 'url'=>array('create')),
	array('label'=>'Update Questao', 'url'=>array('update', 'id'=>$model->idquestao)),
	array('label'=>'Delete Questao', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idquestao),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Questao', 'url'=>array('admin')),
);
?>

<h1>View Questao #<?php echo $model->idquestao; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idquestao',
		'idavaliacao',
		'idalternativa',
	),
)); ?>
