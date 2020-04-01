<?php

namespace Modules\Announcement\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\AnnouncementType\Models\AnnouncementType;

class Announcement extends Model
{
    use SoftDeletes;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'announcement';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    protected $hidden = [];

    public function announcement_type(){
        return $this->belongsTo(AnnouncementType::class);    
    }

}
