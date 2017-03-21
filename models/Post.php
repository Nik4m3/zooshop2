<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property integer $id
 * @property string $category
 * @property string $rodent
 * @property string $amphibian
 * @property string $reptilie
 * @property string $fish
 * @property string $cat
 * @property string $dog
 * @property integer $count
 * @property string $name
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category', 'count', 'name'], 'required'],
            [['category', 'rodent', 'amphibian', 'reptilie', 'fish', 'cat', 'dog', 'name'], 'string'],
            [['count'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category' => 'Категория',
            'rodent' => 'Грызуны',
            'amphibian' => 'Земноводные',
            'reptilie' => 'Рептилии',
            'fish' => 'Рыбы',
            'cat' => 'Кошки',
            'dog' => 'Собаки',
            'count' => 'Количество',
            'name' => 'Наименование товара',
        ];
    }
}
