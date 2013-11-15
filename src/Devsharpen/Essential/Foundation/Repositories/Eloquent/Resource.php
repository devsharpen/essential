<?php namespace Devsharpen\Essential\Foundation\Repositories\Eloquent;

use Illuminate\Database\Eloquent\Model;
use Devsharpen\Essential\Foundation\Repositories\ResourceInterface;

class Resource extends Model implements ResourceInterface
{
    protected $table    = 'resources';
    protected $fillable = array('id','name','uri','action','pattern','type','permissions');
    protected $guarded  = array();

    /**
     * [roles description]
     *
     * @method roles
     *
     * @return [type] [description]
     */
    public function roles()
    {
        return $this->morphToMany('Devsharpen\Essential\Foundation\Repositories\Eloquent\Role', 'rolable', 'rolable');
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
    public function getName()
    {
        return $this->name;
    }

}
