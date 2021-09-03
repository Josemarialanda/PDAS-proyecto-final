from ..whole_part.Reservacion import Reservacion
from .SistemaAutorizacionPago import SistemaAutorizacionPago
from .CargoSolicitado         import CargoSolicitado
        
class ProxyAutorizacionPago(SistemaAutorizacionPago):
    
    reservacion = Reservacion()
    
    def preparaCargo(self, datosFuncion, datosCompra):
        # Lógica que determina el cargo ...
        cargo = 100
        reembolsable = False
        self.cargoSolicitado = CargoSolicitado()
        self.cargoSolicitado.setCargo(cargo, reembolsable)
        self.solicitaAutorizacionCargo(self.cargoSolicitado)
        