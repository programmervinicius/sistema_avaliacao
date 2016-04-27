<?php

/**
 * This is the model class for table "matricula".
 *
 * The followings are the available columns in table 'matricula':
 * @property integer $idmatricula
 * @property integer $idcurso
 * @property integer $idusuario
 * @property string $status
 *
 * The followings are the available model relations:
 * @property Usuario $idusuario0
 * @property Curso $idcurso0
 * @property Prova[] $provas
 */
class Matricula extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Matricula the static model class
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
		return 'matricula';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idcurso, idusuario, status', 'required'),
			array('idcurso, idusuario', 'numerical', 'integerOnly'=>true),
			array('status', 'length', 'max'=>9),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idmatricula, idcurso, idusuario, status', 'safe', 'on'=>'search'),
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
			'idusuario0' => array(self::BELONGS_TO, 'Usuario', 'idusuario'),
			'idcurso0' => array(self::BELONGS_TO, 'Curso', 'idcurso'),
			'provas' => array(self::HAS_MANY, 'Prova', 'idmatricula'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idmatricula' => 'Idmatricula',
			'idcurso' => 'Idcurso',
			'idusuario' => 'Idusuario',
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

		$criteria->compare('idmatricula',$this->idmatricula);
		$criteria->compare('idcurso',$this->idcurso);
		$criteria->compare('idusuario',$this->idusuario);
		$criteria->compare('status',$this->status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}