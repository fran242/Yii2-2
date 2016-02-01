<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Users".
 *
 * @property integer $id
 * @property string $nickName
 * @property string $firstName
 * @property string $firstSurname
 * @property string $secondSurname
 * @property string $password
 * @property string $city
 * @property string $birthDay
 * @property string $lastVisitDate
 * @property string $lastPassResetDate
 * @property integer $resetCount
 * @property integer $active
 * @property string $userType
 * @property string $created
 * @property string $updated
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['city', 'lastVisitDate', 'lastPassResetDate', 'resetCount', 'active', 'userType', 'created', 'updated'], 'required'],
            [['birthDay', 'lastVisitDate', 'lastPassResetDate', 'created', 'updated'], 'safe'],
            [['resetCount', 'active'], 'integer'],
            [['nickName', 'city', 'userType'], 'string', 'max' => 45],
            [['firstName', 'firstSurname', 'secondSurname'], 'string', 'max' => 60],
            [['password'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nickName' => 'Apodo',
            'firstName' => 'Nombre',
            'firstSurname' => 'Primer apellido',
            'secondSurname' => 'Segundo apellido',
            'password' => 'Contraseña',
            'city' => 'Localidad',
            'birthDay' => 'Fecha nacimiento',
            'lastVisitDate' => 'Última visita',
            'lastPassResetDate' => 'Fecha último reset del Password',
            'resetCount' => 'Veces se ha renovado Password',
            'active' => 'Activ0',
            'userType' => 'Tipo de usuario',
            'created' => 'Creado',
            'updated' => 'Actualizado',
        ];
    }
}
