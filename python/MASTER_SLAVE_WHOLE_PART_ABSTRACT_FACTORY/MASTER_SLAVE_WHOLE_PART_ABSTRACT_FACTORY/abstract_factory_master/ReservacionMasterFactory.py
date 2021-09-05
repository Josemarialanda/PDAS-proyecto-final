from .ProductoCineFactory import ProductoCineFactory

from ..whole_part.ReservacionSencilla       import ReservacionSencilla
from ..whole_part.ReservacionVIP            import ReservacionVIP
from ..master_slaves.GestorDatosCliente     import GestorDatosCliente
from ..master_slaves.GestorDatosCompra      import GestorDatosCompra
from ..master_slaves.GestorDatosFuncion     import GestorDatosFuncion
from ..master_slaves.GestorDatosBeneficios  import GestorDatosBeneficios

class ReservacionMasterFactory(ProductoCineFactory):

    def invocaSubordinados_sencillo(self, nombres, apellidoPaterno,
                     apellidoMaterno, edad, tipoCliente,
                     numeroTarjeta, fechaVencimiento,
                     asiento, horario, pelicula):
        datosCliente = GestorDatosCliente().preparaDatosCliente(nombres, apellidoPaterno, apellidoMaterno, edad, tipoCliente)
        datosCompra  = GestorDatosCompra().preparaDatosCompra(numeroTarjeta, fechaVencimiento)
        datosFuncion = GestorDatosFuncion().preparaDatosFuncion(asiento, horario, pelicula)
        return datosCliente,datosCompra,datosFuncion
    
    def invocaSubordinados_vip(self, nombres, apellidoPaterno,
                     apellidoMaterno, edad, tipoCliente,
                     numeroTarjeta, fechaVencimiento,
                     asiento, horario, pelicula,
                     beneficios):
        datosCliente    = GestorDatosCliente().preparaDatosCliente(nombres, apellidoPaterno, apellidoMaterno, edad, tipoCliente)
        datosCompra     = GestorDatosCompra().preparaDatosCompra(numeroTarjeta, fechaVencimiento)
        datosFuncion    = GestorDatosFuncion().preparaDatosFuncion(asiento, horario, pelicula)
        datosBeneficios = GestorDatosBeneficios().preparaDatosBeneficios(beneficios)
        return datosCliente,datosCompra,datosFuncion,datosBeneficios
    
    def crearProductoCineSencillo(self,nombres,
                       apellidoPaterno ,
                       apellidoMaterno ,
                       edad,
                       tipoCliente,
                       numeroTarjeta,
                       fechaVencimiento,
                       asiento,
                       horario,
                       pelicula):
        datosCliente,datosCompra,datosFuncion = self.invocaSubordinados_sencillo(nombres, apellidoPaterno,
                          apellidoMaterno, edad, tipoCliente,
                          numeroTarjeta, fechaVencimiento,
                          asiento, horario, pelicula)
        return ReservacionSencilla(datosCliente,datosCompra,datosFuncion)
    
    def crearProductoCineVIP(self,nombres,
                       apellidoPaterno ,
                       apellidoMaterno ,
                       edad,
                       tipoCliente,
                       numeroTarjeta,
                       fechaVencimiento,
                       asiento,
                       horario,
                       pelicula,
                       beneficios):
        datosCliente,datosCompra,datosFuncion,datosBeneficios= self.invocaSubordinados_vip(nombres, apellidoPaterno,
                          apellidoMaterno, edad, tipoCliente,
                          numeroTarjeta, fechaVencimiento,
                          asiento, horario, pelicula,
                          beneficios)
        return ReservacionVIP(datosCliente,datosCompra,datosFuncion,datosBeneficios)