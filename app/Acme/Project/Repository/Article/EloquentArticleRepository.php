<?php
namespace Acme\Project\Repository\Article;

use Acme\Project\Repository\EloquentRepository;
use Acme\Project\Entity\Article;

class EloquentArticleRepository extends EloquentRepository implements
    ArticleRepositoryInterface
{
    public function __construct(Article $model)
    {
        parent::__construct($model);
    }
}
