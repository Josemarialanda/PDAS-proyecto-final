from datetime import datetime

from MASTER_SLAVE_WHOLE_PART_ABSTRACT_FACTORY.abstract_factory_master.ReservacionMasterFactory import ReservacionMasterFactory
from MASTER_SLAVE_WHOLE_PART_ABSTRACT_FACTORY.abstract_factory_master.MembresiaFactory import MembresiaFactory

class Cliente:
    
    def __init__(self):
        self.reservacionFactory = ReservacionMasterFactory()
        self.membresiaFactory   = MembresiaFactory()
    
    def solicitaProductoSencillo(self,tipo,datos):
        if tipo == "reservacion":
            return self.reservacionFactory.crearProductoCineSencillo(*datos)
        if tipo == "membresia":
            return self.membresiaFactory.crearProductoCineSencillo(*datos)
    
    def solicitaProductoVIP(self,tipo,datos):
        if tipo == "reservacion":
            return self.reservacionFactory.crearProductoCineVIP(*datos)
        if tipo == "membresia":
            return self.membresiaFactory.crearProductoCineVIP(*datos)
            
cliente = Cliente()

# Crear reservacion sencilla
datosReservacionSencilla = ["Josemaria","Landa","Chavez",24,"Cholo bien gangster",
                                  "56647298922",datetime.today(),
                                  "4B",datetime.now(),"The Avengers"]
reservacionSencilla = cliente.solicitaProductoSencillo("reservacion", datosReservacionSencilla)


# Crear reservacion VIP
datosReservacionVIP = ["Josemaria","Landa","Chavez",24,"Cholo bien gangster",
                                  "56647298922",datetime.today(),
                                  "4B",datetime.now(),"The Avengers",["Asiento reclinable","masaje"]]
reservacionVIP      = cliente.solicitaProductoVIP("reservacion", datosReservacionVIP)


# crear membresia sencilla
datosMembresiaSencilla = ["Josemaria","Landa","Chavez",24,"Cholo bien gangster"]
membresiaSencilla = cliente.solicitaProductoSencillo("membresia",datosMembresiaSencilla)


# crear membresia VIP
datosMembresiaVIP      = ["Josemaria","Landa","Chavez",24,"Cholo bien gangster",["Asiento reclinable","masaje"]]
membresiaVIP      = cliente.solicitaProductoVIP("membresia",datosMembresiaVIP)