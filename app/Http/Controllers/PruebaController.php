<?php

namespace pokedex\Http\Controllers;

use pokedex\Http\Controllers\Controller;

class PruebaController extends Controller {
  public function prueba($param) {
    return 'Estoy dentro de prueba controller. '.$param;
  }
}