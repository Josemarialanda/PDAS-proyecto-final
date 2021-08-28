<?php

interface  IAutorizacionPago {
     public function solicitaAutorizacionPago(Cargo $cargo): bool;
}
