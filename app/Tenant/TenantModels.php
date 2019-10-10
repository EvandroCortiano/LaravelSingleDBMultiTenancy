<?php

namespace App\Tenant;

use Illuminate\Database\Eloquent\Model;

trait TenantModels
{

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new TenantScope());

        static::creating(function (Model $obj) {
            $clinicas = \Tenant::getTenant();
            if($clinicas){
                $obj->clinicas_id = $clinicas->id;
            }
        });
    }

}
