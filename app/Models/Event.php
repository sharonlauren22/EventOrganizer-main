<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'venue',
        'date',
        'start_time',
        'description',
        'booking_url',
        'tags',
        'organizer_id',
        'user_id',
        'event_category_id',
    ];

    public function getdate()
    {
        // return Carbon::parse($this->date)->format('D, M d Y - h:i A');

        $date = Carbon::parse($this->date)->format('D, M d Y ');
        $time = Carbon::parse($this->start_time)->format('h:i A');

        return $date . '- '. $time;
    }

    public function organizer()
    {
        return $this->belongsTo(Organizer::class);
    }

    public function category(){
        return $this->belongsTo(EventCategory::class, 'event_category_id');
    }

    public function arrTags()
    {
        return explode(",", $this->tags);
    }
}
