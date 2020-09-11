<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Profiles;

/**
 * ProfilesSearch represents the model behind the search form of `app\models\Profiles`.
 */
class ProfilesSearch extends Profiles
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'experience', 'weight', 'height', 'bloodtype', 'status_id', 'education_id', 'nationality_id', 'profession_id'], 'integer'],
            [['name_hiden', 'comment_hidden', 'birthday'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Profiles::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'experience' => $this->experience,
            'weight' => $this->weight,
            'height' => $this->height,
            'birthday' => $this->birthday,
            'bloodtype' => $this->bloodtype,
            'status_id' => $this->status_id,
            'education_id' => $this->education_id,
            'nationality_id' => $this->nationality_id,
            'profession_id' => $this->profession_id,
        ]);

        $query->andFilterWhere(['like', 'name_hiden', $this->name_hiden])
            ->andFilterWhere(['like', 'comment_hidden', $this->comment_hidden]);

        return $dataProvider;
    }
}
