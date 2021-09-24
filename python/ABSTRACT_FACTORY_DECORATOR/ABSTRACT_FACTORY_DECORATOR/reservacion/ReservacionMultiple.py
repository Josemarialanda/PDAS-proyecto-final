from .Reservacion import Reservacion

class ReservacionMultiple(Reservacion):
    
    def __init__(self):
        self.reservaciones = []
    
    def agregarReservacion(self, reservacion):
        self.reservaciones.append(reservacion)
    
    def eliminarReservacion(self, reservacion):
        self.reservaciones.remove(reservacion)
        
    def getReservaciones(self):
        return self.reservaciones
    
    def mostrarReservacion(self):
        for i, reservacion in enumerate(self.reservaciones):
            print(f'Reservacion[{i}]\n')
            reservacion.mostrarReservacion()