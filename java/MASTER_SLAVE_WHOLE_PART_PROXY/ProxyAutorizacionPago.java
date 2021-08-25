public class ProxyAutorizacionPago extends SistemaAutorizacionPago{
        //Atributos
        Reservacion reservacion = new Reservacion();

        //Constructor
        public ProxyAutorizacionPago(){}

        //Métodos
        public void preparaCargo(DatosFuncion df){
            int cargo = 100;
            boolean reembolsable = false;
            super.cargoSolicitado.setCargo(cargo, reembolsable);
            super.solicitaAutorizacionPago(cargoSolicitado);
        }
}
