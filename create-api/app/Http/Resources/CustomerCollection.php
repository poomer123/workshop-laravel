<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class CustomerCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'data' => $this->collection->map(function($customerData) {
                $customerData->fullName = $customerData->first_name . ' ' . $customerData->last_name;
                return $customerData;
            }),
            'links' => [
                'foo' => url('api/customers/foo')
            ]
        ];
    }

    public function with($request) {
        return [
            'version' => '1'
        ];
    }
}
