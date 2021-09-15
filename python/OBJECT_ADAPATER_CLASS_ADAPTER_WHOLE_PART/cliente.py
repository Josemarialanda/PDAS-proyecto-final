from OBJECT_ADAPATER_CLASS_ADAPTER_WHOLE_PART.GestorReservaciones import GestorReservaciones
from OBJECT_ADAPATER_CLASS_ADAPTER_WHOLE_PART.object_adapter.AdaptadorOReservacionVIP import AdaptadorOReservacion
from OBJECT_ADAPATER_CLASS_ADAPTER_WHOLE_PART.class_adapter.AdaptadorCReservacionMultiple import AdaptadorCReservacionMultiple
from datetime import datetime


class Cliente:
    def solicitarReservacion(self, datos):
        gestorReservaciones = GestorReservaciones()
        reservacion = gestorReservaciones.crearReservacion(*datos)
        return reservacion
    
    def solicitarReservacionVIP(self, datos):
        adaptadorOReservacion = AdaptadorOReservacion()
        reservacion = adaptadorOReservacion.crearReservacion(*datos)
        return reservacion
    
    def solicitarReservacionMultiple(self, datos):
        adaptadorCReservacionMultiple = AdaptadorCReservacionMultiple()
        reservacion = adaptadorCReservacionMultiple.crearReservacion(datos)
        return reservacion
    
cliente = Cliente()

# Crear reservacion sencilla
datosReservacionSencilla = ["Josemaria","Landa","Chavez",24,"Estudiante",
                                  "56647298922",datetime.today(),
                                  "4B",datetime.now(),"The Avengers"]
reservacionSencilla = cliente.solicitarReservacion(datosReservacionSencilla)

# Crear reservacion VIP
datosReservacionVIP = ["Josemaria","Landa","Chavez",24,"Estudiante",
                                  "56647298922",datetime.today(),
                                  "4B",datetime.now(),"The Avengers",["Asiento reclinable","masaje de cuello"]]
reservacionVIP = cliente.solicitarReservacionVIP(datosReservacionVIP)

# crear reservacion multiple
datosReservaciones = [datosReservacionSencilla,
                      datosReservacionVIP,
                      datosReservacionSencilla,
                      datosReservacionVIP]
reservaciones = cliente.solicitarReservacionMultiple(datosReservaciones)

# mostrar reservaciones
for reservacion in reservaciones:
    reservacion.mostrarReservacion()