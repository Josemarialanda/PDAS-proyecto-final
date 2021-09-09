from ..Reservacion.DatosCliente import DatosCliente
from ..Reservacion.DatosCompra import DatosCompra
from ..Reservacion.DatosFuncion import DatosFuncion
from ..Reservacion.DatosBeneficios import DatosBeneficios
from ..Reservacion.Reservacion import Reservacion

class ReservacionMultiple(Reservacion):
    
    datosCliente    = DatosCliente()
    datosCompra     = DatosCompra()
    datosFuncion    = DatosFuncion()
    datosBeneficios = DatosBeneficios()
    
    def __init__(self):
        self.reservaciones = []
    
    def agregarReservacion(self, reservacion):
        self.reservaciones.append(reservacion)
    
    def eliminarReservacion(self, reservacion):
        self.reservaciones.remove(reservacion)
        
    
    def getReservaciones(self):
        return self.reservaciones
    
    def mostrarReservacion(self):
        for i, reservacion in enumerate(self.reservaciones):
            print(f'Reservacion[{i}]\n')
            reservacion.mostrarReservacion()