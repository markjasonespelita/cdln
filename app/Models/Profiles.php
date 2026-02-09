<?php

namespace App\Models;

use OwenIt\Auditing\Contracts\Auditable;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profiles extends Model implements Auditable
{
    /** @use HasFactory<\Database\Factories\ProfilesFactory> */

    protected $fillable = ["firstname","lastname","gender","departments_id", "year", "birthdate","phonenumber","address","mothersname","fathersname","emergency_contact", "users_id", "isTrash"]; 


    use \OwenIt\Auditing\Auditable;

    protected $auditExclude = ['id'];

    public function generateTags(): array
    {
        return [
            'id:' . $this->id,
        ];
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function departments()
    {
        return $this->belongsTo(Departments::class, 'departments_id');
    }
                                            
    use HasFactory;
}
