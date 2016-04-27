<?php
$this->breadcrumbs=array(
	'Provas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Prova', 'url'=>array('index')),
	array('label'=>'Manage Prova', 'url'=>array('admin')),
);
?>

<h1>Create Prova</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>