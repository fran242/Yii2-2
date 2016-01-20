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
            'nickName' => 'Nick Name',
            'firstName' => 'First Name',
            'firstSurname' => 'First Surname',
            'secondSurname' => 'Second Surname',
            'password' => 'Password',
            'city' => 'City',
            'birthDay' => 'Birth Day',
            'lastVisitDate' => 'Last Visit Date',
            'lastPassResetDate' => 'Last Pass Reset Date',
            'resetCount' => 'Reset Count',
            'active' => 'Active',
            'userType' => 'User Type',
            'created' => 'Created',
            'updated' => 'Updated',
        ];
    }
}
