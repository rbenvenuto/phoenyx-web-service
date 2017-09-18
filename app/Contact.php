<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'contact_name',
        'lead_referral_source',
        'date_initial_contact',
        'title',
        'company',
        'industry',
        'activity_desc',
        'address_1',
        'address_2',
        'address_3',
        'address_city',
        'address_state',
        'address_cep',
        'address_country',
        'phone',
        'email',
        'contact_status',
        'website',
        'linkedin_profile',
        'additional_desc',
        'representative_ID',
        'rating',
        'demand_desc',
        'budget'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
