<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailTracker extends Model
{
    use HasFactory;
    protected $table = 'emails_tracker';
    protected $fillable = [
        'mail_subject', 'tracker', 'mail_id', 'show',
    ];
}
