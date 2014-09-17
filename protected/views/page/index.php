<?php
/* @var $this PageController */
/* @var $data CActiveDataProvider */
/* @var $form CActiveForm */
/* @var $category CmsCategory */
/* @var $val Yii::app()->request->getParam('data') */


Yii::app()->clientScript->registerScriptFile(Yii::app()->getRequest()->getBaseUrl(true).'/js/page.js');


?>



<div class="form-group text-left">

    <label >Введите дату для поиска</label>

    <input type="date" id="dat" name="data" class="form-control" value="<?echo $val ?>">
    <input type="hidden" id='day' value="<?echo date('d',time())?>">
    <input type="hidden" id='month' value="<?echo date('m',time())?>">
    <input type="hidden" id='year' value="<?echo date('Y',time())?>">
    <input type="hidden" id='cat' value="<?echo Yii::app()->request->getParam('id')?>">
    <input type="hidden" id='url' value="<? echo Yii::app()->getRequest()->getBaseUrl(true);?>">

</div>



<? $this->renderPartial('widget',array('data'=>$data )); ?>

<script>
    $(":date").dateinput();
</script>
