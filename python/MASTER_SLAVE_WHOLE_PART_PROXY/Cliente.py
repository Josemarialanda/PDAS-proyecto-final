from GestorReservaciones import GestorReservaciones
from Reservacion import Reservacion
from datetime import date, datetime

class Cliente:
    
    reservacion = Reservacion()
    
    def invocaGestorReservaciones(self, nombres : str,
                       apellidoPaterno          : str,
                       apellidoMaterno          : str,
                       edad                     : int,
                       tipoCliente              : str,
                       numeroTarjeta            : str,
                       fechaVencimiento         : date,
                       asiento                  : str,
                       horario                  : date,
                       pelicula                 : str):
        self.reservacion = GestorReservaciones(nombres, apellidoPaterno,
                          apellidoMaterno, edad, tipoCliente,
                          numeroTarjeta, fechaVencimiento,
                          asiento, horario, pelicula).reservacion
        
        
        
cliente = Cliente()
cliente.invocaGestorReservaciones("Josemaria","Landa","Chavez",24,"Cholo bien gangster",
                                  "56647298922",datetime.today(),
                                  "4B",datetime.now(),"The Avengers")
reservacion = cliente.reservacion
reservacion.mostrarReservacion()
