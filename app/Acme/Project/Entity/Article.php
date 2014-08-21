<?php
namespace Acme\Project\Entity;

use \Illuminate\Database\Eloquent\SoftDeletingTrait;

class Article extends \Eloquent implements EntityRepository
{
    use SoftDeletingTrait;

    protected $fillable = [
        'title',
        'slug',
        'summary',
        'content',
    ];

    protected $hidden = [];

    public function author()
    {
        return $this->hasOne('Acme\Project\Entity\Author');
    }

    public function category()
    {
        return $this->hasOne('Acme\Project\Entity\Category');
    }

    public function getDates()
    {
        return [
            'created_at',
            'updated_at',
            'deleted_at',
        ];
    }
}
