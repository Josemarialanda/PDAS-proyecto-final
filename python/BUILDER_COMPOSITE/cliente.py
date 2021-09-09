from BUILDER_COMPOSITE.builder.ConstructorReservacionSencilla import ConstructorReservacionSencilla
from BUILDER_COMPOSITE.builder.ConstructorReservacionVIP      import ConstructorReservacionVIP
from BUILDER_COMPOSITE.builder.ConstructorReservacionMultiple import ConstructorReservacionMultiple
from BUILDER_COMPOSITE.builder.DirectorReservacion            import DirectorReservacion
from datetime import datetime


class Cliente:
    
    def __init__(self):
        self.directorReservacion = DirectorReservacion()
    
    def solicitaReservacionSencilla(self, datos):
        construtorReservacionSencilla = ConstructorReservacionSencilla()
        self.directorReservacion.setConstructor(construtorReservacionSencilla)
        self.directorReservacion.construirReservacion(datos)
        return construtorReservacionSencilla.obtenerReservacion()
        
    def solicitaReservacionVIP(self, datos):
        constructorReservacionVIP = ConstructorReservacionVIP()
        self.directorReservacion.setConstructor(constructorReservacionVIP)
        self.directorReservacion.construirReservacion(datos)
        return constructorReservacionVIP.obtenerReservacion()
    
    def solicitaReservacionMultiple(self, datos):
        constructorReservacionMultiple = ConstructorReservacionMultiple()
        self.directorReservacion.setConstructor(constructorReservacionMultiple)
        self.directorReservacion.construirReservacion(datos)
        return constructorReservacionMultiple.obtenerReservacion()
            
cliente = Cliente()

# solicitar reservacion sencilla
datosReservacionSencilla = ["Josemaria","Landa","Chavez",24,"Estudiante",
                                  "56647298922",datetime.today(),
                                  "4B",datetime.now(),"The Avengers"]

reservacionSencilla = cliente.solicitaReservacionSencilla(datosReservacionSencilla)


# solicitar reservacion VIP
datosReservacionVIP = ["Josemaria","Landa","Chavez",24,"Estudiante",
                                  "56647298922",datetime.today(),
                                  "4B",datetime.now(),"The Avengers",["Asiento reclinable","masaje de cuello"]]

reservacionVIP = cliente.solicitaReservacionVIP(datosReservacionVIP)


# solicitar reservacion multiple (usando reservacion VIP como base)
reservacionMultiple = cliente.solicitaReservacionMultiple(datosReservacionVIP)

# agregar una reservacion sencilla
reservacionMultiple.agregarReservacion(reservacionSencilla)

# eliminar la reservacion sencilla que se acaba de agregar
reservacionMultiple.eliminarReservacion(reservacionSencilla)

# agregar una reservacion sencilla de nuevo
reservacionMultiple.agregarReservacion(reservacionSencilla)

# mostrar reservaciones
reservacionMultiple.mostrarReservacion()
