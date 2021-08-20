from datetime import date

class DatosCliente:
    
    nombres         : str
    apellidoPaterno : str
    apellidoMaterno : str
    edad            : int
    tipoCliente     : str
    
    def setDatosCliente(self, nombres         : str,
                              apellidoPaterno : str,
                              apellidoMaterno : str,
                              edad            : int,
                              tipoCliente      : bool) -> None:
        self.nombres         = nombres
        self.apellidoPaterno = apellidoPaterno
        self.apellidoMaterno = apellidoMaterno
        self.edad            = edad
        self.tipoCliente     = tipoCliente
    
    def getDatosCliente(self):
        return (self.nombres,
                self.apellidoPaterno,
                self.apellidoMaterno,
                self.edad,
                self.tipoCliente)
    
class DatosCompra:
    
    numeroTarjeta    : str
    fechaVencimiento : str
    
    def setDatosCompra(self, numeroTarjeta    : str,
                             fechaVencimiento : str):
        self.numeroTarjeta    = numeroTarjeta
        self.fechaVencimiento = fechaVencimiento
    
class DatosFuncion:
    
    asiento  : str
    horario  : date
    pelicula : str
    
    def setDatosFuncion(self, asiento : str,
                              horario : date,
                              pelicula : str):
        self.asiento  = asiento
        self.horario  = horario
        self.pelicula = pelicula
        
    def modificarDatosFuncion(self, asiento : str = None,
                                    horario : date = None,
                                    pelicula : str = None) -> None:
        if asiento  is not None: self.asiento  = asiento
        if horario  is not None: self.horario  = horario
        if pelicula is not None: self.pelicula = pelicula
    
    def verDatosFuncion(self):
        return (self.asiento,
                self.horario,
                self.pelicula)
        
class Reservacion:
    
    datosCliente = DatosCliente()
    datosCompra  = DatosCompra()
    datosFuncion = DatosFuncion()
    
    def mostrarReservacion(self):
        print(
        f'''
        Reservación:
        
        Datos cliente:
            Nombres          : {self.datosCliente.nombres}
            Apellido paterno : {self.datosCliente.apellidoPaterno}
            Apellido materno : {self.datosCliente.apellidoMaterno}
            Edad             : {self.datosCliente.edad}
            Tipo de cliente  : {self.datosCliente.tipoCliente}
            
        Datos compra:
            Número de tarjeta               : {self.datosCompra.numeroTarjeta}
            Fecha de vencimiento de tarjeta : {self.datosCompra.fechaVencimiento}
            
        Datos función:
            Asiento  : {self.datosFuncion.asiento}
            Horario  : {self.datosFuncion.horario}
            pelicula : {self.datosFuncion.pelicula}
            
        '''
        )
        
    def devolverReservacion(self):
        return (self.datosCliente,
                self.datosCompra,
                self.datosFuncion)