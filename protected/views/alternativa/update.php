<?php
$this->breadcrumbs=array(
	'Alternativas'=>array('index'),
	$model->idalternativa=>array('view','id'=>$model->idalternativa),
	'Update',
);

$this->menu=array(
	array('label'=>'List Alternativa', 'url'=>array('index')),
	array('label'=>'Create Alternativa', 'url'=>array('create')),
	array('label'=>'View Alternativa', 'url'=>array('view', 'id'=>$model->idalternativa)),
	array('label'=>'Manage Alternativa', 'url'=>array('admin')),
);
?>

<h1>Update Alternativa <?php echo $model->idalternativa; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>