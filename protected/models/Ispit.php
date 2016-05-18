<?php

/**
 * This is the model class for table "ispit".
 *
 * The followings are the available columns in table 'ispit':
 * @property integer $idispit
 * @property string $naziv_ispita
 * @property string $opis_ispita
 * @property integer $predmet_idPredmet
 * @property integer $objavljen
 * @property integer $rijesen
 * @property integer $maksBrBodova
 *
 * The followings are the available model relations:
 * @property Predmet $predmetIdPredmet
 * @property PitanjaIspita[] $pitanjaIspitas
 * @property Rezultati[] $rezultatis
 * @property UserOdgovori[] $userOdgovoris
 */
class Ispit extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ispit';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('predmet_idPredmet, objavljen, rijesen', 'required'),
			array('predmet_idPredmet, objavljen, rijesen, maksBrBodova', 'numerical', 'integerOnly'=>true),
			array('naziv_ispita', 'length', 'max'=>45),
			array('opis_ispita', 'length', 'max'=>250),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idispit, naziv_ispita, opis_ispita, predmet_idPredmet, objavljen, rijesen, maksBrBodova', 'safe', 'on'=>'search'),
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
			'predmetIdPredmet' => array(self::BELONGS_TO, 'Predmet', 'predmet_idPredmet'),
			'pitanjaIspitas' => array(self::HAS_MANY, 'PitanjaIspita', 'ispit_idispit'),
			'rezultatis' => array(self::HAS_MANY, 'Rezultati', 'ispit_idispit'),
			'userOdgovoris' => array(self::HAS_MANY, 'UserOdgovori', 'odgovor_ispit_idispit'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idispit' => 'Idispit',
			'naziv_ispita' => 'Naziv Ispita',
			'opis_ispita' => 'Opis Ispita',
			'predmet_idPredmet' => 'Predmet Id Predmet',
			'objavljen' => 'Objavljen',
			'rijesen' => 'Rijesen',
			'maksBrBodova' => 'Maks Br Bodova',
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

		$criteria->compare('idispit',$this->idispit);
		$criteria->compare('naziv_ispita',$this->naziv_ispita,true);
		$criteria->compare('opis_ispita',$this->opis_ispita,true);
		$criteria->compare('predmet_idPredmet',$this->predmet_idPredmet);
		$criteria->compare('objavljen',$this->objavljen);
		$criteria->compare('rijesen',$this->rijesen);
		$criteria->compare('maksBrBodova',$this->maksBrBodova);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Ispit the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
