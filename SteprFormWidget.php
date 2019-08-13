<?php
namespace app\components\steperform;

use Yii;
use yii\helpers\Html;
use yii\helpers\StringHelper;
use yii\helpers\Url;
use yii\helpers\HtmlPurifier;
use app\components\TBaseWidget;
use app\components\steperform\SteperAsset;
class SteprFormWidget extends TBaseWidget {
    
    public $step_tile=1;
    public $steps = array();
    public $step_id;
    public $model;
    public $next_button;
    public $next_button_class = 'btn btn-primary nextBtn btn-lg pull-righ';
    public $next_button_title ='Next';
    public $form;


    public function init() {
        SteperAsset::register ( $this->getView () );
    }
    public function run()
    { 
        return self::StepWizared();
    }


    public function StepWizared()
    {
        $tmp_steps = '';
        $counter =1;
        foreach ($this->steps as $key => $value) {
             $tmp_class = $counter == 1 ?   'btn btn-circle btn-circle btn-default btn-primary' : 'btn btn-circle btn-circle ';
             $disabled =$counter ==1 ? '' : 'disabled';
             $tmp_steps .= "<div class='stepwizard-step'>
                                <a  ".$disabled." href='#step-".$counter."' type='button' class='".$tmp_class."'  >".$counter++."</a>
                                <p>".ucfirst($key)."</p>
                            </div>";
        }
        return "<div class='stepwizard col-md-offset-3'>
                    <div class='stepwizard-row setup-panel'>
                        
                            ".$tmp_steps."
                      
                    </div>
                </div>".self::FormFieldsWizard();        
    }


    public function FormFieldsWizard()
    {
        
        $final ='';
        $counter =1;
        foreach ($this->steps as $key => $value) {
        $tmp_fields = "<div class='row setup-content' id='step-".$counter++."'>
                            <div class='col-xs-6 col-md-offset-3'>
                                <div class='col-md-12'>
                                    <h3>  ".ucfirst($key)." </h3>";
                            foreach ($value as $key => $field) {
                                    $tmp_fields .= "   <div class='form-group'>". $field."</div>";
                                }
                            $tmp_fields.=self::NextButton(). 
                                "</div>".
                            "</div>
                    </div>";
            $final .=  $tmp_fields;
           $tmp_fields='';
        }

        return   $final; 
         
    }
    public function NextButton()
    {
         return "<button class='".$this->next_button_class."' type='button' > ".$this->next_button_title."  </button>";
    }

}


?>