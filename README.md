# Livewire workshop
In deze repository vind je een Laravel project waarin Livewire vooraf is geinstalleerd.

## Documentatie
- [Livewire documentatie](https://livewire.laravel.com/docs)
- [Laravel Blade](https://laravel.com/docs/blade)

# Benodigdheden
- PHP 8.1 of hoger
- PHP Package manager - Composer (https://getcomposer.org/)
- Een webserver (Windows: https://laragon.org/), (MacOS: https://herd.laravel.com) (Alternatief kun je ook `php artisan serve` draaien dan is je project bereikbaar op `http://localhost:8000`)


## Installatie
1. Clone deze repository
2. Draai het commando: `composer install`
3. Configureer je eigen webserver en verwijs naar de `public` directory zodat je project draait op `http://livewire-workshop.test` of een andere domeinnaam/localhost
4. Ga naar je project in de browser.

## Je eerste Livewire component
- Draai het commando `php artisan make:livewire NaamVanJeComponent`
- Er zijn nu bestanden aangemaakt:
  - `app/Http/Livewire/NaamVanJeComponent.php`
  - `resources/views/livewire/naam-van-je-component.blade.php`
- Ga naar routes/web.php
  - Voeg een nieuwe route toe: `Route::get('/bedenk-een-passende-url', NaamVanJeComponent::class);`
    

## Aan de slag
Hieronder staat de applicatie beschreven die je kunt gaan proberen te implementeren middels Livewire component(en).
Heb je zelf leuke ideeen of toevoegingen? Wees creatief! 

Loop je ergens tegen aan? Vraag het mij!

Het opmaken van de applicatie kan middels TailwindCSS classes, daarnaast kun je ook de `public/style.css` gebruiken voor je eigen css.

### Opdracht
We gaan een to-do lijst applicatie maken.

- Een todo moet kunnen worden toegevoegd.
- Een todo moet kunnen worden verwijderd.
- Een todo moet kunnen worden afgevinkt.
  - Een afgevinkte todo moet een andere stijl krijgen dan een onafgevinkte todo.

*Let op: Todo's mogen voor nu opgeslagen worden in het component (Bij een pagina refresh is de lijst weer leeg).*

#### Stapje verder
Mocht je de smaak te pakken hebben, dan kun je de volgende features toevoegen:

- Een zoekfunctie toevoegen om todo's te filteren.
- Een filter (checkbox?) toevoegen om alleen de afgevinkte of onafgevinkte todo's te tonen.
- Een nieuwe todo kan een datum bevatten.
- De lijst met todo's moet gesorteerd kunnen worden op datum toegevoegd.

#### Geavanceerd
Alles in 1 component bouwen wordt onoverzichtelijk. Probeer je applicatie eens op te splitsen in meerdere componenten.

> **Note**
> Check de livewire documentatie op events (https://livewire.laravel.com/docs/events) om communicatie tussen componenten te faciliteren.


#### Database
**Roep mij er even bij als je ergens niet uitkomt.**

In de "echte" wereld zullen we data daadwerkelijk op moeten slaan.

Gebruikelijk is om dit in een database te doen. Binnen Laravel doen we dit middels het Eloquent ORM (Models). Gebruik Eloquent om je todo's op te slaan in een database.
En lees de todo's uit de database om ze te tonen in je applicatie.

*Voor het gemak heb ik alvast een TodoItem model aangemaakt. Deze vind je in `App\Models\TodoItem`.*


> **Eloquent Documentatie**https://laravel.com/docs/11.x/eloquent
