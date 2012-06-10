<?php

/**
 * This is the model class for table "tbl_auctions".
 *
 * The followings are the available columns in table 'tbl_auctions':
 * @property integer $id
 * @property string $name
 * @property string $description
 */
class Auction extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Auction the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_auctions';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, description', 'required'),
			array('name', 'length', 'max'=>255),
			array('description', 'length', 'max'=>512),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, description', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
            'owner' =>  array(self::BELONGS_TO, 'User', 'user_id'),
            'lots' =>  array(self::HAS_MANY, 'Lots', 'auction_id'),
            'lotsCount' => array(self::STAT, 'Lots', 'auction_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'user_id' => 'Owner',
            'name' => 'Name',
			'description' => 'Description',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('description',$this->description,true);
        $criteria->together = true;

        $criteria->with = array('owner','lotsCount');
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}