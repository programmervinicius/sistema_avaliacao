<?php
$this->breadcrumbs=array(
	'Respostas'=>array('index'),
	$model->idresposta=>array('view','id'=>$model->idresposta),
	'Update',
);

$this->menu=array(
	array('label'=>'List Resposta', 'url'=>array('index')),
	array('label'=>'Create Resposta', 'url'=>array('create')),
	array('label'=>'View Resposta', 'url'=>array('view', 'id'=>$model->idresposta)),
	array('label'=>'Manage Resposta', 'url'=>array('admin')),
);
?>

<h1>Update Resposta <?php echo $model->idresposta; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>