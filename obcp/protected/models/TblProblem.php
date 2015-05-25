<?php

/**
 * This is the model class for table "tbl_problem".
 *
 * The followings are the available columns in table 'tbl_problem':
 * @property integer $id
 * @property string $tags
 * @property string $title
 * @property string $description
 * @property string $images
 * @property string $links
 * @property string $downloadables
 * @property string $docs
 * @property string $created_On
 * @property string $last_update_On
 * @property integer $created_By
 * @property integer $is_Open
 * @property integer $credit
 *
 * The followings are the available model relations:
 * @property TblUser $createdBy
 */
class TblProblem extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_problem';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, title, description, created_On, last_update_On, created_By, is_Open, credit', 'required'),
			array('id, created_By, is_Open, credit', 'numerical', 'integerOnly'=>true),
			array('tags, images, links, downloadables, docs', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, tags, title, description, images, links, downloadables, docs, created_On, last_update_On, created_By, is_Open, credit', 'safe', 'on'=>'search'),
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
			'createdBy' => array(self::BELONGS_TO, 'TblUser', 'created_By'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'tags' => 'Tags',
			'title' => 'Title',
			'description' => 'Description',
			'images' => 'Images',
			'links' => 'Links',
			'downloadables' => 'Downloadables',
			'docs' => 'Docs',
			'created_On' => 'Created On',
			'last_update_On' => 'Last Update On',
			'created_By' => 'Created By',
			'is_Open' => 'Is Open',
			'credit' => 'Credit',
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
		$criteria->compare('tags',$this->tags,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('images',$this->images,true);
		$criteria->compare('links',$this->links,true);
		$criteria->compare('downloadables',$this->downloadables,true);
		$criteria->compare('docs',$this->docs,true);
		$criteria->compare('created_On',$this->created_On,true);
		$criteria->compare('last_update_On',$this->last_update_On,true);
		$criteria->compare('created_By',$this->created_By);
		$criteria->compare('is_Open',$this->is_Open);
		$criteria->compare('credit',$this->credit);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TblProblem the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
