<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait, SoftDeletingTrait;

    public static $rules_update = array(
        'anrede'=>'required|alpha|min:2',
        'titel'=>'min:2',
        'vorname'=>'required|alpha_spaces|min:2',
        'nachname'=>'required|alpha_spaces|min:2',
        'email'=>'required|email',
        'password'=>'alpha_num|between:6,12|confirmed',
        'password_confirmation'=>'alpha_num|between:6,12'
    );

    public static $rules = array(
        'anrede'=>'required|alpha|min:2',
        'titel'=>'alpha|min:2',
        'vorname'=>'required|alpha_spaces|min:2',
        'nachname'=>'required|alpha_spaces|min:2',
        'email'=>'required|email|unique:users',
        'password'=>'required|alpha_num|between:6,12|confirmed',
        'password_confirmation'=>'required|alpha_num|between:6,12'
    );

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

    /**
     * @var array
     */
    protected $fillable = ['anrede', 'titel', 'vorname', 'nachname', 'email', 'password'];

    /**
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * Maybe this is empty on form submit
     *
     * @param $value
     */
    public function setTitelAttribute($value)
    {
        $this->attributes['titel'] = $value ?: null;
    }

    /**
     * Hash the password on every save, no need for controller Hash::make
     *
     * @param $value
     */
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }

    /**
     * @return mixed
     */
    public function roles()
    {
        return $this->belongsToMany('Role')->withTimestamps();
    }

    /**
     * Does the user have a particular role?
     *
     * @param $name
     * @return bool
     */
    public function hasRole($name)
    {
        foreach ($this->roles as $role)
        {
            if ($role->name == $name) return true;
        }
        return false;
    }

    /**
     * Assign a role to the user
     *
     * @param $role
     * @return mixed
     */
    public function assignRole($role)
    {
        return $this->roles()->attach($role);
    }

    /**
     * Remove a role from a user
     *
     * @param $role
     * @return mixed
     */
    public function removeRole($role)
    {
        return $this->roles()->detach($role);
    }

    /**
     * Remove all roles from a user
     *
     * @param $role
     * @return mixed
     */
    public function removeRoles()
    {
        return $this->roles()->detach();
    }
}
