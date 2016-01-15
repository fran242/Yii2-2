<?php
    namespace app\controllers;
    use app\models\PM;
    
    class PMController extends Controller
    {
       public function actionIndex() {
        $mensaje = "<p>Esta clase realiza acciones en la cuenta de Perfect Money</p>";
        return $this->render('lista', ["tabla" => $mensaje]);
    }
    
        public function actionBalance(){
            $model = new PerfectMoney;
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