<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "certificates".
 *
 * @property int $id
 * @property string $course_name
 * @property string $student_name
 * @property string $date_course_finished
 * @property bool $confirmed
 */
class Certificates extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'certificates';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['course_name', 'student_name', 'date_course_finished','confirmed'], 'required'],
            [['date_course_finished'], 'string'],
            [['confirmed'], 'boolean'],
            [['confirmed'], 'default','value' => false],
            [['course_name', 'student_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'course_name' => 'Course Name',
            'student_name' => 'Student Name',
            'date_course_finished' => 'Date Course Finished',
            'confirmed' => 'Confirmed'
        ];
    }

    /**
     * {@inheritdoc}
     * @return CertificatesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CertificatesQuery(get_called_class());
    }

    /**
     * @return int
     */
    public function getPk():int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getCourseName():string
    {
        return $this->course_name;
    }

    /**
     * @return string
     */
    public function getStudentName():string
    {
        return $this->student_name;
    }

    /**
     * @return string
     */
    public function getDateCourseFinished():string
    {
        return $this->date_course_finished;
    }

    /**
     * @return bool
     */
    public function getConfirmed():bool
    {
        return $this->confirmed;
    }
}
