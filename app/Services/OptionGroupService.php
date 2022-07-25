<?php
namespace App\Services;

use App\Models\OptionGroup;

/**
 *
 */
class OptionGroupService extends AbstractService
{
    /**
     * @var OptionGroup
     */
    protected OptionGroup$model;

    /**
     * @param OptionGroup $model
     */
    public function __construct(OptionGroup $model)
    {
        $this->model = $model;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAllForRelation(){
        return $this->model->where([['active', '=', 1]])->get();
    }
}