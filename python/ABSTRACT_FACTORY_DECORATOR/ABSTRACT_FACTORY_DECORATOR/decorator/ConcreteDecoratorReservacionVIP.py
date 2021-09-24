from ABSTRACT_FACTORY_DECORATOR.reservacion.ReservacionVIP import ReservacionVIP
from .ReservacionDecoratorFactory import ReservacionDecoratorFactory

class ConcreteDecoratorReservacionVIP(ReservacionDecoratorFactory):
    
    reservacionExtendida : ReservacionVIP
    
    def __init__(self, reservacionSencilla) -> None:
        super().__init__(reservacionSencilla)
        
    def aumentarReservacion(self, datos):
        self.volverReservacionVIP(datos)
    
    def volverReservacionVIP(self, datos): 
        self.reservacionExtendida = ReservacionVIP([self.reservacionSencilla.datosCliente,
                                                      self.reservacionSencilla.datosCompra,
                                                      self.reservacionSencilla.datosFuncion,
                                                      datos])