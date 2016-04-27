<?php
$this->breadcrumbs=array(
	'Matriculas'=>array('index'),
	$model->idmatricula=>array('view','id'=>$model->idmatricula),
	'Update',
);

$this->menu=array(
	array('label'=>'List Matricula', 'url'=>array('index')),
	array('label'=>'Create Matricula', 'url'=>array('create')),
	array('label'=>'View Matricula', 'url'=>array('view', 'id'=>$model->idmatricula)),
	array('label'=>'Manage Matricula', 'url'=>array('admin')),
);
?>

<h1>Update Matricula <?php echo $model->idmatricula; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>