<?php

namespace app\modules\v1\models;

use app\modules\v1\models\BaseModel;
use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $name Имя пользователя
 * @property string|null $email Электронная почта
 * @property string $password Пароль
 * @property string|null $createdAt Дата создания
 * @property string|null $updatedAt Дата изменения
 */
class User extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'password'], 'required'],
            [['createdAt', 'updatedAt'], 'safe'],
            [['name'], 'string', 'max' => 128],
            [['email'], 'string', 'max' => 100],
            [['password'], 'string', 'max' => 50],
        ];
    }

    public function behaviors()
    {
        return parent::behaviors();
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя пользователя',
            'email' => 'Электронная почта',
            'password' => 'Пароль',
            'createdAt' => 'Дата создания',
            'updatedAt' => 'Дата изменения',
        ];
    }

    public function toArray(array $fields = [], array $expand = [], $recursive = true)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
            'orders' => $this->orders
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::class, ['userId' => 'id']);
    }

    public function checkPass($password) {
        return $this->password == $password;
    }

    public function getUser() {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'accessToken' => md5(microtime(null))
        ];
    }
}
