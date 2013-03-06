<?php
class Frame_Controller_Core extends controller{
    public function init(){
        parent::init();
    }

    public function actionIndex(){
        $model_test = MONK::getSingleton('Frame_Model_App');
        $t = $model_test->M('select','app',array());
        dump($t);
        //$this->render();
    }
}
