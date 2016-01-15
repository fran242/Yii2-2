<?php


use yii\helpers\Html;
use ho96\phpfreechat\PHPFreeChat;
#use franciscomaya\sceditor\SCEditor;
echo PHPFreeChat::widget();
use ho96\extplorer\Extplorer;
echo Extplorer::widget();
?>
 
<?= Html::encode($message) ?>

<?= bizley\quill\Quill::widget(['name' => 'editor']) ?>

