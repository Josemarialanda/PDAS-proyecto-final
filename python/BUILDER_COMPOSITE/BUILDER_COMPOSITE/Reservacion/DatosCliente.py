class DatosCliente:
    
    nombres         : str
    apellidoPaterno : str
    apellidoMaterno : str
    edad            : int
    tipoCliente     : str
    
    def setDatosCliente(self, nombres,
                              apellidoPaterno,
                              apellidoMaterno,
                              edad,
                              tipoCliente):
        self.nombres         = nombres
        self.apellidoPaterno = apellidoPaterno
        self.apellidoMaterno = apellidoMaterno
        self.edad            = edad
        self.tipoCliente     = tipoCliente