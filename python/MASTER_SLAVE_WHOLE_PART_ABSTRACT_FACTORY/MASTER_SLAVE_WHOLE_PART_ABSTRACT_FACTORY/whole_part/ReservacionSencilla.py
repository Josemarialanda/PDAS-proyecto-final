from .Reservacion import Reservacion

class ReservacionSencilla(Reservacion):
    
    def __init__(self, datosCliente, datosCompra, datosFuncion):
        self.datosCliente = datosCliente
        self.datosCompra = datosCompra
        self.datosFuncion = datosFuncion