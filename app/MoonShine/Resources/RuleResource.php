<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Rule;
use Illuminate\Database\Eloquent\Model;

use MoonShine\Components\MoonShineComponent;
use MoonShine\Decorations\Block;
use MoonShine\Fields\Field;
use MoonShine\Fields\ID;
use MoonShine\Fields\Relationships\BelongsTo;
use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;

/**
 * @extends ModelResource<Rule>
 */
class RuleResource extends ModelResource
{
    protected string $model = Rule::class;

    protected string $title = 'Rules';

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            Block::make([
                BelongsTo::make("Тег правила", 'tagRule', resource: new TagRulesResource()),
                ID::make()->sortable(),
                Text::make('Правило','rule')->required(),
                Text::make('Id Правила','rule_id')->required(),
            ]),
        ];
    }

    /**
     * @param Rule $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [];
    }
}
