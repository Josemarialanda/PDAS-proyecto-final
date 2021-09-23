from datetime import datetime
from BRIDGE_WHOLE_PART.whole_part.reservacion.ReservacionSencilla import ReservacionSencilla
from BRIDGE_WHOLE_PART.bridge.Membresia import Membresia
from BRIDGE_WHOLE_PART.bridge.Reservacion import Reservacion
from BRIDGE_WHOLE_PART.bridge.Membresia   import Membresia


class Cliente:
    
    def crearReservacion(self, tipo, datos):
        reservacion = Reservacion(tipo, datos)
        return reservacion.getReservacion()
    
    def crearMembresia(self, tipo, datos):
        membresia = Membresia(tipo, datos)
        return membresia.getMembresia()
    
cliente = Cliente()

# Crear reservacion sencilla
datosReservacionSencilla = ["Josemaria","Landa","Chavez",24,"Estudiante",
                                  "56647298922",datetime.now(),
                                  "4B",datetime.now(),"The Avengers"]
reservacionSencilla : ReservacionSencilla
reservacionSencilla = cliente.crearReservacion("sencilla", datosReservacionSencilla)

# Crear reservacion VIP
datosReservacionVIP = ["Josemaria","Landa","Chavez",24,"Estudiante",
                                  "56647298922",datetime.today(),
                                  "4B",datetime.now(),"The Avengers",["Asiento reclinable","masaje de cuello"]]
reservacionVIP = cliente.crearReservacion("vip", datosReservacionVIP)

# crear membresia sencilla
datosMembresiaSencilla = ["Josemaria","Landa","Chavez",24,"Estudiante"]
membresiaSencilla = cliente.crearMembresia("sencilla", datosMembresiaSencilla)

# crear membresia VIP
datosMembresiaVIP      = ["Josemaria","Landa","Chavez",24,"Estudiante",["Asiento reclinable","masaje de cuello"]]
membresiaVIP      = cliente.crearMembresia("vip", datosMembresiaVIP)