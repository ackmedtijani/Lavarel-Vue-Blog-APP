<?php

namespace App\Services\v1;

use Illuminate\Http\Request;
use App\Services\v1\ApiFilter;

class BlogQuery extends ApiFilter{

    protected $filterparams = [
        'Title' => ['eq'],
        'type' => ['eq'],
        'user_id' => ['eq'],
    ];

    protected $filtermaps = [
        'eq' => '='
    ];
}