from .DatosCliente  import DatosCliente
from .DatosCompra  import DatosCompra
from .DatosFuncion  import DatosFuncion
from .DatosBeneficios  import DatosBeneficios
from .Reservacion import Reservacion

class ReservacionVIP(Reservacion):
    
    datosCliente = DatosCliente()
    datosCompra = DatosCompra()
    datosFuncion = DatosFuncion()
    datosBeneficios = DatosBeneficios()

    
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
            
        Beneficios   : {self.datosBeneficios.beneficios}
            
        '''
        )