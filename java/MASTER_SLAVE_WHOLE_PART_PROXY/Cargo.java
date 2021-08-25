public class Cargo{
    //Atributos
    private int cargo;
    private boolean reembolsable;
    private boolean cargoExitoso;

    //Constructor
    public Cargo(){}

    //Métodos
    public void setCargo(int cargo, boolean reembolsable){
        this.cargo = cargo;
        this.reembolsable = reembolsable;
        this.cargoExitoso = false;
    }

    public void setCargoExitoso(boolean cargoE){
        this.cargoExitoso = cargoE;
    }

    public boolean getcargoExitoso(){
        return cargoExitoso;
    }

    public int getCargo(){ //no se usa
        return cargo;
    }

    public boolean getReembolsable(){ //no se usa
        return reembolsable;
    }
}
