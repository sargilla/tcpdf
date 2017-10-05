<?php

namespace Sargilla\Tcpdf\Facades;

use Illuminate\Support\Facades\Facade;

class Tcpdf extends Facade
{
	protected static function getFacadeAccessor(){ return 'tcpdf'; }
}