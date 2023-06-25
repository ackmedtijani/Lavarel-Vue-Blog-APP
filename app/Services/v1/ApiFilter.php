<?php

namespace App\Services\v1;

use Illuminate\Http\Request;

class ApiFilter{

    protected $filterparams = [];

    protected $filtermaps = [];

    public function transform(Request $request){

        $eloquery = [];
        foreach($this->filterparams as $params => $operators){
            $query = $request->query($params);

            if (!isset($query)){
                continue;
            }

            foreach($operators as $operator){
                if(isset($query[$operator])){
                    $eloquery[] = [$params , $this->filtermaps[$operator] , $query[$operator]];
                }
            }

        }

        return $eloquery;
    }
}