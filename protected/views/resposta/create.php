<?php
$this->breadcrumbs=array(
	'Respostas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Resposta', 'url'=>array('index')),
	array('label'=>'Manage Resposta', 'url'=>array('admin')),
);
?>

<h1>Create Resposta</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>