<?php

namespace App\Tenant;

use Illuminate\Database\Eloquent\Scope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class TenantScope implements Scope
{

    public function apply(Builder $builder, Model $model)
    {
        $clinicas = \Tenant::getTenant();
        if($clinicas){
            $builder->where('clinicas_id', $clinicas->id);
        }
    }
}
