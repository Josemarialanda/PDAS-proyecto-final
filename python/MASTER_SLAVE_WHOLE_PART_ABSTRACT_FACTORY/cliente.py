from datetime import datetime

from MASTER_SLAVE_WHOLE_PART_ABSTRACT_FACTORY.abstract_factory_master.ReservacionMasterFactory import ReservacionMasterFactory
from MASTER_SLAVE_WHOLE_PART_ABSTRACT_FACTORY.abstract_factory_master.MembresiaFactory import MembresiaFactory

class Cliente:
    
    def __init__(self):
        self.reservacionFactory = ReservacionMasterFactory()
        self.membresiaFactory   = MembresiaFactory()
    
    def solicitaProductoSencillo(self,tipo,datos):
        if tipo == "reservacion":
            nombre           = datos[0]
            apellidoPaterno  = datos[1]
            apellidoMaterno  = datos[2]
            edad             = datos[3]
            tipoCliente      = datos[4]
            numeroTarjeta    = datos[5]
            fechaVencimiento = datos[6]
            asiento          = datos[7]
            horario          = datos[8]
            pelicula         = datos[9]
            return self.reservacionFactory.crearProductoCineSencillo(nombre,apellidoPaterno,apellidoMaterno,
                                                              edad,tipoCliente,numeroTarjeta,
                                                              fechaVencimiento,asiento,horario,
                                                              pelicula)
        if tipo == "membresia":
            nombre           = datos[0]
            apellidoPaterno  = datos[1]
            apellidoMaterno  = datos[2]
            edad             = datos[3]
            tipoCliente      = datos[4]
            return self.membresiaFactory.crearProductoCineSencillo(nombre,apellidoPaterno,apellidoMaterno,
                                                              edad,tipoCliente)
    
    def solicitaProductoVIP(self,tipo,datos):
        if tipo == "reservacion":
            nombre           = datos[0]
            apellidoPaterno  = datos[1]
            apellidoMaterno  = datos[2]
            edad             = datos[3]
            tipoCliente      = datos[4]
            numeroTarjeta    = datos[5]
            fechaVencimiento = datos[6]
            asiento          = datos[7]
            horario          = datos[8]
            pelicula         = datos[9]
            beneficios       = datos[10]
            return self.reservacionFactory.crearProductoCineVIP(nombre,apellidoPaterno,apellidoMaterno,
                                                              edad,tipoCliente,numeroTarjeta,
                                                              fechaVencimiento,asiento,horario,
                                                              pelicula,beneficios)
        if tipo == "membresia":
            nombre           = datos[0]
            apellidoPaterno  = datos[1]
            apellidoMaterno  = datos[2]
            edad             = datos[3]
            tipoCliente      = datos[4]
            beneficios       = datos[5]
            return self.membresiaFactory.crearProductoCineVIP(nombre,apellidoPaterno,apellidoMaterno,
                                                              edad,tipoCliente,beneficios)
            
cliente = Cliente()

datosReservacionSencilla = ["Josemaria","Landa","Chavez",24,"Cholo bien gangster",
                                  "56647298922",datetime.today(),
                                  "4B",datetime.now(),"The Avengers"]
datosReservacionVIP = ["Josemaria","Landa","Chavez",24,"Cholo bien gangster",
                                  "56647298922",datetime.today(),
                                  "4B",datetime.now(),"The Avengers",["Asiento reclinable","masaje"]]

reservacionSencilla = cliente.solicitaProductoSencillo("reservacion", datosReservacionSencilla)
reservacionVIP      = cliente.solicitaProductoVIP("reservacion", datosReservacionVIP)

datosMembresiaSencilla = ["Josemaria","Landa","Chavez",24,"Cholo bien gangster"]
datosMembresiaVIP      = ["Josemaria","Landa","Chavez",24,"Cholo bien gangster",["Asiento reclinable","masaje"]]

membresiaSencilla = cliente.solicitaProductoSencillo("membresia",datosMembresiaSencilla)
membresiaVIP      = cliente.solicitaProductoVIP("membresia",datosMembresiaVIP)