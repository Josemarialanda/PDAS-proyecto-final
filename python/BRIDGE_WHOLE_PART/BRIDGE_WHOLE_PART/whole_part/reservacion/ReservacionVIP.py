from BRIDGE_WHOLE_PART.bridge.ImplAbstractaReservacion import ImplAbstractaReservacion
from BRIDGE_WHOLE_PART.whole_part.DatosBeneficios import DatosBeneficios

class ReservacionVIP(ImplAbstractaReservacion):
    
    datosBeneficios = DatosBeneficios()
    
    def __init__(self):
        pass
        
    def completarReservacion(self, datos):
        super().completarReservacion(datos[:-1])
        self.datosBeneficios.setDatosBeneficios(datos[-1])
    
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