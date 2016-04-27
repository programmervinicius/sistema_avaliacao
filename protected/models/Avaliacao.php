<?php

/**
 * This is the model class for table "avaliacao".
 *
 * The followings are the available columns in table 'avaliacao':
 * @property integer $idavaliacao
 * @property integer $idmateria
 * @property string $descricao
 * @property string $status
 *
 * The followings are the available model relations:
 * @property Materia $idmateria0
 * @property Prova[] $provas
 * @property Questao[] $questaos
 */
class Avaliacao extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Avaliacao the static model class
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
		return 'avaliacao';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idmateria, descricao, status', 'required'),
			array('idmateria', 'numerical', 'integerOnly'=>true),
			array('descricao', 'length', 'max'=>128),
			array('status', 'length', 'max'=>12),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idavaliacao, idmateria, descricao, status', 'safe', 'on'=>'search'),
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
			'idmateria0' => array(self::BELONGS_TO, 'Materia', 'idmateria'),
			'provas' => array(self::HAS_MANY, 'Prova', 'idavaliacao'),
			'questaos' => array(self::HAS_MANY, 'Questao', 'idavaliacao'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idavaliacao' => 'Idavaliacao',
			'idmateria' => 'Idmateria',
			'descricao' => 'Descricao',
			'status' => 'Status',
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

		$criteria->compare('idavaliacao',$this->idavaliacao);
		$criteria->compare('idmateria',$this->idmateria);
		$criteria->compare('descricao',$this->descricao,true);
		$criteria->compare('status',$this->status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}