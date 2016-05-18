<?php

/**
 * This is the model class for table "user_odgovori".
 *
 * The followings are the available columns in table 'user_odgovori':
 * @property integer $user_id
 * @property integer $odgovor_idOdgovor
 * @property integer $id
 * @property integer $odgovor_ispit_idispit
 *
 * The followings are the available model relations:
 * @property Odgovor $odgovorIdOdgovor
 * @property User $user
 * @property Ispit $odgovorIspitIdispit
 */
class UserOdgovori extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user_odgovori';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, odgovor_idOdgovor, odgovor_ispit_idispit', 'required'),
			array('user_id, odgovor_idOdgovor, odgovor_ispit_idispit', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('user_id, odgovor_idOdgovor, id, odgovor_ispit_idispit', 'safe', 'on'=>'search'),
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
			'odgovorIdOdgovor' => array(self::BELONGS_TO, 'Odgovor', 'odgovor_idOdgovor'),
			'user' => array(self::BELONGS_TO, 'User', 'user_id'),
			'odgovorIspitIdispit' => array(self::BELONGS_TO, 'Ispit', 'odgovor_ispit_idispit'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'user_id' => 'User',
			'odgovor_idOdgovor' => 'Odgovor Id Odgovor',
			'id' => 'ID',
			'odgovor_ispit_idispit' => 'Odgovor Ispit Idispit',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('odgovor_idOdgovor',$this->odgovor_idOdgovor);
		$criteria->compare('id',$this->id);
		$criteria->compare('odgovor_ispit_idispit',$this->odgovor_ispit_idispit);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return UserOdgovori the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
