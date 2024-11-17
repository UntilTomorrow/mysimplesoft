<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;
    protected $table = 'Leads';
    protected $fillable = [
        'name',
        'phone',
        'email',
        'address',
        'company_name',
        'source',
        'status',
        'last_contact',
        'agent_assign',
        'group',
    ];

    public function source()
    {
        return $this->belongsTo(Source::class, 'source');
    }
    public function status()
    {
        return $this->belongsTo(Status::class, 'status');        
    }
    public function user()
    {
        return $this->belongsTo(User::class,'agent_assign');
    }
}
