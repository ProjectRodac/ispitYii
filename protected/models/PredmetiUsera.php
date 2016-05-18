<?php

/**
 * This is the model class for table "predmeti_usera".
 *
 * The followings are the available columns in table 'predmeti_usera':
 * @property integer $user_id
 * @property integer $predmet_idPredmet
 */
class PredmetiUsera extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'predmeti_usera';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, predmet_idPredmet', 'required'),
			array('user_id, predmet_idPredmet', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('user_id, predmet_idPredmet', 'safe', 'on'=>'search'),
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
			'users' => array(self::MANY_MANY, 'User', 'user_predmet(predmet_idPredmet, user_id)'),
			'predmetIdpredmet' => array(self::BELONGS_TO, 'Predmet', 'predmet_idPredmet'),
                    
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'user_id' => 'User',
			'predmet_idPredmet' => 'Predmet Id Predmet',
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
		$criteria->compare('predmet_idPredmet',$this->predmet_idPredmet);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PredmetiUsera the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
