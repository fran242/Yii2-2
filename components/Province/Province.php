<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "provice".
 *
 * @property integer $id
 * @property string $identificador
 * @property string $nombre
 */
class Province extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'province';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'identificador', 'nombre'], 'required'],
            [['identificador'], 'string', 'max' => 5],
            [['nombre'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'identificador' => 'Identificador',
            'nombre' => 'Nombre',
        ];
    }
}