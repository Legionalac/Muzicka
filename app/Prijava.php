<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prijava extends Model
{
    //
    protected $fillable = [
        'ime_ucenika',
        'prezime_ucenika',
        'jmbg',
        'pol',
        'datum_rodjenja',
        'mesto_rodjenja',
        'adresa',
        'skola',
        'razred',
        'ime_majke',
        'jmbg_majke',
        'ime_oca',
        'jmbg_oca',
        'kontakt_osoba',
        'tel_fiksni',
        'tel_mobilni',
        'email',
        'skola',
        'skolovanje_1',
        'instrument_1',
        'skolovanje_2',
        'instrument_2'

    ];
}
