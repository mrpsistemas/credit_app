<?php

namespace App\Jobs\Tenant;

use App\Models\Tenant;
use App\Models\User;
use App\Notifications\Tenant\OwnerWelcomeNotification;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Str;

class WelcomeNotification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct(public Tenant $tenant)
    {}

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $this->tenant->run(function (Tenant $tenant)
        {
            $password = Str::random(8);
            $tenant->password = bcrypt($password);
            $owner = User::create($tenant->only('name', 'email', 'password'));
            $owner->notify(new OwnerWelcomeNotification($password, $tenant->domain . '.' . config('tenancy.central_domains')[0]));
        });
    }
}
