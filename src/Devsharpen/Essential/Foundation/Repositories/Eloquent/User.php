<?php namespace Devsharpen\Essential\Foundation\Repositories\Eloquent;

use Devsharpen\Essential\Foundation\Repositories\UserInterface;

class User extends BaseModel implements UserInterface
{
    public $presenter = 'Devsharpen\Essential\Foundation\Presenters\Users';

    protected $table    = 'users';
    protected $fillable = array('id','email','username','password','created_at','updated_at','deleted_at');
    protected $guarded  = array();
    protected $hidden   = array('password');

    /**
     * [roles description]
     *
     * @return [type] [description]
     */
    public function roles()
    {
        return $this->morphToMany('Devsharpen\Essential\Foundation\Repositories\Eloquent\Role', 'rolable', 'rolable');
    }

    /**
     * [permissions description]
     *
     * @return [type] [description]
     */
    public function permissions()
    {
        return $this->morphToMany('Devsharpen\Essential\Foundation\Repositories\Eloquent\Permission', 'permissionable', 'permissionable');
    }

    /**
     * [profile description]
     *
     * @return [type] [description]
     */
    public function profil()
    {
        return $this->hasOne('Devsharpen\Essential\Foundation\Repositories\Eloquent\Profil','user_id', 'id');
    }

    /**
     * [activity description]
     *
     * @return [type] [description]
     */
    public function activity()
    {
        return $this->hasOne('Devsharpen\Essential\Foundation\Repositories\Eloquent\Activity','user_id', 'id');
    }

    /**
     * [getId description]
     *
     * @return [type] [description]
     */
    public function getId()
    {
        return $this->getKey();
    }

    /**
     * [getUsername description]
     *
     * @return [type] [description]
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * [getPassword description]
     *
     * @return [type] [description]
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * [getRoles description]
     *
     * @return [type] [description]
     */
    public function getRoles()
    {
        return $this->roles();
    }

}
