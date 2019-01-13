<?php

namespace Djavue\Auth\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Permission
 *
 * @package Auth
 * @property string $title
*/
class Permission extends Model
{
    
    protected $fillable = ['title'];
    

    public static function storeValidation($request)
    {
        return [
            'title' => 'max:191|required'
        ];
    }

    public static function updateValidation($request)
    {
        return [
            'title' => 'max:191|required'
        ];
    }

    

    
    
    
}
