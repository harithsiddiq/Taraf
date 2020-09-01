<?php

use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

function uploadImage($folder, $image) {

    $image->store('/', $folder);

    $filename = $image->hashName();

    $path = "images/{$folder}/{$filename}";

    return $path;

}

function getLocal() {
    return LaravelLocalization::getCurrentLocale();
}
