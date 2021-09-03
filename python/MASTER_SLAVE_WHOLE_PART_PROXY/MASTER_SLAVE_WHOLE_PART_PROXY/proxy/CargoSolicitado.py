class CargoSolicitado:
    
    cargo        : int
    reembolsable : bool
    cargoExitoso : bool
    
    def setCargo(self, cargo, reembolsable, cargoExitoso = False):
        self.cargo        = cargo
        self.reembolsable = reembolsable
        self.cargoExitoso = cargoExitoso