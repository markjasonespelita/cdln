<?php

namespace App\Models;

use OwenIt\Auditing\Contracts\Auditable;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcementotherfiles extends Model implements Auditable
{
    /** @use HasFactory<\Database\Factories\AnnouncementotherfilesFactory> */

    protected $fillable = ["announcements_id","users_id","file","isTrash"]; 


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
        return $this->belongsTo(Announcements::class, 'announcements_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
                                            
    use HasFactory;
}
