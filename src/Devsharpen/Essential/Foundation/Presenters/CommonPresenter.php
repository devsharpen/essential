<?php namespace Devsharpen\Essential\Foundation\Presenters;

use Carbon\Carbon;
use McCool\LaravelAutoPresenter\BasePresenter;

class CommonPresenter extends BasePresenter
{

     /**
     * [created_at description]
     *
     * @method created_at
     *
     * @return [type] [description]
     */
    public function created_at()
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $this->resource->created_at, 'Europe/Berlin')
                     ->toFormattedDateString();
    }

    public function updated_at()
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $this->resource->updated_at, 'Europe/Berlin')
                     ->toFormattedDateString();
    }

    public function deleted_at()
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $this->resource->deleted_at, 'Europe/Berlin')
                     ->toFormattedDateString();
    }

}
