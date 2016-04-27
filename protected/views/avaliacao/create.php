<?php
$this->breadcrumbs=array(
	'Avaliacaos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Avaliacao', 'url'=>array('index')),
	array('label'=>'Manage Avaliacao', 'url'=>array('admin')),
);
?>

<h1>Create Avaliacao</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>