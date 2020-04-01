<?php

namespace Modules\AnnouncementType\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Announcement\Models\Announcement;
use Askedio\SoftCascade\Traits\SoftCascadeTrait;

/**
 * Class AnnouncementType
 * @package Modules\AnnouncementType\Models
 */
class AnnouncementType extends Model {
    use SoftDeletes, SoftCascadeTrait;
    /*
     * @var array this define which relations is delete on cascade
     */
    protected $softCascade = ['announcement'];
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'announcement_type';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    protected $hidden = [];

    public function announcement(){
        return $this->hasMany(Announcement::class);
    }

}
