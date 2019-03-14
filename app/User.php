<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Notifications\Notifiable;
use TCG\Voyager\Models\User as Model;
/**
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string|null $remember_token
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property string|null $avatar
 * @property int|null $role_id
 *
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method static Builder|static whereAvatar($value)
 * @method static Builder|static whereCreatedAt($value)
 * @method static Builder|static whereEmail($value)
 * @method static Builder|static whereId($value)
 * @method static Builder|static whereName($value)
 * @method static Builder|static wherePassword($value)
 * @method static Builder|static whereRememberToken($value)
 * @method static Builder|static whereRoleId($value)
 * @method static Builder|static whereUpdatedAt($value)
 * @mixin Builder
 */
class User extends Model
{
    use Notifiable;

    protected $fillable = ['name', 'email', 'password'];
    protected $hidden = ['password', 'remember_token'];
}
