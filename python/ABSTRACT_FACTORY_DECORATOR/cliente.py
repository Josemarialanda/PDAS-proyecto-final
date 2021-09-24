from datetime import datetime
from ABSTRACT_FACTORY_DECORATOR.decorator.ConcreteDecoratorReservacionMultiple import ConcreteDecoratorReservacionMultiple
from ABSTRACT_FACTORY_DECORATOR.decorator.ConcreteDecoratorReservacionVIP import ConcreteDecoratorReservacionVIP
from ABSTRACT_FACTORY_DECORATOR.reservacion.ReservacionSencilla import ReservacionSencilla
from ABSTRACT_FACTORY_DECORATOR.abstract_factory.ReservacionSencillaFactory import ReservacionSencillaFactory

class Cliente:
    
    def solicitaReservacionSencilla(self, datos):
        reservacionSencillaFactory = ReservacionSencillaFactory()
        reservacionSencillaFactory.crearReservacion(datos)
        return reservacionSencillaFactory.reservacionSencilla

    def hacerVIP(self, reservacionSencilla : ReservacionSencilla, datos):
        concreteDecoratorReservacionVIP = ConcreteDecoratorReservacionVIP(reservacionSencilla)
        concreteDecoratorReservacionVIP.aumentarReservacion(datos)
        return concreteDecoratorReservacionVIP.reservacionExtendida

    def hacerMultiple(self, reservacionSencilla : ReservacionSencilla):
        concreteDecoratorReservacionMultiple = ConcreteDecoratorReservacionMultiple(reservacionSencilla)
        concreteDecoratorReservacionMultiple.aumentarReservacion()
        return concreteDecoratorReservacionMultiple.reservacionExtendida
    
cliente = Cliente()

# Crear reservacion sencilla
datosReservacionSencilla = ["Josemaria","Landa","Chavez",24,"Estudiante",
                                  "56647298922",datetime.now(),
                                  "4B",datetime.now(),"The Avengers"]
reservacionSencilla = cliente.solicitaReservacionSencilla(datosReservacionSencilla)

# volver reservacion vip
datosReservacionVIP = ["Asiento reclinable","masaje de cuello"]
reservacionVIP = cliente.hacerVIP(reservacionSencilla, datosReservacionVIP)

# volver reservacion multiple
reservacionMultiple = cliente.hacerMultiple(reservacionSencilla)
reservacionMultiple.agregarReservacion(reservacionSencilla)