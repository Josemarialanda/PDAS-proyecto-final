from Reservacion import Reservacion
from ProxyAutorizacionPago import ProxyAutorizacionPago
from Reservacion import DatosCliente
from Reservacion import DatosCompra
from Reservacion import DatosFuncion
from datetime import date

class GestorDatosCliente:
    
    datosCliente = DatosCliente()
    
    def preparaDatosCliente(self, nombres, apellidoPaterno,
                                  apellidoMaterno, edad,
                                  tipoCliente) -> DatosCliente:
        self.datosCliente.setDatosCliente(nombres, apellidoPaterno,
                                    apellidoMaterno, edad, tipoCliente)
        return self.datosCliente
    
class GestorDatosCompra:
    
    datosCompra = DatosCompra()
    
    def preparaDatosCompra(self, numeroTarjeta, fechaVencimiento) -> DatosCompra:
        self.datosCompra.setDatosCompra(numeroTarjeta, fechaVencimiento)
        return self.datosCompra
    
class GestorDatosFuncion:
    
    datosFuncion = DatosFuncion()
    
    def preparaDatosFuncion(self, asiento, horario, pelicula) -> DatosFuncion:
        self.datosFuncion.setDatosFuncion(asiento, horario, pelicula)
        return self.datosFuncion
    
class GestorReservaciones:
    
    reservacion = Reservacion()
    
    def __init__(self, nombres          : str,
                       apellidoPaterno  : str,
                       apellidoMaterno  : str,
                       edad             : int,
                       tipoCliente      : str,
                       numeroTarjeta    : str,
                       fechaVencimiento : date,
                       asiento          : str,
                       horario          : date,
                       pelicula         : str):
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

    def integraResultadosYCreaReservacion(self, datosCliente : DatosCliente, 
                                datosCompra  : DatosCompra, 
                                datosFuncion : DatosFuncion) -> Reservacion:
        self.reservacion.datosCliente = datosCliente
        self.reservacion.datosCompra  = datosCompra
        self.reservacion.datosFuncion = datosFuncion