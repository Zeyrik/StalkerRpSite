<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

use MoonShine\Components\MoonShineComponent;
use MoonShine\Decorations\Block;
use MoonShine\Fields\Field;
use MoonShine\Fields\ID;
use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;

/**
 * @extends ModelResource<User>
 */
class UserResource extends ModelResource
{
    protected string $model = User::class;

    protected string $title = 'Пользователи';

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Text::make('discord_user_id')->required(),
                Text::make('nickname')->required(),
                Text::make("Бан",'banned')->required(),
                Text::make('name')->required(),
                Text::make('Роль','role')->required(),
                Text::make('email')->required(),
                Text::make('avatar')->required(),
                Text::make('verified')->required(),
            ]),
        ];
    }

    /**
     * @param User $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [];
    }
}
