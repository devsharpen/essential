<?php namespace Devsharpen\Essential\Foundation\Repositories\Eloquent;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    /**
     * [setPresenter description]
     *
     * @method setPresenter
     *
     * @param [type] $presenter [description]
     */
    public function setPresenter($presenter = null)
    {
        $this->presenter = $presenter;

        return $this;
    }
}
