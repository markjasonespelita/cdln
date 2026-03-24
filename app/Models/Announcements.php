<?php

namespace App\Models;

use OwenIt\Auditing\Contracts\Auditable;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcements extends Model implements Auditable
{
    /** @use HasFactory<\Database\Factories\AnnouncementsFactory> */

    protected $fillable = ["departments_id", "semester", "title","slug","content","category","attachment_path","published_at","expires_at","status","users_id","isTrash"]; 


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

    public function announcementComments()
    {
        return $this->hasMany(Announcementcomments::class);
    }

    public function departments()
    {
        return $this->belongsTo(Departments::class, 'departments_id');
    }

    public function announcementReactions()
    {
        return $this->hasMany(Announcementreactions::class);
    }

    public function announcementOtherFiles()
    {
        return $this->hasMany(Announcementotherfiles::class);
    }
}
