from ABSTRACT_FACTORY_DECORATOR.reservacion.ReservacionSencilla import ReservacionSencilla
from ABSTRACT_FACTORY_DECORATOR.reservacion.Reservacion import Reservacion
from ABSTRACT_FACTORY_DECORATOR.abstract_factory.ReservacionFactory import ReservacionFactory

class ReservacionDecoratorFactory(ReservacionFactory):
    
    reservacionSencilla  : ReservacionSencilla
    
    def __init__(self, reservacionSencilla) -> None:
        self.reservacionSencilla = reservacionSencilla
    
    def aumentarReservacion(self, datos):
        pass