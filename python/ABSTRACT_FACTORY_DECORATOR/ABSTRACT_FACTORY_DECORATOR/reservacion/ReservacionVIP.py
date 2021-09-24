from ABSTRACT_FACTORY_DECORATOR.reservacion.Reservacion import Reservacion
from .DatosBeneficios import DatosBeneficios

class ReservacionVIP(Reservacion):
    
    datosBeneficios = DatosBeneficios()
    
    def __init__(self, datos):
        super().__init__(datos[:-1])
        self.datosBeneficios = DatosBeneficios()
        self.datosBeneficios.setDatosBeneficios(datos[-1])
    
    def mostrarReservacion(self):
        super().mostrarReservacion()
        print(f"Beneficios   : {self.datosBeneficios.beneficios}")