from ..Reservacion.ReservacionVIP import ReservacionVIP
from .ConstructorReservacion import ConstructorReservacion

class ConstructorReservacionVIP(ConstructorReservacion):
    
    def __init__(self) -> None:
        self.reservacionVIP = ReservacionVIP()
    
    def construirDatosCliente(self, nombres,
                              apellidoPaterno,
                              apellidoMaterno,
                              edad,
                              tipoCliente):
        self.reservacionVIP.datosCliente.setDatosCliente(nombres,
                              apellidoPaterno,
                              apellidoMaterno,
                              edad,
                              tipoCliente)
    
    def construirDatosCompra(self, numeroTarjeta,
                             fechaVencimiento):
        self.reservacionVIP.datosCompra.setDatosCompra(numeroTarjeta,
                             fechaVencimiento)
    
    
    def construirDatosFuncion(self, asiento,
                              horario,
                              pelicula):
        self.reservacionVIP.datosFuncion.setDatosFuncion(asiento,
                              horario,
                              pelicula)
    
    def construirDatosBeneficios(self, beneficios):
        self.reservacionVIP.datosBeneficios.setDatosBeneficios(beneficios)
    
    def obtenerReservacion(self):
        return self.reservacionVIP