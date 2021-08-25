public class DatosCliente {
    //Atributos
    private String nombre;
    private String apellidoPaterno;
    private String apellidoMaterno;
    private int edad;
    private String tipoCliente;

    //Constructor
    public DatosCliente(){}

    //Métodos
    public void setDatosCliente(String nombre, String apellidoP, String apellidoM, int edad, String tipoC){
        this.nombre = nombre;
        this.apellidoPaterno = apellidoP;
        this.apellidoMaterno = apellidoM;
        this.edad = edad;
        this.tipoCliente = tipoC;
    }
    
    public String getDatosCliente(){
        return "\nDATOS DEL CLIENTE | NOMBRE: " + nombre + " " +  apellidoMaterno + " " + apellidoPaterno + " | EDAD: " + edad + " | TIPO DE CLIENTE: " + tipoCliente;
    }
}
