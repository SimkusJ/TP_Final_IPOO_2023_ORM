<?php




include_once "BaseDatos.php";
include_once "Empresa.php";
include_once "ResponsableV.php";
include_once "Viaje.php";
include_once "Pasajero.php";




//----------------------------------------Seccion de Empresa ---------------------------------------
function menuEmpresa($empresa)
{

    echo "Bienvenido al menu de Empresa ¿que desea hacer? \n";

    echo " 1) Listado de viajes \n 
           2) Agregar nuevo viaje \n
           3) Modificar un viaje existente\n 
           4) Borrar un viaje \n 
           5) Volver";



     do{

        $opcion=trim(fgets(STDIN));
        switch ($opcion) {
            case 1:
                echo "cargando listado de empresas... \n";
                sleep(3);
                listadoEmpresas();
                break;
            
            case 2:
                break;

            case 3:
                break;

            case 4:
                break;
            
            case 5:
                echo "Volviendo al menu principal... \n"; 
                sleep(5);
                break;   
        }

    }while ($opcion != 5);
    
}

function listadoEmpresas(){
    $empresa=new Empresa();
    $colEmpresas=$empresa->listar();

    for ($i=0;$i<count($colEmpresas);$i++){
        echo $colEmpresas[$i];
        sleep(2);
    }

}


//----------------------------------------Seccion de pasajeros ---------------------------------------
function menuPasajeros($empresa)
{

    echo "Bienvenido al menu de pasajero ¿que desea hacer? \n";

    echo " 1) Listado de pasajeros por viaje\n 
           2) Agregar nuevo pasajero a un viaje \n
           3) Modificación de un pasajero existente\n 
           4) Borrar un pasajero \n 
           5) Volver";



     do{
        $opcion=trim(fgets(STDIN));
        switch ($opcion) {
            case 1:
                break;
            
            case 2:
                break;

            case 3:
                break;

            case 4:
                break;
            
            case 5:
                echo "Volviendo al menu principal... \n";
                sleep(5);
                break;   
        }

    }while ($opcion != 5);


}



//----------------------------------------Seccion del Empleado/Responsable ---------------------------------------
function menuResponsable($empresa)
{

    echo "Bienvenido al menu del Responsable ¿que desea hacer? \n";

    echo " 1) Listado de responsables  \n 
           2) Agregar nuevo Responsable al viaje \n
           3) Modificacar un responsable existente\n 
           4) Borrar un responsable \n 
           5) Volver";

          

     do{
        $opcion=trim(fgets(STDIN));
        switch ($opcion) {
            case 1:
                echo "Cargando lista de empleados... \n";
                sleep(3);
                listadoResponsables();

                break;
            
            case 2:
                break;

            case 3:
                break;

            case 4:
                break;
            
            case 5:

                echo "Volviendo al menu principal... \n";
                sleep(5);
                break;   
        }

    }while ($opcion != 5);
    
}

function listadoResponsables(){

    $responsable=new Responsable();
    $colResponsables=$responsable->listar();

    for ($i=0;$i<count($colResponsables);$i++){
        echo $colResponsables[$i];
        sleep(2);
    }

}




//----------------------------------------Seccion de Viaje---------------------------------------
function menuViaje($empresa)
{

    echo "Bienvenido al menu del Viaje ¿que desea hacer? \n";

    echo " 1) Listado de empresas \n 
           2) Agregar una nueva empresa \n
           3) Modificar una empresa existente\n 
           4) Borrar una empresa \n 
           5) Volver";



     do{
        $opcion=trim(fgets(STDIN));
        switch ($opcion) {
            case 1:

                break;
            
            case 2:
                break;

            case 3:
                break;

            case 4:
                break;
            
            case 5:
                echo "Volviendo al menu principal... \n"; 
                sleep(5);
                break;   
        }

    }while ($opcion != 5);   
}

function listadoViajes(){

    $Viaje=new Viaje();
    $colViajes=$Viaje->listar();

    for ($i=0;$i<count($colViajes);$i++){
        echo $colViajes[$i];
        sleep(2);
    }

}

//----------------------------------------Seccion de testViaje---------------------------------------

function menuTestViaje(){

    echo "Bienvenido al menu del TestViaje ¿que desea hacer? \n";

    $empresa=new Empresa();

     do{

        echo " 1) Menu Empresas. \n 
        2) Menu Empleados/Responsable. \n
        3) Menu Personas/Pasajeros. \n 
        4) Menu Viaje. \n 
        5) Volver";

        $opcion=trim(fgets(STDIN));
        switch ($opcion) {
            case 1:
                echo "Cargando menu empresas...";
                sleep(3);
                menuEmpresa($empresa);
                break;
            
            case 2:
                echo "Cargando menu empleados...";
                sleep(3);
                menuResponsable($empresa);
                break;

            case 3:
                echo "Cargando menu pasajeros...";
                sleep(3);
                menuPasajeros($empresa);
                break;

            case 4:
                echo "Cargando menu del viaje...";
                sleep(3);
                menuViaje($empresa);
                break;
            
            case 5:
                echo "Cerrando programa... \n"; 
                sleep(5);
                break;   
        }

    }while ($opcion != 5);  

}

menuTestViaje();