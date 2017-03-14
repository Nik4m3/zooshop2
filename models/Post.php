<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property integer $id
 * @property string $type_product
 * @property string $name_product
 * @property string $quantity
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
            [['type_product', 'name_product', 'quantity'], 'required'],
            [['type_product', 'name_product'], 'string'],
            [['quantity'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type_product' => 'Тип товара',
            'name_product' => 'Наименование товара',
            'quantity' => 'Количество',
        ];
    }
}
