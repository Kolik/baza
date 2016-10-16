<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "baza".
 *
 * @property integer $id
 * @property string $country
 * @property string $provinciya
 * @property string $type
 * @property string $name
 * @property string $link
 * @property string $shirota
 * @property string $dolgota
 * @property string $sohrannost
 * @property string $dostupnost
 * @property string $tochnost
 * @property string $hz
 * @property string $opisanie
 * @property string $images
 */
class Baza extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'baza';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['opisanie'], 'string'],
            [['country'], 'string', 'max' => 341],
            [['provinciya'], 'string', 'max' => 219],
            [['type'], 'string', 'max' => 52],
            [['name'], 'string', 'max' => 208],
            [['link'], 'string', 'max' => 60],
            [['shirota'], 'string', 'max' => 19],
            [['dolgota'], 'string', 'max' => 9],
            [['sohrannost', 'dostupnost', 'tochnost'], 'string', 'max' => 2],
            [['hz'], 'string', 'max' => 2001],
            [['images'], 'string', 'max' => 353],
        ];
    }
public function getParent()
{
    return $this->hasOne(Category::className(), ['id' => 'country']);
}
 
public function getParentName()
{
    $parent = $this->country;
 
    return $parent ? $parent->name : '';
}
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'country' => 'Country',
            'provinciya' => 'Provinciya',
            'type' => 'Type',
            'name' => 'Name',
            'link' => 'Link',
            'shirota' => 'Shirota',
            'dolgota' => 'Dolgota',
            'sohrannost' => 'Sohrannost',
            'dostupnost' => 'Dostupnost',
            'tochnost' => 'Tochnost',
            'hz' => 'Hz',
            'opisanie' => 'Opisanie',
            'images' => 'Images',
        ];
    }
}


