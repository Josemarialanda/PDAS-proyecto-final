from .DatosCliente import DatosCliente
from .DatosCompra  import DatosCompra
from .DatosFuncion import DatosFuncion
        
class Reservacion:
    
    def __init__(self, nombres,
                       apellidoPaterno ,
                       apellidoMaterno ,
                       edad,
                       tipoCliente,
                       numeroTarjeta,
                       fechaVencimiento,
                       asiento,
                       horario,
                       pelicula):
        self.datosCliente = DatosCliente()
        self.datosCompra  = DatosCompra()
        self.datosFuncion = DatosFuncion()
        self.datosCliente.setDatosCliente(nombres,apellidoPaterno,apellidoMaterno,edad,tipoCliente)
        self.datosCompra.setDatosCompra(numeroTarjeta,fechaVencimiento)
        self.datosFuncion.setDatosFuncion(asiento,horario,pelicula)
        
    
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