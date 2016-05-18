<?php

/**
 * This is the model class for table "rezultati".
 *
 * The followings are the available columns in table 'rezultati':
 * @property integer $ispit_idispit
 * @property integer $user_id
 * @property integer $idRezultat
 * @property integer $brTocnihOdgovora
 *
 * The followings are the available model relations:
 * @property Ispit $ispitIdispit
 * @property User $user
 */
class Rezultati extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'rezultati';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ispit_idispit, user_id', 'required'),
			array('ispit_idispit, user_id, brTocnihOdgovora', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ispit_idispit, user_id, idRezultat, brTocnihOdgovora', 'safe', 'on'=>'search'),
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
			'ispitIdispit' => array(self::BELONGS_TO, 'Ispit', 'ispit_idispit'),
			'user' => array(self::BELONGS_TO, 'User', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ispit_idispit' => 'Ispit Idispit',
			'user_id' => 'User',
			'idRezultat' => 'Id Rezultat',
			'brTocnihOdgovora' => 'Br Tocnih Odgovora',
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

		$criteria->compare('ispit_idispit',$this->ispit_idispit);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('idRezultat',$this->idRezultat);
		$criteria->compare('brTocnihOdgovora',$this->brTocnihOdgovora);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Rezultati the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
