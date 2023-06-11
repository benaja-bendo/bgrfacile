<?php

namespace App\Http\Resources\User;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'lastName' => $this->last_name,
            'firstName' => $this->first_name,
            'fullName' => $this->full_name,
            'email' => $this->email,
            'slug' => $this->slug,
            'numberPhone' => $this->number_phone,
            'profilePicture' => $this->profile_picture,
            'birthday' => $this->birthday,
            'gender' => $this->gender,
            'roles' => $this->roles,
            'createdAt' => Carbon::parse($this->created_at)->timestamp * 1000,// $this->created_at,
            'updatedAt' => Carbon::parse($this->updated_at)->timestamp * 1000,// $this->updated_at,
        ];
    }
}
