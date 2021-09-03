from ..whole_part.Reservacion      import Reservacion
from ..proxy.ProxyAutorizacionPago import ProxyAutorizacionPago
from .GestorDatosCliente           import GestorDatosCliente
from .GestorDatosCompra            import GestorDatosCompra
from .GestorDatosFuncion           import GestorDatosFuncion

    
class GestorReservaciones:
    
    reservacion = Reservacion()
    
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
        self.invocaSubordinados(nombres, apellidoPaterno,
                          apellidoMaterno, edad, tipoCliente,
                          numeroTarjeta, fechaVencimiento,
                          asiento, horario, pelicula) 
        
    def invocaSubordinados(self, nombres, apellidoPaterno,
                     apellidoMaterno, edad, tipoCliente,
                     numeroTarjeta, fechaVencimiento,
                     asiento, horario, pelicula):
        datosCliente = GestorDatosCliente().preparaDatosCliente(nombres, apellidoPaterno, apellidoMaterno, edad, tipoCliente)
        datosCompra  = GestorDatosCompra().preparaDatosCompra(numeroTarjeta, fechaVencimiento)
        datosFuncion = GestorDatosFuncion().preparaDatosFuncion(asiento, horario, pelicula)
        self.integraResultadosYCreaReservacion(datosCliente, datosCompra, datosFuncion)
    
        pago = ProxyAutorizacionPago()
        pago.preparaCargo(datosFuncion, datosCompra)
        resultado = pago.verificacionCargo()
        
        if resultado:
            print("Reservación exitosa!")
        else:
            print("Reservación falló!")
            self.reservacion = None

    def integraResultadosYCreaReservacion(self, datosCliente, datosCompra, datosFuncion) -> Reservacion:
        self.reservacion.datosCliente = datosCliente
        self.reservacion.datosCompra  = datosCompra
        self.reservacion.datosFuncion = datosFuncion