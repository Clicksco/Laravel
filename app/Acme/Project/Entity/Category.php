<?php
namespace Acme\Project\Entity;

class Category extends \Eloquent implements EntityRepository
{
    protected $fillable = [
        'name',
        'slug',
    ];

    public function article()
    {
        return $this->belongsToMany('Acme\Project\Entity\Article');
    }
}
