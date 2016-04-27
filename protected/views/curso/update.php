<?php
$this->breadcrumbs=array(
	'Cursos'=>array('index'),
	$model->idcurso=>array('view','id'=>$model->idcurso),
	'Update',
);

$this->menu=array(
	array('label'=>'List Curso', 'url'=>array('index')),
	array('label'=>'Create Curso', 'url'=>array('create')),
	array('label'=>'View Curso', 'url'=>array('view', 'id'=>$model->idcurso)),
	array('label'=>'Manage Curso', 'url'=>array('admin')),
);
?>

<h1>Update Curso <?php echo $model->idcurso; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>