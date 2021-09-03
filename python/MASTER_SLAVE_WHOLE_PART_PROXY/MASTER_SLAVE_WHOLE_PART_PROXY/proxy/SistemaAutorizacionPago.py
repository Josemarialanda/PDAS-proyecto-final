from .IAutorizacionPago import IAutorizacionPago
from .CargoSolicitado   import CargoSolicitado
from time import sleep

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