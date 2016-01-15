<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class PerfectMoney extends Model
{
    public $balance;
    
    function balance(){
        // trying to open URL to process PerfectMoney Spend request
        $f=fopen('https://perfectmoney.is/acct/balance.asp?AccountID=3453882&PassPhrase=almaty77', 'rb');

        if($f===false){
           echo 'error openning url';
        }
        
        // getting data
        $out=array(); $out="";
        while(!feof($f)) $out.=fgets($f);

        // CLose the connection
        fclose($f);
        
        // searching for hidden fields
        if(!preg_match_all("/<input name='(.*)' type='hidden' value='(.*)'>/", $out, $result, PREG_SET_ORDER)){
           echo 'Ivalid output';
           exit;
        }
        
        return $result;
    }
    
}