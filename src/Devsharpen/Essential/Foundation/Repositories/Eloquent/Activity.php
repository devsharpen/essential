<?php namespace Devsharpen\Essential\Foundation\Repositories\Eloquent;

use Illuminate\Database\Eloquent\Model;
use Devsharpen\Essential\Foundation\Repositories\ActivityInterface;

class Activity extends Model implements ActivityInterface
{
    protected $table = 'users_activities';

    protected $primaryKey = 'user_id';

    protected $fillable = array();

    protected $guarded = array(
        'reset_password_code',
        'activation_code',
        'persist_code',
    );

    protected $hidden = array(
        'reset_password_code',
        'activation_code',
        'persist_code',
    );

    /**
     * [user description]
     *
     * @return [type] [description]
     */
    public function user()
    {
        return $this->belongsTo('Devsharpen\Essential\Foundation\Repositories\Eloquent\User', 'user_id', 'id');
    }

    /**
     * [getActivated description]
     *
     * @return [type] [description]
     */
    public function getActivated()
    {
        return (bool) $this->activated;
    }

    /**
     * [getActivationCode description]
     *
     * @return [type] [description]
     */
    public function getActivationCode()
    {
        return (bool) $this->activated;
    }

    /**
     * [getPersistCode description]
     *
     * @return [type] [description]
     */
    public function getPersistCode()
    {
        return $this->persist_code;
    }

    /**
     * [getResetPasswordCode description]
     *
     * @method getResetPasswordCode
     *
     * @return [type] [description]
     */
    public function getResetPasswordCode()
    {
        return $this->reset_password_code;
    }
}
