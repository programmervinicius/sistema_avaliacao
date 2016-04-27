<?php
$this->breadcrumbs=array(
	'Avaliacaos'=>array('index'),
	$model->idavaliacao=>array('view','id'=>$model->idavaliacao),
	'Update',
);

$this->menu=array(
	array('label'=>'List Avaliacao', 'url'=>array('index')),
	array('label'=>'Create Avaliacao', 'url'=>array('create')),
	array('label'=>'View Avaliacao', 'url'=>array('view', 'id'=>$model->idavaliacao)),
	array('label'=>'Manage Avaliacao', 'url'=>array('admin')),
);
?>

<h1>Update Avaliacao <?php echo $model->idavaliacao; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>