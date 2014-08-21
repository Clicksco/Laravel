<?php
namespace Acme\Project\Repository;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register() {
        $this->registerArticleRepositories();
    }

    private function registerArticleRepositories()
    {
        $this->app->bind(
            'Acme\Project\Repository\ArticleRepositoryInterface',
            'Acme\Project\Repository\EloquentArticleRepository'
        );
    }
}
