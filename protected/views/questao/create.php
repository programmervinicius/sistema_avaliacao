<?php
$this->breadcrumbs=array(
	'Questaos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Questao', 'url'=>array('index')),
	array('label'=>'Manage Questao', 'url'=>array('admin')),
);
?>

<h1>Create Questao</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>