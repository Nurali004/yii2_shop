<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Product;

class ProductSearch extends Product
{
    public $search;
    public $sortt;

    public function rules()
    {
        return [
            [['search', 'price', 'sortt'], 'safe'],
        ];
    }

    public function search($params)
    {

        $query = Product::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 9,
            ],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            return $dataProvider;
        }





            $query->andFilterWhere(['like', 'name_uz', $this->search])
                ->andFilterWhere(['>=', 'price', $this->price]);



        if ($this->sortt) {
            switch ($this->sortt) {
                case 'expensive':
                    $query->orderBy(['price' => SORT_DESC]);
                    break;
                case 'cheap':
                    $query->orderBy(['price' => SORT_ASC]);
                    break;
                case 'a':
                    $query->orderBy(['name_uz' => SORT_DESC]);
                    break;
                case 'z':
                    $query->orderBy(['name_uz' => SORT_ASC]);
                    break;
            }


        }


        return $dataProvider;
    }
}
