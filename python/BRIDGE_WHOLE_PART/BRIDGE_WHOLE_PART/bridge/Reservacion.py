from BRIDGE_WHOLE_PART.bridge.ProductoCine import ProductoCine
from .ImplementadorProductoCine import ImplementadorProductoCine
from BRIDGE_WHOLE_PART.whole_part.reservacion.ReservacionSencilla import ReservacionSencilla
from BRIDGE_WHOLE_PART.whole_part.reservacion.ReservacionVIP import ReservacionVIP

class Reservacion(ProductoCine):
    
    implementadorProductoCine : ImplementadorProductoCine
    
    def __init__(self, tipoProductoCine, datos) -> None:
        super().__init__(tipoProductoCine)
        
        if self.tipoProductoCine == "sencilla":
            self.implementadorProductoCine = ReservacionSencilla()
        elif self.tipoProductoCine == "vip":
            self.implementadorProductoCine = ReservacionVIP()
        else: print("No existe ese producto!")
        
        self.crearProductoCine(datos)
    
    def crearProductoCine(self, datos):
        self.crearReservacion(datos)
    
    def crearReservacion(self, datos):
        self.implementadorProductoCine.completarProductoCine(datos)
    
    def getReservacion(self):
        return self.implementadorProductoCine
    
    def mostrarReservacion(self):
        self.implementadorProductoCine.mostrarProductoCine()