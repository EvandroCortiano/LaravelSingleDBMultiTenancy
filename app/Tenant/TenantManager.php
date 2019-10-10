<?php
//usar declaracao do php7
declare(strict_types=1);

namespace App\Tenant;

use App\Models\Clinicas;

class TenantManager
{
    private $tenant;

    /**
     * Get the value of tenant
     */
    public function getTenant(): ?Clinicas
    {
        return $this->tenant;
    }

    /**
     * Set the value of tenant
     *
     * @return  self
     */
    public function setTenant(?Clinicas $tenant): void
    {
        $this->tenant = $tenant;
    }
}
