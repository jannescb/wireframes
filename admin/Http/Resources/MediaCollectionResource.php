<?php

namespace Admin\Http\Resources;

use App\Models\MediaCollection;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin MediaCollection
 */
class MediaCollectionResource extends JsonResource
{
    /**
     * The resource instance.
     *
     * @var MediaCollection
     */
    public $resource;

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request                                        $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return array_merge(parent::toArray($request), [
            //
        ]);
    }
}
