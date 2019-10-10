<?php

namespace App\Models;

use App\Tenant\TenantModels;
use Illuminate\Database\Eloquent\Model;

class Pacientes extends Model
{
    use TenantModels;

    protected $fillable = ['nome'];
}
