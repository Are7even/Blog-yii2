<?php


namespace app\models;


use yii\base\Model;
use yii\web\UploadedFile;

class ImageUpload extends Model
{

    public $image;

    public function rules()
    {
        return [
            [['image'], 'required'],
            [['image'], 'file', 'extensions' => 'jpg,png,jpeg']
        ];
    }

    static function getFolder()
    {
        return \Yii::getAlias('@web') . 'uploads/';
    }


    public function uploadFile(UploadedFile $file, $currentImage)
    {
        $this->image = $file;

        if ($this->validate()) {
            if (file_exists(self::getFolder() . $currentImage)) {
                unlink(self::getFolder() . $currentImage);
            }

            $filename = strtolower(md5(uniqid($file->baseName)) . '.' . $file->extension);;

            $file->saveAs(self::getFolder() . $filename);
            return $filename;
        }

    }


}