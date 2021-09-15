from OBJECT_ADAPATER_CLASS_ADAPTER_WHOLE_PART.GestorReservaciones import GestorReservaciones
from OBJECT_ADAPATER_CLASS_ADAPTER_WHOLE_PART.class_adapter.IReservacionMultiple import IReservacionMultiple
from OBJECT_ADAPATER_CLASS_ADAPTER_WHOLE_PART.whole_part.ReservacionVIP import ReservacionVIP
from OBJECT_ADAPATER_CLASS_ADAPTER_WHOLE_PART.whole_part.Reservacion import Reservacion
        
class AdaptadorCReservacionMultiple(GestorReservaciones,IReservacionMultiple):
    
    def __init__(self):
        self.reservaciones = []
    
    def crearReservacion(self, datosReservaciones):
        for datosReservacion in datosReservaciones:
            if len(datosReservacion) == 10:
                self.agregarReservacion(Reservacion(*datosReservacion))
            else:
                self.agregarReservacion(ReservacionVIP(*datosReservacion))
        return self.getReservaciones()
        
    
    def agregarReservacion(self, reservacion):
        self.reservaciones.append(reservacion)
    
    def getReservaciones(self):
        return self.reservaciones