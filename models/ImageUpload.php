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

    static function deleteCurrentImage($currentImage){
        if (self::fileExists($currentImage)) {
            unlink(self::getFolder() . $currentImage);
        }
    }

    static function fileExists($currentImage){
        return file_exists(self::getFolder().$currentImage);
    }


    public function uploadFile(UploadedFile $file, $currentImage)
    {
        $this->image = $file;

        if ($this->validate()) {
            self::deleteCurrentImage($currentImage);

            $filename = strtolower(md5(uniqid($file->baseName)) . '.' . $file->extension);;

            $file->saveAs(self::getFolder() . $filename);

            return $filename;
        }

    }


}