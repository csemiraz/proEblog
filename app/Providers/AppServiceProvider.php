<?php

namespace App\Providers;


use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use App\Category;
use App\Tag;
use App\Post;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        $categories = Category::all();
        $tags = Tag::all();

        $mvPosts = Post::where('status', 1)
                         ->where('approval_status', 1)
                         ->orderBy('view_count', 'desc')
                         ->take(3)
                         ->get();

        view()->share([
            'categories' => $categories,
            'tags' => $tags,
            'mvPosts' => $mvPosts,
        ]);
    }
}
