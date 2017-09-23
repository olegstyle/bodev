<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Project whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Project whereDateEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Project whereDateStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Project whereDescriptionEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Project whereDescriptionRu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Project whereGistEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Project whereGistRu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Project whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Project whereImageUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Project whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Project whereNameEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Project whereNameRu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Project whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\ProjectTechnicalStack[] $stacks
 */
class Project extends Model
{
    /**
     * stacks
     * @author Oleh Borysenko <oleg.borisenko@morefromit.com>
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function stacks() {
        return $this->hasMany(ProjectTechnicalStack::class);
    }
}
