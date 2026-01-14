<?php

namespace App\Models;

use OwenIt\Auditing\Contracts\Auditable;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model implements Auditable
{
    /** @use HasFactory<\Database\Factories\EventsFactory> */

    protected $fillable = ["title","description","start_date","end_date","all_day","location","category","users_id","isTrash"]; 


    use \OwenIt\Auditing\Auditable;

    protected $auditExclude = ['id'];

    public function generateTags(): array
    {
        return [
            'id:' . $this->id,
        ];
    }
                                            
    use HasFactory;

    public function users()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function eventComments()
    {
        return $this->hasMany(Eventcomments::class);
    }
}
