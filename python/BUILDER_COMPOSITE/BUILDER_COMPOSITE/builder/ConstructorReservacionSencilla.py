from ..Reservacion.ReservacionSencilla import ReservacionSencilla
from .ConstructorReservacion import ConstructorReservacion

class ConstructorReservacionSencilla(ConstructorReservacion):
    
    def __init__(self) -> None:
        self.reservacionSencilla = ReservacionSencilla()
    
    def construirDatosCliente(self, nombres,
                              apellidoPaterno,
                              apellidoMaterno,
                              edad,
                              tipoCliente):
        self.reservacionSencilla.datosCliente.setDatosCliente(nombres,
                              apellidoPaterno,
                              apellidoMaterno,
                              edad,
                              tipoCliente)
    
    def construirDatosCompra(self, numeroTarjeta,
                             fechaVencimiento):
        self.reservacionSencilla.datosCompra.setDatosCompra(numeroTarjeta,
                             fechaVencimiento)
    
    
    def construirDatosFuncion(self, asiento,
                              horario,
                              pelicula):
        self.reservacionSencilla.datosFuncion.setDatosFuncion(asiento,
                              horario,
                              pelicula)
    
    def obtenerReservacion(self):
        return self.reservacionSencilla