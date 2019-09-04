<?php

namespace App\Models\Admin;


trait AdminAttributes
{

    public function setPasswordAttribute($password)
    {
        $this->attributes["password"] = bcrypt($password);
    }

}