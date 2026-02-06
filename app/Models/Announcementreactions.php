<?php

namespace App\Models;

use OwenIt\Auditing\Contracts\Auditable;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcementreactions extends Model implements Auditable
{
    /** @use HasFactory<\Database\Factories\AnnouncementreactionsFactory> */

    protected $fillable = ["announcements_id","users_id","isTrash"]; 


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

    public function users()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}
