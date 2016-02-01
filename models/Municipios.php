<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "municipios".
 *
 * @property integer $id
 * @property string $id_provincia
 * @property string $municipio
 * @property string $active
 * @property string $codigoPostal
 * @property string $calle
 */
class Municipios extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'municipios';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_provincia', 'municipio', 'active', 'codigoPostal', 'calle'], 'required'],
            [['id_provincia'], 'string', 'max' => 5],
            [['municipio'], 'string', 'max' => 100],
            [['active'], 'string', 'max' => 45],
            [['codigoPostal'], 'string', 'max' => 6],
            [['calle'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_provincia' => 'Id Provincia',
            'municipio' => 'Municipio',
            'active' => 'Active',
            'codigoPostal' => 'Codigo Postal',
            'calle' => 'Calle',
        ];
    }
}
