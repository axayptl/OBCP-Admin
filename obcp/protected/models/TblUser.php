<?php

/**
 * This is the model class for table "tbl_user".
 *
 * The followings are the available columns in table 'tbl_user':
 * @property integer $id
 * @property string $name
 * @property string $image
 * @property integer $role_Id
 * @property string $device_push_id
 * @property string $password
 *
 * The followings are the available model relations:
 * @property TblGeneralMessage[] $tblGeneralMessages
 * @property TblLogs[] $tblLogs
 * @property TblMessage[] $tblMessages
 * @property TblMessage[] $tblMessages1
 * @property TblProblem[] $tblProblems
 * @property TblSolution[] $tblSolutions
 */
class TblUser extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, image, role_Id, device_push_id, password', 'required'),
			array('role_Id', 'numerical', 'integerOnly'=>true),
			array('name, password', 'length', 'max'=>255),
			array('device_push_id', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, image, role_Id, device_push_id, password', 'safe', 'on'=>'search'),
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
			'tblGeneralMessages' => array(self::HAS_MANY, 'TblGeneralMessage', 'from_user_id'),
			'tblLogs' => array(self::HAS_MANY, 'TblLogs', 'user_id'),
			'tblMessages' => array(self::HAS_MANY, 'TblMessage', 'to_user_id'),
			'tblMessages1' => array(self::HAS_MANY, 'TblMessage', 'from_user_id'),
			'tblProblems' => array(self::HAS_MANY, 'TblProblem', 'created_By'),
			'tblSolutions' => array(self::HAS_MANY, 'TblSolution', 'created_by'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'image' => 'Image',
			'role_Id' => 'Role',
			'device_push_id' => 'Device Push',
			'password' => 'Password',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('role_Id',$this->role_Id);
		$criteria->compare('device_push_id',$this->device_push_id,true);
		$criteria->compare('password',$this->password,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TblUser the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
