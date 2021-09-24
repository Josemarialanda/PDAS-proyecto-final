from ABSTRACT_FACTORY_DECORATOR.reservacion.ReservacionSencilla import ReservacionSencilla
from .ReservacionFactory import ReservacionFactory

class ReservacionSencillaFactory(ReservacionFactory):
    
    reservacionSencilla : ReservacionSencilla
    
    def crearReservacion(self, datos):
        self.crearReservacionSencilla(datos)
    
    def crearReservacionSencilla(self, datos):
        self.reservacionSencilla = ReservacionSencilla(datos)
    