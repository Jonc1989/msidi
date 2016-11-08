<?php namespace App\Modules\Common\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'categories';
    /**
     * @var array
     */
    protected $fillable = [
        'id', 'name', 'created_at', 'updated_at'
    ];

    public function posts()
    {
        return $this->hasMany( 'App\Modules\Common\Models\Posts', 'id' );
    }
}
