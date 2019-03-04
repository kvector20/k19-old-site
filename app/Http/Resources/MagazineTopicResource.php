<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class MagazineTopicResource extends JsonResource
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
            'title' => $this->title,
            'body' => $this->body,
            'image' => Storage::url($this->image),
            'pdf' => $this->pdf,
            'views' => $this->views,
            'published' => $this->publish,
            'url' => route('k19.magazine.id', $this->id),
            'headline' => $this->headline,
            'writer' => [
                'id' => $this->writer->id,
                'name' => $this->writer->name,
                'image' => Storage::url($this->writer->image),
            ],
        ];
    }
}
