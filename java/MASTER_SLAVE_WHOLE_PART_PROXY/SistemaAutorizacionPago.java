public class SistemaAutorizacionPago implements IAtorizacionPago{
    //Atributos
    Cargo cargoSolicitado = new Cargo();
    
    //Constructor
    public SistemaAutorizacionPago(){}

    //Métodos
    public void solicitaAutorizacionPago(Cargo cargo){
        System.out.println("\n\nSolicitando cargo");
        System.out.println("...");
        try{
            Thread.sleep(1000);
        }catch(InterruptedException e){

        }
        System.out.println("...");
        try{
            Thread.sleep(1000);
        }catch(InterruptedException e){
            
        }
        System.out.println("...");
        try{
            Thread.sleep(1000);
        }catch(InterruptedException e){
            
        }
        System.out.println("...");
        try{
            Thread.sleep(1000);
        }catch(InterruptedException e){
            
        }
        System.out.println("...");
        try{
            Thread.sleep(1000);
        }catch(InterruptedException e){
            
        }
        autorizacionCargo(cargo);
        
    }

    public boolean verificacionCargo(){
        if(cargoSolicitado.getcargoExitoso() == true){
            return true;
        }
        else{
            return false;
        }
    }

    public void autorizacionCargo(Cargo cargo){
        cargo.setCargoExitoso(true);
    }
}
