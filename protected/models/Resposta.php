<?php

/**
 * This is the model class for table "resposta".
 *
 * The followings are the available columns in table 'resposta':
 * @property integer $idresposta
 * @property integer $idprova
 * @property integer $idquestao
 * @property integer $idalternativa
 *
 * The followings are the available model relations:
 * @property Alternativa $idalternativa0
 * @property Prova $idprova0
 * @property Questao $idquestao0
 */
class Resposta extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Resposta the static model class
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
		return 'resposta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idprova, idquestao, idalternativa', 'required'),
			array('idprova, idquestao, idalternativa', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idresposta, idprova, idquestao, idalternativa', 'safe', 'on'=>'search'),
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
			'idalternativa0' => array(self::BELONGS_TO, 'Alternativa', 'idalternativa'),
			'idprova0' => array(self::BELONGS_TO, 'Prova', 'idprova'),
			'idquestao0' => array(self::BELONGS_TO, 'Questao', 'idquestao'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idresposta' => 'Idresposta',
			'idprova' => 'Idprova',
			'idquestao' => 'Idquestao',
			'idalternativa' => 'Idalternativa',
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

		$criteria->compare('idresposta',$this->idresposta);
		$criteria->compare('idprova',$this->idprova);
		$criteria->compare('idquestao',$this->idquestao);
		$criteria->compare('idalternativa',$this->idalternativa);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}