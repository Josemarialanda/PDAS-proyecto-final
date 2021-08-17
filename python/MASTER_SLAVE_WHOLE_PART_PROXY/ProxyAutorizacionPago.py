from Reservacion import Reservacion
from Reservacion import DatosCompra
from Reservacion import DatosFuncion

from time import sleep

from abc import ABC, abstractmethod

class CargoSolicitado:
    
    cargo        : int
    reembolsable : bool
    cargoExitoso : bool
    
    def setCargo(self, cargo, reembolsable, cargoExitoso = False):
        self.cargo        = cargo
        self.reembolsable = reembolsable
        self.cargoExitoso = cargoExitoso

class IAutorizacionPago(ABC):
    
    reservacion  = Reservacion()
    datosCompra  = DatosCompra()
    datosFuncion = DatosFuncion()
    
    @abstractmethod
    def solicitaAutorizacionCargo(self, cargo : CargoSolicitado):
        pass

class SistemaAutorizacionPago(IAutorizacionPago):
    
    cargoSolicitado = CargoSolicitado()
    
    # Método definido en la clase abstracta IAutorizacionPago
    def solicitaAutorizacionCargo(self, cargo):
        print("Solicitando autorizacion de cargo...")
        sleep(1)
        print("...")
        sleep(1)
        print("...")
        sleep(1)
        print("...")
        sleep(1)
        print("...")
        sleep(1)
        print("...")
        self.autorizacionCargo(cargo)
    
    def verificacionCargo(self) -> bool:
        if (self.cargoSolicitado.cargoExitoso is True): return True
        return False
    
    def autorizacionCargo(self, cargo : CargoSolicitado) -> bool:
        # Criterios para ver si se autoriza el cargo o no
        cargo.cargoExitoso = True
        
class ProxyAutorizacionPago(SistemaAutorizacionPago):
    
    reservacion = Reservacion()
    
    def preparaCargo(self, datosFuncion: DatosFuncion):
        # Lógica que determina el cargo ...
        cargo = 100
        reembolsable = False
        self.cargoSolicitado = CargoSolicitado()
        self.cargoSolicitado.setCargo(cargo, reembolsable)
        self.solicitaAutorizacionCargo(self.cargoSolicitado)
        