<?php

use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment('Build something you are proud to show.');
})->purpose('Display an inspiring message');
