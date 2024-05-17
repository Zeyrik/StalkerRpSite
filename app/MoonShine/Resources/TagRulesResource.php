<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\TagRule;
use Illuminate\Database\Eloquent\Model;

use MoonShine\Components\MoonShineComponent;
use MoonShine\Decorations\Block;
use MoonShine\Fields\Field;
use MoonShine\Fields\ID;
use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;

/**
 * @extends ModelResource<TagRule>
 */
class TagRulesResource extends ModelResource
{
    protected string $model = TagRule::class;

    protected string $title = 'Теги правил';

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Text::make('Тег правил','tag_rules')->required(),
                Text::make("Id тега",'tag_id')->required(),
            ]),
        ];
    }

    /**
     * @param TagRule $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [];
    }
}
