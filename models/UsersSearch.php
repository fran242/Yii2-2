<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Users;

/**
 * UsersSearch represents the model behind the search form about `app\models\Users`.
 */
class UsersSearch extends Users
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'resetCount', 'active'], 'integer'],
            [['nickName', 'firstName', 'firstSurname', 'secondSurname', 'password', 'city', 'birthDay', 'lastVisitDate', 'lastPassResetDate', 'userType', 'created', 'updated'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Users::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'birthDay' => $this->birthDay,
            'lastVisitDate' => $this->lastVisitDate,
            'lastPassResetDate' => $this->lastPassResetDate,
            'resetCount' => $this->resetCount,
            'active' => $this->active,
            'created' => $this->created,
            'updated' => $this->updated,
        ]);

        $query->andFilterWhere(['like', 'nickName', $this->nickName])
            ->andFilterWhere(['like', 'firstName', $this->firstName])
            ->andFilterWhere(['like', 'firstSurname', $this->firstSurname])
            ->andFilterWhere(['like', 'secondSurname', $this->secondSurname])
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'userType', $this->userType]);

        return $dataProvider;
    }
}
