---
background: https://source.unsplash.com/collection/94734566/1920x1080
class: text-center
highlighter: prism
lineNumbers: false
info: |
  ## Slidev Starter Template
  Presentation slides for developers.

  Learn more at [Sli.dev](https://sli.dev)
drawings:
  persist: false
transition: slide-left
title: Welcome to Slidev
mdc: true
---

# Laravel Livewire

Reactive UI bouwen op de server


<!--
The last comment block of each slide will be treated as slide notes. It will be visible and editable in Presenter Mode along with the slide. [Read more in the docs](https://sli.dev/guide/syntax.html#notes)
-->

---

# Leroy
- Freelance Fullstack Developer
- PHP & Laravel / VueJS
- [leroy.nl](https://leroy.nl)

---

# Vandaag

- Wat is Livewire/Laravel?
- Korte introductie Livewire
- Aan de slag!

<!--
- Wat is het eind doel van vandaag?
- Na de introductie krijgen jullie een Github repository met een Laravel project
- Vragen mogen altijd gesteld worden

-->
---

# Wat is Livewire?

<div class="flex justify-around items-center pt-32">
<v-clicks>
<div>
<img src="/images/livewire.svg" class="w-40" />
</div>
<div>
>
</div>
<div>
<img src="/images/laravel.svg" class="w-40" />
</div>
<div>
>
</div>
<div>
<img src="/images/php.svg" class="w-40" />
</div>
</v-clicks>
</div>

<!--
- Livewire -> Laravel -> PHP
- Livewire is een package voor Laravel
- Eerst Laravel uitleggen
-->

---

<img src="/images/laravel.svg" class="absolute left-1/2 top-1/2 transform -translate-1/2 w-96" />

<!--
- Wie heeft er wel eens gewerkt met PHP?
- Wie heeft er wel eens gewerkt met Laravel?
- Hebben jullie ervaring met MVC?
-->
---

# MVC

<img src="/images/mvc.png">

---

Router
```php
Route::get('/posts', [PostsController::class, 'index']);

```

Controller
```php
class PostsController {
    public function index() {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }
}

```

View
```php
@foreach($posts as $post)
    <article>
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->body }}</p>
    </article> 
@endforeach
```

<!--
- Router -> Controller -> View
- Vandaag zijn models bijzaak (optioneel)
- Belangrijkste voor nu is de view - Laravel Blade
- Hoe ziet een view eruit?
-->
---

# Laravel Blade
https://laravel.com/docs/blade

Data presenteren (Print/Echo)
```php
<h1>{{ $variable }}</h1>
```

Foreach-loop
```php
@foreach($items as $item)
    <ul>
        <li>{{ $item->name }}</li>
    </ul>
@endforeach
```

If-statement
```php
@if (Auth::check())
    {{ Auth::user()->name }}
@else
    <a href="/login">Login</a>
@endif
```

<!--
- Blade is de templating engine van Laravel
- In de repository README.md staat een link naar de documentatie
- Genoeg over MVC, Laravel. Let's talk about Livewire
-->
---

<img src="/images/livewire.svg" class="absolute left-1/2 top-1/2 transform -translate-1/2 w-96" />

<!--
- Wie heeft er wel eens met een componenten framework gewerkt?
- Wat is een component?
-->

---
layout: quote
---

# Component

> a part or element of a larger whole, especially a part of a machine or vehicle. - Oxford Languages

<!--
- Een component is een onderdeel van een groter geheel
- In de context van Livewire is een component een onderdeel van een webpagina
- Denk aan een winkelwagen, product, notificaties, button
- Hoe ziet een component eruit?
-->

---

<v-clicks>
Class: app/Livewire/Counter.php
```php
class Counter extends Component
{
    public $count = 0;

    public function increment()
    {
        $this->count++;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
```

View: resources/views/livewire/counter.blade.php
```html {2}
<div>
    <button wire:click="increment">+</button>
    <h1>{{ $count }}</h1>
</div>
```
</v-clicks>
---
layout: iframe-right
url: http://livewire-workshop.test/counter
---
app/Livewire/Counter.php
```php
class Counter extends Component
{
    public $count = 0;

    public function increment()
    {
        $this->count++;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
```

resources/views/livewire/counter.blade.php
```html
<div>
    <h1>{{ $count }}</h1>
    <button wire:click="increment">+</button>
</div>
```

<!--
- Livewire component bestaat uit 2 onderdelen, class en view
-->
---
layout: iframe-right
url: http://livewire-workshop.test/login
---
app/Livewire/Login.php
```php
class Login extends Component
{
    public string $username;
    
    public string $password;

    public function login()
    {
    }

    public function render()
    {
        return view('livewire.login');
    }
}
```

resources/views/livewire/login.blade.php
```html
<form>
    <input type="email" wire:model="email">
    <input type="password" wire:model="password">
</form>
```

<!--
- Livewire component bestaat uit 2 onderdelen, class en view
-->
---

# Aan de slag!

- Ga naar: https://github.com/leroy/livewire-workshop
