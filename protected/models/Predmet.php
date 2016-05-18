<?php

/**
 * This is the model class for table "predmet".
 *
 * The followings are the available columns in table 'predmet':
 * @property integer $idPredmet
 * @property string $naziv
 *
 * The followings are the available model relations:
 * @property Ispit[] $ispits
 * @property Pitanja[] $pitanjas
 * @property User[] $users
 */
class Predmet extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'predmet';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('naziv', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idPredmet, naziv', 'safe', 'on'=>'search'),
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
			'ispits' => array(self::HAS_MANY, 'Ispit', 'predmet_idPredmet'),
			'pitanjas' => array(self::HAS_MANY, 'Pitanja', 'predmet_idPredmet'),
			'users' => array(self::MANY_MANY, 'User', 'predmeti_usera(predmet_idPredmet, user_id)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idPredmet' => 'Id Predmet',
			'naziv' => 'Naziv',
		);
	}
       public function getNaziv()
	{
		return 'Naziv';
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

		$criteria->compare('idPredmet',$this->idPredmet);
		$criteria->compare('naziv',$this->naziv,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Predmet the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
