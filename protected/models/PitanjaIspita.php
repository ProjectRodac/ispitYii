<?php

/**
 * This is the model class for table "pitanja_ispita".
 *
 * The followings are the available columns in table 'pitanja_ispita':
 * @property integer $pitanja_idpitanja
 * @property integer $ispit_idispit
 * @property integer $id
 *
 * The followings are the available model relations:
 * @property Ispit $ispitIdispit
 * @property Pitanja $pitanjaIdpitanja
 */
class PitanjaIspita extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pitanja_ispita';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pitanja_idpitanja, ispit_idispit', 'required'),
			array('pitanja_idpitanja, ispit_idispit', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('pitanja_idpitanja, ispit_idispit, id', 'safe', 'on'=>'search'),
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
			'pitanjaIdpitanja' => array(self::BELONGS_TO, 'Pitanja', 'pitanja_idpitanja'),
                    
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'pitanja_idpitanja' => 'Pitanje',
			'ispit_idispit' => 'Ispit',
			'id' => 'ID',
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
                 $criteria->with = array(
                    'pitanjaIdpitanja' => array('alias'=> 'pitanjaIdpitanja', 'together' => true, ),
                    'ispitIdispit' => array('alias'=> 'ispitIdispit', 'together' => true, ),
                );
               // $criteria-> with = 'pitanjaIdpitanja';
                //$criteria->with = 'ispitIdispit';
                $criteria->together=true;
		$criteria->compare('pitanjaIdpitanja.pitanje',$this->pitanja_idpitanja);
		$criteria->compare('ispitIdispit.naziv_ispita',$this->ispit_idispit);
		$criteria->compare('id',$this->id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PitanjaIspita the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
