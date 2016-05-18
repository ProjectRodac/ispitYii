<?php

/**
 * This is the model class for table "pitanja".
 *
 * The followings are the available columns in table 'pitanja':
 * @property integer $idpitanja
 * @property string $pitanje
 * @property integer $predmet_idPredmet
 *
 * The followings are the available model relations:
 * @property Odgovor[] $odgovors
 * @property Predmet $predmetIdPredmet
 * @property Ispit[] $ispits
 */
class Pitanja extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pitanja';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('predmet_idPredmet', 'required'),
			array('predmet_idPredmet', 'numerical', 'integerOnly'=>true),
			array('pitanje', 'length', 'max'=>256),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idpitanja, pitanje, predmet_idPredmet', 'safe', 'on'=>'search'),
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
			'odgovors' => array(self::HAS_MANY, 'Odgovor', 'pitanja_idpitanja'),
			'predmetIdPredmet' => array(self::BELONGS_TO, 'Predmet', 'predmet_idPredmet'),
			'ispits' => array(self::MANY_MANY, 'Ispit', 'pitanja_ispita(pitanja_idpitanja, ispit_idispit)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			//'idpitanja' => 'Idpitanja',
			'pitanje' => 'Pitanje',
			'predmet_idPredmet' => 'Predmet',
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

		$criteria->compare('idpitanja',$this->idpitanja);
		$criteria->compare('pitanje',$this->pitanje,true);
		//$criteria->compare('predmet_idPredmet',$this->predmet_idPredmet);
                 $criteria->with = array(
                    'predmetIdPredmet' => array('alias'=> 'predmetidPredmet', 'together' => true, ),
                      );
                  $criteria->together=true;
                 $criteria->compare('predmetIdPredmet.naziv',$this->predmet_idPredmet);
                 

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pitanja the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
