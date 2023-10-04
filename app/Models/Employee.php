<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Employee extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function state():BelongsTo{
        return $this->belongsto(State::class);
    }
    public function country():BelongsTo{
        return $this->belongsto(Country::class);
    }
    public function department():BelongsTo{
        return $this->belongsto(Department::class);
    }
    public function city():BelongsTo{
        return $this->belongsto(City::class);
    }

    public function team():BelongsTo{
        return $this->belongsto(Team::class);
    }
}
