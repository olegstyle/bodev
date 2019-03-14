<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Project
 *
 * @property int $id
 * @property string $name_ru
 * @property string $gist_ru
 * @property string|null $description_ru
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property string $name_en
 * @property string $gist_en
 * @property string|null $description_en
 * @property string $image_url
 * @property string $date_start
 * @property string $date_end
 * @property string $link
 *
 * @method static Builder|static whereCreatedAt($value)
 * @method static Builder|static whereDateEnd($value)
 * @method static Builder|static whereDateStart($value)
 * @method static Builder|static whereDescriptionEn($value)
 * @method static Builder|static whereDescriptionRu($value)
 * @method static Builder|static whereGistEn($value)
 * @method static Builder|static whereGistRu($value)
 * @method static Builder|static whereId($value)
 * @method static Builder|static whereImageUrl($value)
 * @method static Builder|static whereLink($value)
 * @method static Builder|static whereNameEn($value)
 * @method static Builder|static whereNameRu($value)
 * @method static Builder|static whereUpdatedAt($value)
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\ProjectTechnicalStack[] $stacks
 *
 * @mixin Builder
 */
class Project extends Model
{
    public function stacks(): HasMany
    {
        return $this->hasMany(ProjectTechnicalStack::class);
    }
}
