from OBJECT_ADAPATER_CLASS_ADAPTER_WHOLE_PART.whole_part.Reservacion import Reservacion

class GestorReservaciones:
    
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
                       pelicula):
        return Reservacion(nombres,
                       apellidoPaterno ,
                       apellidoMaterno ,
                       edad,
                       tipoCliente,
                       numeroTarjeta,
                       fechaVencimiento,
                       asiento,
                       horario,
                       pelicula)