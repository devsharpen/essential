<?php namespace Devsharpen\Essential\Foundation\Repositories\Eloquent;

use Illuminate\Database\Eloquent\Model;
use Devsharpen\Essential\Foundation\Repositories\ProfilInterface;

class Profil extends Model implements ProfilInterface
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users_profiles';

    /**
     * [$primaryKey description]
     *
     * @var string
     */
    protected $primaryKey = 'user_id';

    /**
     * [$guarded description]
     *
     * @var array
     */
    protected $guarded = array();

    /**
     * [user description]
     *
     * @return [type] [description]
     */
    public function user()
    {
        return $this->belongsTo('Devsharpen\Essential\Foundation\Repositories\Eloquent\User','user_id', 'id');
    }
}
