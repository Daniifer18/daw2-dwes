<?php

namespace Unidad4\BDD;

interface LeerEscribirCSV {
    public static function fromCSV(string $linea) : mixed;
    public function toCSV() : string;
}