<?php

namespace Modules\Project\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\Project as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class Project extends Authenticatable implements JWTSubject
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'number', 'name', 'observations', 'execution_mode_id', 'resource_id', 'award_type', 'fund_id', 'start_date', 'end_date', 'fiscal_exercise', 'benefited_inhabitants', 'goals', 'unit_of_measurement', 'federal_resource', 'state_resource', 'municipal_resource', 'other_resources', 'beneficiary_contribution', 'total_budgeted_amount', 'macro_location', 'micro_location', 'location', 'address', 'between_street', 'and_street', 'latitude', 'longitude', 'who_elaborated', 'position_elaborated',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'start_date' => 'datetime', 'end_date' => 'datetime',
    ];

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier() {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims() {
        return [];
    }
}
