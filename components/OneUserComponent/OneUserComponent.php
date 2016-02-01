<?php
namespace app\components;

//use yii\helpers\Html;
use yii\base\Component;
//use yii\base\Event;
//use yii\data\ActiveDataProvider;
//
//use app\models\UsersSearch;
//use yii\web\NotFoundHttpException;
//use yii\filters\VerbFilter;

use app\models\Users;

class OneUserComponent extends Component{
	public $titulo;
        public $content;
        
        private $uid;
        private $model;
                
        const EVENT_CLICKONLIST = 'handler1';
        
//        public function __construct($user_id=NULL) {
//            $uid = $user_id;
//        }


        public function init(){
            parent::init();
            $this->titulo= '<b>Esto es un componente Yii2</b>';            
            
            //Eventos           
            $this->on(self::EVENT_CLICKONLIST, [$this, 'handler1']);
            $this->on(self::EVENT_CLICKONLIST, [$this, 'hadler2']);
            // first parameter is the name of the event and second is the handler. 
            // For handlers I use methods 'handler1' and 'hadler2'
            // from $this class.
        }
        
        public function viewOne($id)
        {
            return $this->render('view', [
                'model' => $this->findModel($id),
            ]);
        }
        
        protected function findModel($id)
        {
            if (($model = Users::findOne($id)) !== null) {
                return $model;
            } else {
                throw new NotFoundHttpException('The requested page does not exist.');
            }
        }


        public function display($content=null){
           
            $message = "Mensaje de evento";
            $event = new Event;
            //$event->message = $message;
            $this->trigger(self::EVENT_CLICKONLIST, $event);
            
            
            if($content===null){
                    $this->content= $this->titulo. "<br>".'Sin parámetros';
            }
            else{
               $this->content= $this->titulo;//. "<br>".$content."<br>Llamadas al handler1 = ".$this->contador;
            }
                                  
            $html = <<<HTML
<div align="center" style="width: 400px; height: 200px; border-style: solid; border-color: blue; " name="marcotest">
<p>$this->content</p>
Llamadas= <input type="text" id="llamadas_input" style="border:0; color:#f6931f; font-weight:bold;" value="0" />
<div style="width: 80%;">
Valor: <input type="text" id="amount_animate" style="border:0; color:#f6931f; font-weight:bold;" value="0" />                                                               
$sld                    
</div>
</div>
HTML;
                
		echo $html;
//                echo DatePicker::widget([
//                    'name'  => 'from_date',
//                    'value'  => '2015-09-30',
//                    'language' => 'es',
//                    'dateFormat' => 'dd-MM-yyyy',
//                ]);
                
                //echo Html::encode($this->content);
	}

        
        public function handler1($event){
            $this->contador +=1;
            echo "Hadler 1: Contador aumentado ";
            echo $this->contador,"<br>";
        }
        
        public function hadler2($event){
            echo "Handler 2: No hace nada<br>";
            echo "<script type=\"text/javascript\">alert(\"Llamada a handler2\");</script>";
            
        }

}


?>

<script>
    $("#llamadas_input").val($this->contador);
</script>';

