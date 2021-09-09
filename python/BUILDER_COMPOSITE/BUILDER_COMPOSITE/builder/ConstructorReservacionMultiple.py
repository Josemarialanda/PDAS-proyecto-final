from ..Reservacion.ReservacionSencilla import ReservacionSencilla
from ..Reservacion.ReservacionVIP import ReservacionVIP
from ..composite.ReservacionMultiple import ReservacionMultiple
from .ConstructorReservacion import ConstructorReservacion

class ConstructorReservacionMultiple(ConstructorReservacion):
    
    def __init__(self) -> None:
        self.reservacionMultiple = ReservacionMultiple()
    
    def construirDatosCliente(self, nombres,
                              apellidoPaterno,
                              apellidoMaterno,
                              edad,
                              tipoCliente):
        self.reservacionMultiple.datosCliente.setDatosCliente(nombres,
                              apellidoPaterno,
                              apellidoMaterno,
                              edad,
                              tipoCliente)
    
    def construirDatosCompra(self, numeroTarjeta,
                             fechaVencimiento):
        self.reservacionMultiple.datosCompra.setDatosCompra(numeroTarjeta,
                             fechaVencimiento)
    
    
    def construirDatosFuncion(self, asiento,
                              horario,
                              pelicula):
        self.reservacionMultiple.datosFuncion.setDatosFuncion(asiento,
                              horario,
                              pelicula)
    
    def construirDatosBeneficios(self, beneficios):
        if beneficios is not None:
            self.reservacionMultiple.datosBeneficios.setDatosBeneficios(beneficios)      
            reservacion = ReservacionVIP()
            
            reservacion.datosCliente = self.reservacionMultiple.datosCliente
            reservacion.datosCompra = self.reservacionMultiple.datosCompra
            reservacion.datosFuncion = self.reservacionMultiple.datosFuncion
            reservacion.datosBeneficios = self.reservacionMultiple.datosBeneficios
            
            self.reservacionMultiple.reservaciones.append(reservacion)
        else: 
            reservacion = ReservacionSencilla()
            reservacion.datosCliente = self.reservacionMultiple.datosCliente
            reservacion.datosCompra = self.reservacionMultiple.datosCompra
            reservacion.datosFuncion = self.reservacionMultiple.datosFuncion
            
            self.reservacionMultiple.reservaciones.append(reservacion)
    
    def obtenerReservacion(self):
        return self.reservacionMultiple
        