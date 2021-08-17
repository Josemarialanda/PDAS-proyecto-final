from Reservacion import Reservacion

from Reservacion import DatosCliente
from Reservacion import DatosCompra
from Reservacion import DatosFuncion

from ProxyAutorizacionPago import CargoSolicitado, ProxyAutorizacionPago

from datetime import date
    
class GestorDatosCliente:
    
    def preparaDatosCliente(self, nombres, apellidoPaterno,
                                  apellidoMaterno, edad,
                                  estudiante, clienteEspecial) -> DatosCliente:
        datosCliente = DatosCliente()
        datosCliente.setDatosCliente(nombres, apellidoPaterno,
                                    apellidoMaterno, edad,
                                    estudiante, clienteEspecial)
        return datosCliente
    
class GestorDatosCompra:
    
    def preparaDatosCompra(self, numeroTarjeta, fechaVencimiento) -> DatosCompra:
        datosCompra = DatosCompra()
        datosCompra.setDatosCompra(numeroTarjeta, fechaVencimiento)
        return datosCompra
    
class GestorDatosFuncion:
    
    def preparaDatosFuncion(self, asiento, horario, pelicula) -> DatosFuncion:
        datosFuncion = DatosFuncion()
        datosFuncion.setDatosFuncion(asiento, horario, pelicula)
        return datosFuncion
    
    def visualizarPeliculasDisponibles(self):
        print(
        f'''
        Películas disponibles:
            1. Sueño de fuga (1994)
            2. El Padrino (1972)
            3. El padrino 2a parte (1974)
            4. Batman: El Caballero de la Noche (2008)
            5. hombres en pugna (1957)
            6. La lista de Schindler (1993)
            7. El señor de los anillos: El retorno del rey (2003)
            8. Tiempos violentos (1994)
            9. El bueno, el malo y el feo (1966)
            10. El señor de los anillos: La comunidad del anillo (2001)
        '''
        )
        
    def visualizarHorariosDisponibles(self):
        print(
        f'''
                    -------------------------------
                    | 10 AM - 12 PM - 2 PM - 4 PM |
                    |                             |
         Lunes      |   1.      2.     3.     7.  |
                    |                             |
         Martes     |   3.      5.     10.    9.  |
                    |                             |
         Miercoles  |   4.      6.     8.     1.  |
                    |                             |
         Juevs      |   1.      9.     10.    2.  |
                    -------------------------------
        '''
        )
    
class GestorReservaciones:
    
    reservacion = Reservacion()
    pago = ProxyAutorizacionPago()
    
    def __init__(self, nombres          : str,
                       apellidoPaterno  : str,
                       apellidoMaterno  : str,
                       edad             : int,
                       estudiante       : bool,
                       clienteEspecial  : bool,
                       numeroTarjeta    : str,
                       fechaVencimiento : date,
                       asiento          : str,
                       horario          : date,
                       pelicula         : str):
        self.preparaDatos(nombres, apellidoPaterno,
                          apellidoMaterno, edad,
                          estudiante, clienteEspecial,
                          numeroTarjeta, fechaVencimiento,
                          asiento, horario, pelicula) 
        
    def preparaDatos(self, nombres, apellidoPaterno,
                     apellidoMaterno, edad,
                     estudiante, clienteEspecial,
                     numeroTarjeta, fechaVencimiento,
                     asiento, horario, pelicula):
        datosCliente = GestorDatosCliente().preparaDatosCliente(nombres, apellidoPaterno, apellidoMaterno, edad, estudiante, clienteEspecial)
        datosCompra  = GestorDatosCompra().preparaDatosCompra(numeroTarjeta, fechaVencimiento)
        datosFuncion = GestorDatosFuncion().preparaDatosFuncion(asiento, horario, pelicula)
        self.integraResultadosYCreaReservacion(datosCliente, datosCompra, datosFuncion)
    
        self.pago.preparaCargo(datosFuncion)
        resultado = self.pago.verificacionCargo()
        print("Reservación exitosa!") if resultado else print("Reservación falló!") 

    def integraResultadosYCreaReservacion(self, datosCliente : DatosCliente, 
                                datosCompra  : DatosCompra, 
                                datosFuncion : DatosFuncion) -> Reservacion:
        self.reservacion.datosCliente = datosCliente
        self.reservacion.datosCompra  = datosCompra
        self.reservacion.datosFuncion = datosFuncion