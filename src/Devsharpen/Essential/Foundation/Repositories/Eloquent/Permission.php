<?php namespace Devsharpen\Essential\Foundation\Repositories\Eloquent;

use Illuminate\Database\Eloquent\Model;
use Devsharpen\Essential\Foundation\Repositories\PermissionInterface;

class Permission extends Model implements PermissionInterface
{
    protected $table    = 'permissions';
    protected $primaryKey = 'role_id';
    protected $fillable = array('role_id','view','create','edit','delete','undelete','operator', 'master', 'owner');
    protected $guarded  = array();

    /**
     * [role description]
     *
     * @method role
     *
     * @return [type] [description]
     */
    public function role()
    {
        return $this->belongsTo('Devsharpen\Essential\Foundation\Repositories\Eloquent\Role', 'role_id', 'id');
    }

}
