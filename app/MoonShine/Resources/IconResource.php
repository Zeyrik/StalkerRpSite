<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Icon;
use Illuminate\Database\Eloquent\Model;

use MoonShine\Components\MoonShineComponent;
use MoonShine\Decorations\Block;
use MoonShine\Fields\Field;
use MoonShine\Fields\ID;
use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;

/**
 * @extends ModelResource<Icon>
 */
class IconResource extends ModelResource
{
    protected string $model = Icon::class;

    protected string $title = 'Icons';

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Text::make('Заголок иконки', 'title_icon')->hint("Данное поле исключительно для удобства"),
                Text::make('Ссылка на сеть', 'url')->required(),
                Text::make('Картинка', 'icon_url')->required()
            ]),
        ];
    }

    /**
     * @param Icon $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [];
    }
}
