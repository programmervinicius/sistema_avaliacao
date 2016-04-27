<?php

/**
 * This is the model class for table "prova".
 *
 * The followings are the available columns in table 'prova':
 * @property integer $idprova
 * @property integer $idmatricula
 * @property integer $idavaliacao
 * @property integer $nota
 *
 * The followings are the available model relations:
 * @property Avaliacao $idavaliacao0
 * @property Matricula $idmatricula0
 * @property Resposta[] $respostas
 */
class Prova extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Prova the static model class
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
		return 'prova';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idmatricula, idavaliacao, nota', 'required'),
			array('idmatricula, idavaliacao, nota', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idprova, idmatricula, idavaliacao, nota', 'safe', 'on'=>'search'),
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
			'idavaliacao0' => array(self::BELONGS_TO, 'Avaliacao', 'idavaliacao'),
			'idmatricula0' => array(self::BELONGS_TO, 'Matricula', 'idmatricula'),
			'respostas' => array(self::HAS_MANY, 'Resposta', 'idprova'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idprova' => 'Idprova',
			'idmatricula' => 'Idmatricula',
			'idavaliacao' => 'Idavaliacao',
			'nota' => 'Nota',
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

		$criteria->compare('idprova',$this->idprova);
		$criteria->compare('idmatricula',$this->idmatricula);
		$criteria->compare('idavaliacao',$this->idavaliacao);
		$criteria->compare('nota',$this->nota);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}