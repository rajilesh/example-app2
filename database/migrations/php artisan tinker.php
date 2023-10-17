composer dump-autoload 
php artisan cache:clear
php artisan migrate    

php artisan tinker
$tenant1 = App\Models\Tenant::create([]);
$tenant1->domains()->create(['domain' => 'fooaaaa.localhost']);

$tenant2 = App\Models\Tenant::create([]);
$tenant2->domains()->create(['domain' => 'baraa.localhost']);

App\Models\Tenant::all()->runForEach(function () {
    App\Models\User::factory()->create();
});