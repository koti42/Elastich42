<?php

namespace App\Models;

use Elasticquent\ElasticquentTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Elasticquent\ElasticquentCollectionTrait;

class Article extends Model
{
    use ElasticquentTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'title',
        'body',
        'tags',
    ];
    protected $mappingProperties= array(
        [
            'title'=>[
                'type'=>'text',
                "analyzer"=>"standard",
            ],
            'body'=>[
                'type'=>'text',
                "analyzer"=>"standard",
            ],
            'tags'=>[
                'type'=>'text',
                "analyzer"=>"standard",
            ],

        ],
    );
}
