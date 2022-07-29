<?php

namespace App\Services;

use App\Models\GroupOption;

/**
 *
 */
class OptionGroupService extends AbstractService
{
    /**
     * @var GroupOption
     */
    protected GroupOption $model;

    /**
     * @param GroupOption $model
     */
    public function __construct(GroupOption $model)
    {
        $this->model = $model;
    }
}