from BUILDER_COMPOSITE.builder.ConstructorReservacionSencilla import ConstructorReservacionSencilla
from BUILDER_COMPOSITE.builder.ConstructorReservacionVIP      import ConstructorReservacionVIP
from BUILDER_COMPOSITE.builder.ConstructorReservacionMultiple import ConstructorReservacionMultiple
from .ConstructorReservacion import ConstructorReservacion

class DirectorReservacion:
    
    def __init__(self) -> None:
        self.constructorReservacion = ConstructorReservacion()
    
    def setConstructor(self, constructorReservacion : ConstructorReservacion):
        self.constructorReservacion = constructorReservacion
    
    def construirReservacion(self, datos):
        if self.constructorReservacion is not None:
            if isinstance(self.constructorReservacion, ConstructorReservacionSencilla):
                self.construirBaseReservacion(datos)
            if isinstance(self.constructorReservacion, ConstructorReservacionVIP):
                self.construirBaseReservacion(datos)
                self.constructorReservacion.construirDatosBeneficios(datos[-1])
            if isinstance(self.constructorReservacion, ConstructorReservacionMultiple):
                self.construirBaseReservacion(datos)
                self.constructorReservacion.construirDatosBeneficios(datos[-1])
                
    def construirBaseReservacion(self, datos):
        self.constructorReservacion.construirDatosCliente(*datos[:5])
        self.constructorReservacion.construirDatosCompra(*datos[5:7])
        self.constructorReservacion.construirDatosFuncion(*datos[7:9],datos[9])