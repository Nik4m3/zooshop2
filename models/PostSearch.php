<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Post;

/**
 * PostSearch represents the model behind the search form about `app\models\Post`.
 */
class PostSearch extends Post
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'count'], 'integer'],
            [['category', 'rodent', 'amphibian', 'reptilie', 'fish', 'cat', 'dog', 'name'], 'safe'],
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
        $query = Post::find();

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
            'count' => $this->count,
        ]);

        $query->andFilterWhere(['like', 'category', $this->category])
            ->andFilterWhere(['like', 'rodent', $this->rodent])
            ->andFilterWhere(['like', 'amphibian', $this->amphibian])
            ->andFilterWhere(['like', 'reptilie', $this->reptilie])
            ->andFilterWhere(['like', 'fish', $this->fish])
            ->andFilterWhere(['like', 'cat', $this->cat])
            ->andFilterWhere(['like', 'dog', $this->dog])
            ->andFilterWhere(['like', 'name', $this->name]);

        return $dataProvider;
    }
}
