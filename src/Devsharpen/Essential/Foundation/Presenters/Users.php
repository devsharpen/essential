<?php namespace Devsharpen\Essential\Foundation\Presenters;

use Str;
use Devsharpen\Essential\Foundation\Repositories\UserInterface;

class Users extends CommonPresenter
{
    /**
     * [__construct description]
     *
     * @method __construct
     *
     * @param UserInterface $users [description]
     */
    public function __construct(UserInterface $users)
    {
        $this->resource = $users;
    }

    public function username()
    {
        return Str::title($this->resource->username);
    }

    public function password()
    {
        return '**********';
    }

}
