<?php
    namespace app\controllers;
    use app\models\Pm;
    
    class PmController extends \yii\base\Controller
    {
       public function actionIndex() {
        $mensaje = "<p>Esta clase realiza acciones en la cuenta de Perfect Money</p>";
        return $this->render('pmbalance', ["balance" => ["Mensaje: " => $mensaje]]);
    }
    
        public function actionBalance(){
            $this->trigger(\app\components\TestComponent::EVENT_CLICKONLIST);
            
            $model = new Pm;
            $balance = $model->balance();
            
            // putting data to array
            $ar="";
            foreach($balance as $item){
               $key=$item[1];
               $ar[$key]=$item[2];
            }
            
            $salida = $ar;
            return $this->render('pmbalance', ["balance" => $salida]);
        }
        
        
    }   