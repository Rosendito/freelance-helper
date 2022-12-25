<?php

namespace App\Concerns\Actions;

trait IsMakeable
{
    /**
     * Make action instance
     *
     * @return static
     */
    public static function make(): static
    {
        return app(static::class);
    }
}
