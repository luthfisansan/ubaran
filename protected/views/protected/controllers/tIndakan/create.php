<?php
/* @var $this TIndakanController */
/* @var $model Tindakan */

$this->breadcrumbs=array(
	'Tindakans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tindakan', 'url'=>array('index')),
	array('label'=>'Manage Tindakan', 'url'=>array('admin')),
);
?>

<h1>Create Tindakan</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>