from OBJECT_ADAPATER_CLASS_ADAPTER_WHOLE_PART.GestorReservaciones import GestorReservaciones
from OBJECT_ADAPATER_CLASS_ADAPTER_WHOLE_PART.whole_part.ReservacionVIP import ReservacionVIP

class AdaptadorOReservacion(GestorReservaciones):    
    
    def __init__(self) -> None:
        pass
    
    def crearReservacion(self, nombres,
                       apellidoPaterno ,
                       apellidoMaterno ,
                       edad,
                       tipoCliente,
                       numeroTarjeta,
                       fechaVencimiento,
                       asiento,
                       horario,
                       pelicula,
                       beneficios):
        return ReservacionVIP(nombres,
                       apellidoPaterno ,
                       apellidoMaterno ,
                       edad,
                       tipoCliente,
                       numeroTarjeta,
                       fechaVencimiento,
                       asiento,
                       horario,
                       pelicula,
                       beneficios)