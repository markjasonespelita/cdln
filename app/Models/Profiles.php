<?php

namespace App\Models;

use OwenIt\Auditing\Contracts\Auditable;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profiles extends Model implements Auditable
{
    /** @use HasFactory<\Database\Factories\ProfilesFactory> */

    protected $fillable = ["firstname","lastname","gender","birthdate","phonenumber","address","mothersname","fathersname","emergency_contact", "users_id", "isTrash"]; 


    use \OwenIt\Auditing\Auditable;

    protected $auditExclude = ['id'];

    public function generateTags(): array
    {
        return [
            'id:' . $this->id,
        ];
    }
                                            
    use HasFactory;
}
