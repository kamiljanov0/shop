<?php

namespace App\Providers;
use App\Http\Controllers\CategoryController;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductItem;
use App\Policies\CategoryPolicy;
use App\Policies\ProductItemPolicy;
use App\Policies\ProductPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Product::class => ProductPolicy::class,
        ProductItem::class => ProductItemPolicy::class,
        Category::class => CategoryPolicy::class,
        // 'App\Models\Model' => 'App\Policies\ModelPolicy'
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

    }
}
