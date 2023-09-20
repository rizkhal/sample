<?php

use Inertia\Testing\AssertableInertia as Assert;

it('has default localization', function () {
    $this->get('/')->assertInertia(
        fn (Assert $page) => $page
            ->component('Welcome')
            ->has('locale')
            ->where('locale', 'en')
    );

    $this->get(route('login'))->assertInertia(
        fn (Assert $page) => $page
            ->component('Auth/Login')
            ->has('locale')
            ->where('locale', 'en')
    );
});

it('has localization from session', function () {
    session()->put('locale', 'id');

    $this->get('/')->assertInertia(
        fn (Assert $page) => $page
            ->component('Welcome')
            ->has('locale')
            ->where('locale', 'id')
    );

    $this->get(route('login'))->assertInertia(
        fn (Assert $page) => $page
            ->component('Auth/Login')
            ->has('locale')
            ->where('locale', 'id')
    );
});
