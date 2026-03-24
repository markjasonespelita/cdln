<?php

namespace App\Models;

use OwenIt\Auditing\Contracts\Auditable;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcementcomments extends Model implements Auditable
{
    /** @use HasFactory<\Database\Factories\AnnouncementcommentsFactory> */

    protected $fillable = ["announcements_id","announcements_users_id","users_id","comment","isTrash"]; 


    use \OwenIt\Auditing\Auditable;

    protected $auditExclude = ['id'];

    public function generateTags(): array
    {
        return [
            'id:' . $this->id,
        ];
    }
                                            
    use HasFactory;

    public function announcements()
    {
        return $this->belongsTo(Announcements::class, 'announcements_id');
    }

    public function announcementsUsersId()
    {
        return $this->belongsTo(User::class, 'announcements_users_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}
