<?php

namespace App\Providers\Filament;

use Filament\Pages;
use Filament\Panel;
use Filament\Widgets;
use Filament\PanelProvider;
use Filament\Navigation\MenuItem;
use Filament\Support\Colors\Color;
use PHPUnit\Event\Telemetry\System;
use Filament\Http\Middleware\Authenticate;
use Rmsramos\Activitylog\ActivitylogPlugin;
use Illuminate\Session\Middleware\StartSession;
use Devonab\FilamentEasyFooter\EasyFooterPlugin;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Filament\Http\Middleware\AuthenticateSession;
use DiogoGPinto\AuthUIEnhancer\AuthUIEnhancerPlugin;
use GeoSot\FilamentEnvEditor\FilamentEnvEditorPlugin;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Leandrocfe\FilamentApexCharts\FilamentApexChartsPlugin;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Joaopaulolndev\FilamentEditProfile\Pages\EditProfilePage;
use Joaopaulolndev\FilamentEditProfile\FilamentEditProfilePlugin;

class DashPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('dash')
            ->path('')
            ->login()
            ->colors([
                'primary' => Color::hex('#f48320'),
                'button1' => Color::Lime,
            ])
            ->brandName('LPU Personal Study App')
            ->brandLogo('https://www.lpu.in/lpu-assets/images/logo/logo.svg')
            ->brandLogoHeight('50px')
            ->topNavigation()
            ->plugins([
                FilamentEnvEditorPlugin::make()
                    ->navigationGroup('Filament Shield')
                    ->navigationLabel('My Env')
                    ->navigationIcon('heroicon-o-cog-8-tooth')
                    ->navigationSort(1)
                    ->slug('env-editor'),
                \BezhanSalleh\FilamentShield\FilamentShieldPlugin::make()
                    ->gridColumns([
                        'default' => 1,
                        'sm' => 2,
                        'lg' => 3
                    ])
                    ->sectionColumnSpan(1)
                    ->checkboxListColumns([
                        'default' => 1,
                        'sm' => 2,
                        'lg' => 4,
                    ])
                    ->resourceCheckboxListColumns([
                        'default' => 1,
                        'sm' => 2,
                    ]),
                FilamentApexChartsPlugin::make(),
                ActivitylogPlugin::make()
                    ->navigationGroup('Filament Shield')
                    ->authorize(
                        fn() => auth()->user()->id === 1
                    ),
                AuthUIEnhancerPlugin::make()
                    ->mobileFormPanelPosition('bottom')
                    ->formPanelPosition('left')
                    ->formPanelWidth('60%')
                    ->formPanelBackgroundColor(Color::Zinc, '300')
                    ->emptyPanelBackgroundImageOpacity('100%')
                    ->emptyPanelBackgroundImageUrl('http://bookuradmission.com/college_banner/Lovely%20Professional%20University%20(LPU)_banner211112102119.jpg'),
                // ->emptyPanelBackgroundImageUrl(asset('images/study.jpg')),
                EasyFooterPlugin::make()
                    ->footerEnabled()
                    ->withLoadTime()
                    ->withFooterPosition('footer')
                    ->withLogo('https://static.cdnlogo.com/logos/l/23/laravel.svg', 'https://laravel.com')
                    ->withLinks([
                        ['title' => 'Created By Code With Ngoni', 'url' => 'https://codewithngoni.com/'],
                    ]),
                FilamentEditProfilePlugin::make()
                    ->slug('my-profile')
                    ->setTitle('My Profile')
                    ->setNavigationLabel('My Profile')
                    ->setIcon('healthicons-o-ui-user-profile')
                    ->setSort(10)
                    ->shouldShowDeleteAccountForm(false)
                    ->shouldShowBrowserSessionsForm(),

            ])
            ->userMenuItems([
                'profile' => MenuItem::make()
                    ->label(fn() => auth()->user()->name)
                    ->url(fn(): string => EditProfilePage::getUrl())
                    ->icon('heroicon-m-user-circle')
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                Widgets\AccountWidget::class,
                // Widgets\FilamentInfoWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}
