<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property string $name
 * @property string $classa
 * @property string $classb
 * @property integer $count
 * @property integer $id
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
            [['name', 'classa', 'classb', 'count', 'id'], 'required'],
            [['name', 'classa', 'classb'], 'string'],
            [['count', 'id'], 'integer'],
            [['id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Название',
            'classa' => 'Классы А',
            'classb' => 'Классы Б',
            'count' => 'Количество',
            'id' => 'ID',
        ];
    }
}
