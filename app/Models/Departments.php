<?php

namespace App\Models;

use OwenIt\Auditing\Contracts\Auditable;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departments extends Model implements Auditable
{
    /** @use HasFactory<\Database\Factories\DepartmentsFactory> */

    protected $fillable = ["name","isTrash"]; 


    use \OwenIt\Auditing\Auditable;

    protected $auditExclude = ['id'];

    public function generateTags(): array
    {
        return [
            'id:' . $this->id,
        ];
    }

    public function announcements()
    {
        return $this->hasMany(Announcements::class);
    }

    public function profiles()
    {
        return $this->hasMany(Profiles::class);
    }
                                            
    use HasFactory;
}
