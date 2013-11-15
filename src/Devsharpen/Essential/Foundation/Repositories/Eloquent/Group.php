<?php namespace Devsharpen\Essential\Foundation\Repositories\Eloquent;

use Illuminate\Database\Eloquent\Model;
use Devsharpen\Essential\Foundation\Repositories\GroupInterface;
//use Devsharpen\Foundation\Repositories\Eloquent\Base;

class Group extends Model implements GroupInterface
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'groups';

    /**
     * [$fillable description]
     *
     * @var array
     */
    protected $fillable = array('id','name');

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
     * [getId description]
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
     * @return [type] [description]
     */
    public function getName()
    {
        return $this->name;
    }
}
