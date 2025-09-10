<?php

use App\Models\Door;
use Illuminate\Support\Facades\Cookie;

it('shows favorites on favorites page', function () {
    // Hozzunk létre teszt ajtókat
    $doors = Door::factory()->count(3)->create();
    $favoriteIds = $doors->pluck('id')->map(fn($id) => (string)$id)->toArray();
    
    // Szimuláljuk a cookie-t
    $cookieValue = json_encode($favoriteIds);
    
    // GET kérés a cookie-val
    $response = $this->withCookies(['favorites' => $cookieValue])
                     ->get('/kedvencek');
    
    $response->assertStatus(200);
    
    // Ellenőrizzük, hogy az ajtók megjelennek
    foreach ($doors as $door) {
        $response->assertSee($door->name);
    }
});

it('initializes favorites counter in navbar', function () {
    // Hozzunk létre teszt ajtókat
    $doors = Door::factory()->count(2)->create();
    $favoriteIds = $doors->pluck('id')->map(fn($id) => (string)$id)->toArray();
    
    // Szimuláljuk a cookie-t
    $cookieValue = json_encode($favoriteIds);
    
    // GET kérés a főoldalra a cookie-val
    $response = $this->withCookies(['favorites' => $cookieValue])
                     ->get('/');
    
    $response->assertStatus(200);
    
    // Ellenőrizzük, hogy a favorites_numbers elem létezik
    $response->assertSee('id="favorites_numbers"', false);
});
