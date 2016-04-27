<?php
$this->breadcrumbs=array(
	'Provas'=>array('index'),
	$model->idprova=>array('view','id'=>$model->idprova),
	'Update',
);

$this->menu=array(
	array('label'=>'List Prova', 'url'=>array('index')),
	array('label'=>'Create Prova', 'url'=>array('create')),
	array('label'=>'View Prova', 'url'=>array('view', 'id'=>$model->idprova)),
	array('label'=>'Manage Prova', 'url'=>array('admin')),
);
?>

<h1>Update Prova <?php echo $model->idprova; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>