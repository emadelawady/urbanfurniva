<?php

namespace App\Filament\Pages;

use App\Models\Setting;
use Filament\Forms\Components\TextInput;
use Filament\Pages\Page;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Navigation\MenuItem;
use Filament\Panel;
use Filament\Forms\Form;
use Filament\Actions;
use Filament\Notifications\Notification;

use Filament\Forms\Components\Section;
use Filament\Forms\Components\Group;


class Settings extends Page implements HasForms
{
    use InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.settings';

    protected static ?string $title = 'الإعدادات';

    protected static ?string $navigationLabel = 'اعدادات الموقع';

    protected static ?string $slug = 'setting';


    protected static ?string $model = Setting::class;

    protected static ?int $navigationSort = 7;


    protected static ?string $navigationGroup = 'الإعدادات';


    // public static function shouldRegisterNavigation(): bool
    // {
    //     return false;
    // }


    public function panel(Panel $panel): Panel
    {
        return $panel
            ->userMenuItems([
                MenuItem::make()
                    ->label('Profilse')
                    ->url(fn (): string => Settings::getUrl())
                    ->icon('heroicon-o-user'),
            ]);

    }


    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill(
            // auth()->user()->attributesToArray()
        );
    }






    public function form(Form $form): Form
    {
        return $form
                ->schema([

                    // Global Settings

                    Group::make()
                        ->schema([


                            Section::make('الإعدادات الأساسية')
                                ->schema([

                                    Group::make()
                                        ->schema([

                                            TextInput::make('website_title')
                                                ->label('عنوان الموقع'),
                                            TextInput::make('email')
                                                ->label('البريد الإليكترونى')
                                                ->email(),
                                            TextInput::make('phone')
                                                ->label('رقم الهاتف')
                                                ->tel(),
                                            TextInput::make('address')
                                                ->label('العنوان'),
                                            TextInput::make('copyrights')
                                                ->label('حقوق الطبع والنشر')
                                                ->columnSpanFull(),

                                        ])->columns(2)

                                ])


                        ])
                        ->columnSpan([
                            'sm' => 1,
                            'lg' => 2,
                        ]),

                    ]);

    }



protected function getFormActions(): array
{
    return [
        Actions\Action::make('Update')
            ->color('primary')
            ->submit('Update'),
    ];
}

public function update()
{
    // auth()->user()->update(
    //     $this->form->getState()
    // );

    Notification::make()
    ->title('Profile updated!')
    ->success()
    ->send();

}



}
