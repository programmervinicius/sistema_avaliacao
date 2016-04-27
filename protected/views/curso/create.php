<?php
$this->breadcrumbs=array(
	'Cursos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Curso', 'url'=>array('index')),
	array('label'=>'Manage Curso', 'url'=>array('admin')),
);
?>

<h1>Create Curso</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>