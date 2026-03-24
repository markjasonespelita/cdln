<?php

namespace App\Models;

use OwenIt\Auditing\Contracts\Auditable;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eventcomments extends Model implements Auditable
{
    /** @use HasFactory<\Database\Factories\EventcommentsFactory> */

    protected $fillable = [
        "events_id",
        "events_users_id",
        "comment",
        "users_id",
        "isTrash"
    ]; 


    use \OwenIt\Auditing\Auditable;

    protected $auditExclude = ['id'];

    public function generateTags(): array
    {
        return [
            'id:' . $this->id,
        ];
    }
                                            
    use HasFactory;

    public function events()
    {
        return $this->belongsTo(events::class, 'events_id');
    }

    public function eventsUsersId()
    {
        return $this->belongsTo(User::class, 'events_users_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}
