<?php
namespace app\components;

use yii\helpers\Html;
use yii\base\Component;
use yii\base\Event;
use yii\jui\DatePicker;
use yii\jui\Slider;


class TestComponent extends Component{
	public $titulo;
        public $content;
        
        private $contador;
        private $llamadas = 0;
        
        const EVENT_CLICKONLIST = 'handler1';
        
        public function init(){
            parent::init();
            $this->titulo= '<b>Esto es un componente Yii2</b>';
            
            $this->contador = 0;
            
            $this->on(self::EVENT_CLICKONLIST, [$this, 'handler1']);
            $this->on(self::EVENT_CLICKONLIST, [$this, 'hadler2']);
            // first parameter is the name of the event and second is the handler. 
            // For handlers I use methods 'handler1' and 'hadler2'
            // from $this class.
        }
	
	public function display($content=null){
            
            echo "<script> var llamadas = 0;</script>";
            
            $sld = Slider::widget([
                
                'options'=>array(
                    'min'=>0, //minimum value for slider input
                    'max'=>100, // maximum value for slider input
                    
                    'range'=>'max',
                ),
                
                'clientOptions'=>array(
                    'animate'=>2000,
                    'step'=>5,
                    'value'=>25,
                    
                ),
                
                'clientEvents' => [
                    //'stop' => 'function (event, ui) { alert("event change occured."); }',
                    'slide' => 'function(event, ui) {$("#amount_animate").val(ui.value);}',
                    'change' => 'function (event, ui) { llamadas += 1;}'
                ],
            ]);
                        
            $this->llamadas = "<script> document.write(llamadas)</script>";
            echo "Llamadas = ", $this->llamadas;
            if($this->llamadas == 3)
            {
                $message = "Mensaje de evento";
                $event = new Event;
                //$event->message = $message;
                $this->trigger(self::EVENT_CLICKONLIST, $event);
            }
            
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
            echo '<script>$("#llamadas_input").llamadas;</script>';
        }
        
        public function hadler2($event){
            echo "Handler 2: No hace nada<br>";
            echo "<script type=\"text/javascript\">alert(\"Llamada a handler2\");</script>";
            
        }

}


?>



