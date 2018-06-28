<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UsersResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {

        return [
            'id' => $this->id,
            'nickname' => $this->nickname,
            'sex' => $this->sex,
            'headimgurl' => $this->headimgurl,
        ];
        return parent::toArray($request);
    }

    public function index()
    {
        return [1,2,3,4,5,6,7];
    }
    //验证用户登陆
    public function check()
    {

    }

}
