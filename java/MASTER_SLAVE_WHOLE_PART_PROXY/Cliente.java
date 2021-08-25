import java.util.Scanner;

public class Cliente{
    public static void main(String[] args) {
        //Atributos
        Reservacion reservacion = new Reservacion();
        GestorReservacion nuevo = new GestorReservacion();
        Scanner entrada = new Scanner(System.in);

        int opc = 0;
        do{
            System.out.println("\n\n");
            System.out.print("1)Crear Funcion\n2)Mostrar Funcion\n3)Salir\nIngrese una opcion: ");
            opc = entrada.nextInt();
            if(opc == 1){
                nuevo.invocaSubordinados("Gonzalo", "Hernandez", "Montaño", 21, "Estudiante", "1234-1234-1234-1223", 24, 9, 21, "1", 3, 4, 20, "La purga");
            }
            else if(opc == 2){
                reservacion = nuevo.unirResultados();
                System.out.println(reservacion.mostrarReservacion()); 
            }
            else{
                System.out.println("\nHASTA PRONTO");
            }
        }while(opc != 3);

        entrada.close();
    }
}