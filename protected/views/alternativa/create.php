<?php
$this->breadcrumbs=array(
	'Alternativas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Alternativa', 'url'=>array('index')),
	array('label'=>'Manage Alternativa', 'url'=>array('admin')),
);
?>

<h1>Create Alternativa</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>