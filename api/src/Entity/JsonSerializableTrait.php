<?php
namespace App\Entity;

trait JsonSerializableTrait
{
    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
