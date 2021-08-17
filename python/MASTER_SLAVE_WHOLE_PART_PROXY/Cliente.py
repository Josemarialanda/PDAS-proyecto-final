from GestorReservaciones import GestorDatosCliente, GestorDatosFuncion, GestorReservaciones
from Reservacion import Reservacion
from datetime import date, datetime

class Cliente:
    
    reservacion = Reservacion()
    
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
        self.invocaGestorReservaciones(nombres, apellidoPaterno,
                          apellidoMaterno, edad,
                          estudiante, clienteEspecial,
                          numeroTarjeta, fechaVencimiento,
                          asiento, horario, pelicula)     
    
    def invocaGestorReservaciones(self, nombres, apellidoPaterno,
                          apellidoMaterno, edad,
                          estudiante, clienteEspecial,
                          numeroTarjeta, fechaVencimiento,
                          asiento, horario, pelicula):
        self.reservacion = GestorReservaciones(nombres, apellidoPaterno,
                          apellidoMaterno, edad,
                          estudiante, clienteEspecial,
                          numeroTarjeta, fechaVencimiento,
                          asiento, horario, pelicula).reservacion
        
        
        
cliente = Cliente("Josemaria","Landa","Chavez",24,True,False,
                  "56647298922",datetime.today(),
                  "4B",datetime.now(),"The Avengers")

reservacion = cliente.reservacion
reservacion.mostrarReservacion()

# GestorDatosFuncion().visualizarHorariosDisponibles()
# GestorDatosFuncion().visualizarPeliculasDisponibles()
