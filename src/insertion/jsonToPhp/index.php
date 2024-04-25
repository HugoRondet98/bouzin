<?php

// Transfert Hotel
$dataJsonHotel = file_get_contents(__DIR__ . '/hostels.json');
$dataPhpHotel = json_decode($dataJsonHotel);

// Transfert Room
$dataJsonRoom = file_get_contents(__DIR__ . '/room.json');
$dataPhpRoom = json_decode($dataJsonRoom);

// Transfert Services
$dataJsonServices = file_get_contents(__DIR__ . '/services.json');
$dataPhpServices = json_decode($dataJsonServices);

// Transfert Catégories
$dataJsonCategories = file_get_contents(__DIR__ . '/categories.json');
$dataPhpCategories = json_decode($dataJsonCategories);
