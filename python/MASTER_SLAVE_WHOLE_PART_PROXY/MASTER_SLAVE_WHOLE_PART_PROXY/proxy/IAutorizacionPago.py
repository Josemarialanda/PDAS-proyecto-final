from abc import ABC, abstractmethod
from ..whole_part.Reservacion  import Reservacion
from ..whole_part.DatosCompra  import DatosCompra
from ..whole_part.DatosFuncion import DatosFuncion
from .CargoSolicitado          import CargoSolicitado

class IAutorizacionPago(ABC):
    
    reservacion  = Reservacion()
    datosCompra  = DatosCompra()
    datosFuncion = DatosFuncion()
    
    @abstractmethod
    def solicitaAutorizacionCargo(self, cargo : CargoSolicitado):
        pass