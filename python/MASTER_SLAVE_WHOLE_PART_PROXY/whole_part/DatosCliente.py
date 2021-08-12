class DatosCliente:
    nombres = None
    apellidoPaterno = None
    apellidoMaterno = None
    edad = None
    estudiante = None
    clienteEspecial = None
    
    def setDatosCliente(self, nombres,
                        apellidoPaterno,
                        apellidoMaterno,
                        edad,
                        estudiante,
                        clienteEspecial):
        self.nombres = nombres
        self.apellidoPaterno = apellidoPaterno
        self.apellidoMaterno = apellidoMaterno
        self.edad = edad
        self.estudiante = estudiante
        self.clienteEspecial = clienteEspecial
        
    def getDatosCliente(self):
        
        assert (self.nombres != None and 
                self.apellidoPaterno != None and 
                self.apellidoMaterno != None and
                self.edad != None and
                self.estudiante != None and
                self.clienteEspecial != None )
        
        return (self.nombres,
               self.apellidoPaterno,
               self.apellidoMaterno,
               self.edad,
               self.estudiante,
               self.clienteEspecial)