<?php

/**
 * This is the model class for table "tbl_lots".
 *
 * The followings are the available columns in table 'tbl_lots':
 * @property integer $id
 * @property integer $auction_id
 * @property string $name
 * @property string $description
 * @property double $price
 * @property string $creation_date
 * @property string $sold_date
 */
class Lots extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Lots the static model class
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
		return 'tbl_lots';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('auction_id, name, description, price', 'required'),
			array('auction_id', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>255),
			array('description', 'length', 'max'=>512),
            array('price', 'numerical'),
            array('creation_date', 'date'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, auction_id, name, description, price, creation_date, sold_date', 'safe', 'on'=>'search'),
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
		    'auction' => array(self::BELONGS_TO, 'Auction', 'auction_id'),
        );
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'auction_id' => 'Auction',
			'name' => 'Name',
			'description' => 'Description',
            'price' => 'Price',
            'creation_date' => 'Creation Date',
            'sold_date' => 'Sold Date',
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
		$criteria->compare('auction_id',$this->auction_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('description',$this->description,true);
        $criteria->compare('price',$this->price);
        $criteria->compare('creation_date',$this->creation_date,true);
        $criteria->compare('sold_date',$this->sold_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function getLotsByAuctionID($iAuctionID)
    {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria=new CDbCriteria;

        $criteria->compare('id',$this->id);
        $criteria->condition = 'auction_id='.$iAuctionID;

        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
        ));
    }
}