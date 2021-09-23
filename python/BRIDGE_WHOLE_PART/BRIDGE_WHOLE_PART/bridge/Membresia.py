from BRIDGE_WHOLE_PART.bridge.ProductoCine import ProductoCine
from .ImplementadorProductoCine import ImplementadorProductoCine
from BRIDGE_WHOLE_PART.whole_part.membresia.MembresiaSencilla import MembresiaSencilla
from BRIDGE_WHOLE_PART.whole_part.membresia.MembresiaVIP import MembresiaVIP


class Membresia(ProductoCine):
    
    implementadorProductoCine : ImplementadorProductoCine
    
    def __init__(self, tipoProductoCine, datos) -> None:
        super().__init__(tipoProductoCine)
        
        if self.tipoProductoCine == "sencilla":
            self.implementadorProductoCine = MembresiaSencilla()
        elif self.tipoProductoCine == "vip":
            self.implementadorProductoCine = MembresiaVIP()
        else: print("No existe ese producto!")
        
        self.crearProductoCine(datos)
    
    def crearProductoCine(self, datos):
        self.crearMembresia(datos)
    
    def crearMembresia(self, datos):
        self.implementadorProductoCine.completarProductoCine(datos)
    
    def getMembresia(self):
        return self.implementadorProductoCine
    
    def mostrarMembresia(self):
        self.implementadorProductoCine.mostrarProductoCine()