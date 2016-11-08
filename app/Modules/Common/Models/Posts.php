<?php

namespace App\Modules\Common\Models;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'posts';
    /**
     * @var array
     */
    protected $fillable = [
        'id', 'name', 'content', 'image', 'category_id', 'created_at', 'updated_at'
    ];

    public function categories()
    {
        return $this->belongsTo('App\Modules\Common\Models\Categories', 'category_id');
    }

}
