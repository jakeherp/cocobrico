<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'firstName', 'lastName', 'email', 'password', 'register_token'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Gives back, if the user has a given permission.
     *
     * @param  string  $slug
     * @return boolean
     */
    public function hasPermission($slug)
    {
        $check = $this->permissions()->where('slug', $slug)->get();
        if(count($check) === 1){
            return true;
        }
        else{
            return false;
        }
    }

    /**
     * Toggles a permission for a user.
     *
     * @param  string  $slug
     * @return boolean
     */
    public function togglePermission($slug)
    {
        if($this->hasPermission($slug)){
            DB::table('permissions')->where('user_id', '=', $this->id)->where('slug', '=', 'is_admin')->delete();
        }
        else{
            $permission = new Permission();
            $permission->slug = 'is_customer';
            $this->permissions()->save($permission);
        }
    }

    /**
     * Relations to other models:
     */

    /**
     * Get the identities associated with the user.
     */
    public function identities()
    {
        return $this->belongsToMany('App\Identity','user_identity');
    }

    /**
     * Get the permissions associated with the user.
     */
    public function permissions()
    {
        return $this->hasMany('App\Permission');
    }

    /**
     * Get the files associated with the user.
     */
    public function files()
    {
        return $this->hasMany('App\File');
    }
}
