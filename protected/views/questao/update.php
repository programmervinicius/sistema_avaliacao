<?php
$this->breadcrumbs=array(
	'Questaos'=>array('index'),
	$model->idquestao=>array('view','id'=>$model->idquestao),
	'Update',
);

$this->menu=array(
	array('label'=>'List Questao', 'url'=>array('index')),
	array('label'=>'Create Questao', 'url'=>array('create')),
	array('label'=>'View Questao', 'url'=>array('view', 'id'=>$model->idquestao)),
	array('label'=>'Manage Questao', 'url'=>array('admin')),
);
?>

<h1>Update Questao <?php echo $model->idquestao; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>