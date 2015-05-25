<?php

/**
 * This is the model class for table "tbl_solution".
 *
 * The followings are the available columns in table 'tbl_solution':
 * @property integer $id
 * @property string $title
 * @property string $tag
 * @property string $description
 * @property string $links
 * @property string $images
 * @property string $downloads
 * @property integer $created_by
 * @property string $created_on
 * @property integer $helpful_count
 * @property integer $not_helpful_count
 *
 * The followings are the available model relations:
 * @property TblUser $createdBy
 */
class TblSolution extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_solution';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, tag, description, links, images, downloads, created_by, created_on, helpful_count, not_helpful_count', 'required'),
			array('created_by, helpful_count, not_helpful_count', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, title, tag, description, links, images, downloads, created_by, created_on, helpful_count, not_helpful_count', 'safe', 'on'=>'search'),
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
			'createdBy' => array(self::BELONGS_TO, 'TblUser', 'created_by'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'title' => 'Title',
			'tag' => 'Tag',
			'description' => 'Description',
			'links' => 'Links',
			'images' => 'Images',
			'downloads' => 'Downloads',
			'created_by' => 'Created By',
			'created_on' => 'Created On',
			'helpful_count' => 'Helpful Count',
			'not_helpful_count' => 'Not Helpful Count',
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
		$criteria->compare('title',$this->title,true);
		$criteria->compare('tag',$this->tag,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('links',$this->links,true);
		$criteria->compare('images',$this->images,true);
		$criteria->compare('downloads',$this->downloads,true);
		$criteria->compare('created_by',$this->created_by);
		$criteria->compare('created_on',$this->created_on,true);
		$criteria->compare('helpful_count',$this->helpful_count);
		$criteria->compare('not_helpful_count',$this->not_helpful_count);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TblSolution the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
