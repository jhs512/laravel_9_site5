<?php

namespace App\Models;

use App\Models\User;
use App\Traits\HasUser;
use App\Traits\ModelHelper;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Article extends Model
{
    use HasFactory, HasUser, ModelHelper, HasUser;

    public function title(): Attribute
    {
        return new Attribute(
            get: fn ($value) => $value,
            set: fn ($value) => $value,
        );
    }

    public function body(): Attribute
    {
        return new Attribute(
            get: fn ($value) => $value,
            set: fn ($value) => $value,
        );
    }
}
