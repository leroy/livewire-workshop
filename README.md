# Livewire workshop
In deze repository vind je een Laravel project waarin Livewire vooraf is geinstalleerd.

## Documentatie
- [Livewire documentatie](https://livewire.laravel.com/docs)
- [Laravel Blade](https://laravel.com/docs/blade)

# Benodigdheden
- PHP 8.1 of hoger
- PHP Package manager - Composer (https://getcomposer.org/)
- Npm (https://nodejs.org/en/download/)
- Een webserver (Windows: https://laragon.org/), (MacOS: https://herd.laravel.com) (Alternatief kun je ook `php artisan serve` draaien dan is je project bereikbaar op `http://localhost:8000`)


## Installatie
1. Clone deze repository
2. Draai het commando: `composer install`
3. Draai het commando `npm install` en daarna `npm run dev`
4. Configureer je eigen webserver zodat je project draait op `http://livewire-workshop.test` of een andere domeinnaam
5. Ga naar je project in de browser.

## Je eerste Livewire component
- Draai het commando `php artisan make:livewire NaamVanJeComponent`
- Er zijn nu bestanden aangemaakt:
  - `app/Http/Livewire/NaamVanJeComponent.php`
  - `resources/views/livewire/naam-van-je-component.blade.php`
- Ga naar routes/web.php
  - Voeg een nieuwe route toe: `Route::get('/bedenk-een-passende-url', NaamVanJeComponent::class);`
    

## Aan de slag
Hieronder staat de opdracht beschreven die je kunt gaan proberen te implementeren middels Livewire component(en).

### Requirements
We gaan een kleine to-do lijst applicatie maken. Todo's moeten kunnen worden toegevoegd en verwijderd.
Daarnaast kan een todo worden afgevinkt. Een afgevinkte todo moet een andere kleur krijgen dan een onafgevinkte todo.

Todo's mogen voor nu opgeslagen worden in het component (Bij een pagina refresh is de lijst weer leeg).

#### Optioneel
Mocht je de smaak te pakken hebben, dan kun je de volgende features toevoegen:

- Een zoekfunctie toevoegen
- Een filter toevoegen om alleen de afgevinkte of onafgevinkte todo's te tonen
- Sorteren van todo's
- Een todo kan een deadline krijgen

#### Geavanceerd
- Todo's opslaan in de database middels de Eloquent ORM van Laravel.
