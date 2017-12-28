<?php

namespace App\Exceptions;

use Exception;

class OrganisationNotBelongsToUser extends Exception
{
    /**
     * @param mixed $code
     */
    public function render()
    {
        return ['error' => 'Organisation Not Belongs to User'];
    }
}
