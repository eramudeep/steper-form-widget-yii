# steper-form-widget-yii

This is widget is for the steper form written in pure javascript and PHP

#How to use
  <?php 
$form = TActiveForm::begin([
// 'layout' => 'horizontal',
  'id'  => 'property-form',
  'action' => 'add'
  ]);
  ?>
                <?=SteprFormWidget::widget([
                'steps'=>[
                    'location'=>[
                        $form->field($model, 'title')->textInput(['maxlength' => 256,'class'=>'form-control' ,'required'=>"required"]),
                        $form->field($model, 'list_for')->textInput(['maxlength' => 256,'class'=>'form-control' ,'required'=>"required"]),
                        $form->field($model, 'property_type')->textInput()
                    ],
                    'address'=>[
                        $form->field($model, 'property_sub_type')->textInput(),
                        $form->field($model, 'property_sub_sub_type')->textInput()
                    ],
                    'price'=>[
                        $form->field($model, 'state_id')->fileInput()
                    ],
                      
                ],
                    'model'=>$model,
                    'form'=>$form
                ]);?>


<?php TActiveForm::end(); ?>
 
