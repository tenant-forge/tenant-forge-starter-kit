<?php

declare(strict_types=1);

namespace App\Actions\Tenant;

use TenantForge\Security\Models\CentralUser;
use TenantForge\Security\Models\User;
use TenantForge\Tenancy\Models\Tenant;
use Throwable;

use function info;

final class CreateTenantUserAction
{
    /**
     * @throws Throwable
     */
    public function handle(Tenant $tenant, CentralUser $user): void
    {
        $tenant->run(function () use ($user, $tenant) {
            $user = User::query()->create([
                'global_id' => $user->global_id,
                'name' => $user->name,
                'email' => $user->email,
                'password' => $user->password,
            ]);

            info('Tenant user created', [
                'tenant' => $tenant,
                'user' => $user,
            ]);
        });

    }
}
