<?php namespace Devsharpen\Essential\Foundation\Repositories\Eloquent;

use Illuminate\Database\Eloquent\Model;
use Devsharpen\Essential\Foundation\Repositories\RoleInterface;

class Role extends Model implements RoleInterface
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'roles';

    /**
     * [$fillable description]
     *
     * @var array
     */
    protected $fillable = array('id','name','permissions','shareable');

   /**
    * [rolable description]
    *
    * relations for users and groups
    *
    * @return [type] [description]
    */
    public function rolable()
    {
        return
            $this->morphToMany
            (
                'Devsharpen\Essential\Foundation\Repositories\Eloquent\Role',
                'rolable',
                'rolable'
            );
    }

    /**
     * [usersRolable description]
     *
     * temporary till inverse ll be set
     *
     * @return [type] [description]
     */
    public function users()
    {
        return
            $this->morphToMany
            (
                'Devsharpen\Essential\Foundation\Repositories\Eloquent\User',
                'rolable',
                'rolable',
                'role_id',
                'rolable_id',
                'role',
                true
            );
    }

    /**
     * [groupsRolable description]
     *
     * @return [type] [description]
     */
    public function groups()
    {
        return
            $this->morphToMany
            (
                'Devsharpen\Essential\Foundation\Repositories\Eloquent\Group',
                'rolable',
                'rolable',
                'role_id',
                'rolable_id',
                'role',
                true
            );
    }

    /**
     * [resources description]
     *
     * @method resources
     *
     * @return [type] [description]
     */
    public function resources()
    {
        return
            $this->morphToMany
            (
                'Devsharpen\Essential\Foundation\Repositories\Eloquent\Resource',
                'rolable',
                'rolable',
                'role_id',
                'rolable_id',
                'role',
                true
            );
    }

    /**
     * [profil description]
     *
     * @method profil
     *
     * @return [type] [description]
     */
    public function permission()
    {
        return $this->hasOne('Devsharpen\Essential\Foundation\Repositories\Eloquent\Permission','role_id', 'id');
    }

    /**
     * [getId description]
     *
     * @method getId
     *
     * @return [type] [description]
     */
    public function getId()
    {
        return $this->getKey();
    }

    /**
     * [getName description]
     *
     * @method getName
     *
     * @return [type] [description]
     */
    public function getName()
    {
        return $this->name;
    }
}
