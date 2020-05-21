<?php

namespace Domain\Products;

use Domain\DomainModal;
use OwenIt\Auditing\Contracts\Auditable;

class Product extends DomainModal implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $fillable = [
        'id',
    ];
}
