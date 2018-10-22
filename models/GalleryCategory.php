<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%gallery_category}}".
 *
 * @property integer $id
 * @property string $name
 * @property string $slug
 * @property string $description
 * @property integer $status
 * @property integer $order
 * @property string $created_at
 * @property string $updated_at
 * @property integer $created_by
 * @property integer $updated_by
 */
class GalleryCategory extends \app\models\BaseActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%gallery_category}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'slug', 'order'], 'required'],
            [['description'], 'string'],
            [['status', 'order', 'created_by', 'updated_by'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['name'], 'string', 'max' => 100],
            [['slug'], 'string', 'max' => 150],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'slug' => Yii::t('app', 'Slug'),
            'description' => Yii::t('app', 'Description'),
            'status' => Yii::t('app', 'Status'),
            'order' => Yii::t('app', 'Order'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_by' => Yii::t('app', 'Updated By'),
        ];
    }
}
