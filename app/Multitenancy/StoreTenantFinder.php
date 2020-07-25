<?php

namespace App\Multitenancy;


use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Spatie\Multitenancy\Models\Concerns\UsesTenantModel;
use Spatie\Multitenancy\Models\Tenant;
use Spatie\Multitenancy\TenantFinder\TenantFinder;

class StoreTenantFinder extends TenantFinder
{
    use UsesTenantModel;

    public function findForRequest(Request $request):?Tenant
    {
        $host = $request->getHost();

        config([
            "app.url" => $request->getSchemeAndHttpHost(),
            "filesystems.disks.public.url" => $request->getSchemeAndHttpHost() . '/storage'
        ]);

        if (Str::endsWith($host, '.' . config('app.landlord_domain'))) {
            $subdomain = Str::before($host, '.' . config('app.landlord_domain'));

            return $this->getTenantModel()::whereName($subdomain)->first();
        }

        return $this->getTenantModel()::whereDomain($host)->first();
    }
}
