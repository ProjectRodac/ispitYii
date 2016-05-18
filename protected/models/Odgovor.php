<?php

/**
 * This is the model class for table "odgovor".
 *
 * The followings are the available columns in table 'odgovor':
 * @property integer $idOdgovor
 * @property integer $tocan
 * @property string $odgovor
 * @property integer $pitanja_idpitanja
 *
 * The followings are the available model relations:
 * @property Pitanja $pitanjaIdpitanja
 * @property User[] $users
 */
class Odgovor extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'odgovor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pitanja_idpitanja', 'required'),
			array('tocan, pitanja_idpitanja', 'numerical', 'integerOnly'=>true),
			array('odgovor', 'length', 'max'=>256),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idOdgovor, tocan, odgovor, pitanja_idpitanja', 'safe', 'on'=>'search'),
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
			'pitanjaIdpitanja' => array(self::BELONGS_TO, 'Pitanja', 'pitanja_idpitanja'),
			'users' => array(self::MANY_MANY, 'User', 'user_odgovori(odgovor_idOdgovor, user_id)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idOdgovor' => 'Id Odgovor',
			'tocan' => 'Tocan',
			'odgovor' => 'Odgovor',
			'pitanja_idpitanja' => 'Pitanja Idpitanja',
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

		$criteria->compare('idOdgovor',$this->idOdgovor);
		$criteria->compare('tocan',$this->tocan);
		$criteria->compare('odgovor',$this->odgovor,true);
		$criteria->compare('pitanja_idpitanja',$this->pitanja_idpitanja);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Odgovor the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
