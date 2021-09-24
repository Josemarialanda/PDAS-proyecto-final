from ABSTRACT_FACTORY_DECORATOR.reservacion.ReservacionMultiple import ReservacionMultiple
from .ReservacionDecoratorFactory import ReservacionDecoratorFactory

class ConcreteDecoratorReservacionMultiple(ReservacionDecoratorFactory):
    
    reservacionExtendida : ReservacionMultiple
    
    def __init__(self, reservacionSencilla) -> None:
        super().__init__(reservacionSencilla)
        
    def aumentarReservacion(self):
        self.volverReservacionMultiple()
    
    def volverReservacionMultiple(self):
        self.reservacionExtendida = ReservacionMultiple()
        self.reservacionExtendida.agregarReservacion(self.reservacionSencilla)