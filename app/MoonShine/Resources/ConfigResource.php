<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\WebConfig;
use Illuminate\Database\Eloquent\Model;

use MoonShine\Components\MoonShineComponent;
use MoonShine\Decorations\Block;
use MoonShine\Fields\Field;
use MoonShine\Fields\ID;
use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;

/**
 * @extends ModelResource<WebConfig>
 */
class ConfigResource extends ModelResource
{
    protected string $model = WebConfig::class;

    protected string $title = 'Configs';

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Text::make('Название', 'name')->required(),
                Text::make('Логотип', 'logo')->required()->hint("Лого в качестве текста"),
                Text::make('Favicon', 'icon')->required(),
                Text::make('Нижняя строчка', 'footer_string'),

            ]),
        ];
    }

    /**
     * @param WebConfig $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [];
    }
}
