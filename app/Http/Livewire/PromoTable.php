<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Promo;

class PromoTable extends DataTableComponent
{
    protected $model = Promo::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Promo name", "promoName")
                ->sortable(),
            Column::make("Promo start", "promoDateStart")
                ->sortable(),
            Column::make("Promo end", "promoDateEnd")
                ->sortable(),
            Column::make("Promo kouta", "promoKouta")
                ->sortable(),
            Column::make("Promo code", "promoCode")
                ->sortable(),
            Column::make("Promo discount", "promoDiscount")
                ->sortable(),
        ];
    }
}
