<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property int $expired_reset_token
 * @property string $email
 * @property int $owner_id
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 * @property string $access_token
 * @property string $device_id
 * @property string $push_token
 * @property int $push_os
 * @property string $first_name
 * @property string $last_name
 * @property string $phone
 * @property string $address
 * @property string $avatar_url
 * @property string $identity_number
 * @property string $identity_date ngay cap cmnd
 * @property string $identity_url
 * @property int $verify_number
 * @property int $confirmed_email
 * @property string $family_register_url
 * @property int $driver_number
 * @property string $driver_license_url
 * @property string $driver_date
 * @property string $driver_expire
 * @property string $driver_register_url
 * @property string $driver_check_url
 * @property string $driver_check_expire
 * @property int $vehicle_type_id
 * @property int $is_personal
 * @property int $is_admin_active
 * @property int $is_processing
 * @property string $current_role
 * @property int $accept_vehicle
 * @property int $accept_truck
 * @property int $accept_container
 * @property int $accept_contract_vehicle
 * @property int $accept_contract_truck
 * @property int $accept_contract_container
 */
class Users extends \yii\db\ActiveRecord
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
            [['username', 'auth_key', 'password_hash', 'email', 'created_at', 'updated_at', 'driver_number', 'driver_date', 'driver_expire', 'driver_register_url', 'driver_check_url', 'driver_check_expire', 'accept_vehicle', 'accept_truck', 'accept_container', 'accept_contract_vehicle', 'accept_contract_truck', 'accept_contract_container'], 'required'],
            [['expired_reset_token', 'owner_id', 'status', 'created_at', 'updated_at', 'push_os', 'verify_number', 'confirmed_email', 'driver_number', 'vehicle_type_id', 'is_personal', 'is_admin_active', 'is_processing', 'accept_vehicle', 'accept_truck', 'accept_container', 'accept_contract_vehicle', 'accept_contract_truck', 'accept_contract_container'], 'integer'],
            [['identity_date', 'driver_date', 'driver_expire', 'driver_check_expire'], 'safe'],
            [['driver_register_url', 'driver_check_url'], 'string'],
            [['username', 'password_hash', 'password_reset_token', 'email', 'access_token', 'device_id', 'push_token', 'family_register_url', 'driver_license_url', 'current_role'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['first_name'], 'string', 'max' => 50],
            [['last_name', 'avatar_url', 'identity_number', 'identity_url'], 'string', 'max' => 100],
            [['phone'], 'string', 'max' => 20],
            [['address'], 'string', 'max' => 250],
            [['username'], 'unique'],
            [['email'], 'unique'],
            [['password_reset_token'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'expired_reset_token' => 'Expired Reset Token',
            'email' => 'Email',
            'owner_id' => 'Owner ID',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'access_token' => 'Access Token',
            'device_id' => 'Device ID',
            'push_token' => 'Push Token',
            'push_os' => 'Push Os',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'phone' => 'Phone',
            'address' => 'Address',
            'avatar_url' => 'Avatar Url',
            'identity_number' => 'Identity Number',
            'identity_date' => 'Identity Date',
            'identity_url' => 'Identity Url',
            'verify_number' => 'Verify Number',
            'confirmed_email' => 'Confirmed Email',
            'family_register_url' => 'Family Register Url',
            'driver_number' => 'Driver Number',
            'driver_license_url' => 'Driver License Url',
            'driver_date' => 'Driver Date',
            'driver_expire' => 'Driver Expire',
            'driver_register_url' => 'Driver Register Url',
            'driver_check_url' => 'Driver Check Url',
            'driver_check_expire' => 'Driver Check Expire',
            'vehicle_type_id' => 'Vehicle Type ID',
            'is_personal' => 'Is Personal',
            'is_admin_active' => 'Is Admin Active',
            'is_processing' => 'Is Processing',
            'current_role' => 'Current Role',
            'accept_vehicle' => 'Accept Vehicle',
            'accept_truck' => 'Accept Truck',
            'accept_container' => 'Accept Container',
            'accept_contract_vehicle' => 'Accept Contract Vehicle',
            'accept_contract_truck' => 'Accept Contract Truck',
            'accept_contract_container' => 'Accept Contract Container',
        ];
    }

    public function getFullName()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
}
