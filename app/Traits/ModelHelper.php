<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Casts\Attribute;

trait ModelHelper
{
    public function matches(self $model): bool
    {
        return $this->id === $model->id;
    }

    public function id(): Attribute
    {
        return new Attribute(
            get: fn ($value) => $value,
            set: fn ($value) => $value,
        );
    }

    public function createdAt(): Attribute
    {
        return new Attribute(
            get: fn ($value) => $value,
            set: fn ($value) => $value,
        );
    }

    public function updatedAt(): Attribute
    {
        return new Attribute(
            get: fn ($value) => $value,
            set: fn ($value) => $value,
        );
    }
}
