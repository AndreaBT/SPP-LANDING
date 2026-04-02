<?php
// 1. Incluye el archivo config.php (usando __DIR__ para ubicarlo correctamente)
include_once(__DIR__ . '/../config.php');
include_once(ROOT_PATH . 'head.php');
include_once(ROOT_PATH . 'navbar.php');
?>

<main id="contenido">
    <section class="container">
        <div id="chart" class="tree">
            <ul>
                <li>
                    <span class="open">
                        
                            <button  onclick="openDirectory()"  class="collapse-button">
                                <img id="imagen" alt="Boton" src="<?php echo BASE_URL; ?>src/images/menos.gif" />
                            </button>
                        
                    </span>
                    <div class="entidad">
                        <div class="f">
                            <p style="margin-bottom: 0px; color:#0b0f1a !important;"  class="Russ">
                                CMDTE. LUIS FELIPE SAIDEN OJEDA 
                                
                            </p> 
                        </div>
                        <div class="p" style="color:#0b0f1a !important;" >
                            SECRETARIO DE SEGURIDAD PÚBLICA
                        </div>
                        <div class="a">
                            <span class="Juraligt " style="color:#0b0f1a !important;" >Direccion: <br>
                                Km. 45 Periférico Poniente, Tablaje Catastral 12648, Polígono Caucel Susulá, Mérida, Yucatán <br>
                                Teléfono: Ext:49001 <br>
                                (999) 9303200 
                            </span>
                        </div>
                    </div>
                    <ul class="collapse-content">
                        <li>
                            <span class="nada"></span>
                            <div class="entidad">
                                <div class="f">
                                    <p style="margin-bottom: 0px; color:#0b0f1a !important;" class="Russ">
                                        CMDTE. JOSÉ ASUNCIÓN CANUL TEC 
                                        
                                    </p> 
                                </div>
                                <div class="p" style="color:#0b0f1a !important;">
                                    SECRETARIO PARTICULAR
                                </div>
                                <div class="a">
                                    <span class="Juraligt " style="color:#0b0f1a !important;">Direccion: <br>
                                        Km. 45 Periférico Poniente, Tablaje Catastral 12648, Polígono Caucel Susulá, Mérida, Yucatán <br>
                                        Teléfono: Ext:49118 <br>
                                        (999) 9303200 
                                    </span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <span class="nada"></span>
                            <div class="entidad">
                                <div class="f">
                                    <p style="margin-bottom: 0px; color:#0b0f1a !important;" class="Russ">
                                        LIC. ROBERTO EMMANUEL DURÁN FLORES
                                        
                                    </p> 
                                </div>
                                <div class="p" style="color:#0b0f1a !important;">
                                    ENCARGADO DE DIRECCIÓN DE DIFUSIÓN Y COMUNICACIÓN
                                </div>
                                <div class="a">
                                    <span class="Juraligt " style="color:#0b0f1a !important;">Direccion: <br>
                                        Km. 45 Periférico Poniente, Tablaje Catastral 12648, Polígono Caucel Susulá, Mérida, Yucatán <br>
                                        Teléfono: Ext:49004 <br>
                                        (999) 9303200  
                                    </span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <span class="nada"></span>
                            <div class="entidad">
                                <div class="f">
                                    <p style="margin-bottom: 0px; color:#0b0f1a !important;" class="Russ">
                                        LIC. GUILLERMO ALBERTO CUPUL RAMÍREZ
                                        
                                    </p> 
                                </div>
                                <div class="p" style="color:#0b0f1a !important;">
                                    DIRECTOR DE DIRECCIÓN JURÍDICA
                                </div>
                                <div class="a">
                                    <span class="Juraligt " style="color:#0b0f1a !important;">Direccion: <br>
                                        Km. 45 Periférico Poniente, Tablaje Catastral 12648, Polígono Caucel Susulá, Mérida, Yucatán <br>
                                        Teléfono: Ext:49033 <br>
                                        (999) 9303200 
                                    </span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <span class="nada"></span>
                            <div class="entidad">
                                <div class="f">
                                    <p style="margin-bottom: 0px; color:#0b0f1a !important;" class="Russ">
                                        CMDTE. MARCOS JOSUÉ MENA CAN
                                        
                                    </p> 
                                </div>
                                <div class="p" style="color:#0b0f1a !important;">
                                    ENCARGADO DEL CENTRO DE CONTROL, COMANDO, COMUNICACIONES, CÓMPUTO, COORDINACIÓN E INTELIGENCIA
                                </div>
                                <div class="a">
                                    <span class="Juraligt " style="color:#0b0f1a !important;">Direccion: <br>
                                        Km. 45 Periférico Poniente, Tablaje Catastral 12648, Polígono Caucel Susulá, Mérida, Yucatán <br>
                                        Teléfono: Ext:49005 <br>
                                        (999) 9303200 
                                    </span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <span class="nada"></span>
                            <div class="entidad">
                                <div class="f">
                                    <p style="margin-bottom: 0px; color:#0b0f1a !important;" class="Russ">
                                        LIC. SULMY SUSHET SÁNCHEZ HERRERA
                                        
                                    </p> 
                                </div>
                                <div class="p" style="color:#0b0f1a !important;"
>
                                    COORDINADORA DE ASUNTOS INTERNOS E INFORMACIÓN POLICIAL
                                </div>
                                <div class="a">
                                    <span class="Juraligt " style="color:#0b0f1a !important;">Direccion: <br>
                                        Km. 45 Periférico Poniente, Tablaje Catastral 12648, Polígono Caucel Susulá, Mérida, Yucatán <br>
                                        Teléfono: Ext:49149 <br>
                                        (999) 9303200 
                                    </span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <span class="nada"></span>
                            <div class="entidad">
                                <div class="f">
                                    <p style="margin-bottom: 0px; color:#0b0f1a !important;" class="Russ">
                                        MTRO. ENRIQUE ATOCHA PUERTO NOVELO
                                        
                                    </p> 
                                </div>
                                <div class="p" style="color:#0b0f1a !important;">
                                    ENCARGADO DE UNIDAD DE AYUDANTÍA 
                                </div>
                                <div class="a">
                                    <span class="Juraligt " style="color:#0b0f1a !important;">Direccion: <br>
                                        Km. 45 Periférico Poniente, Tablaje Catastral 12648, Polígono Caucel Susulá, Mérida, Yucatán <br>
                                        Teléfono: Ext:49242 <br>
                                        (999) 9303200 
                                    </span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <span class="nada"></span>
                            <div class="entidad">
                                <div class="f">
                                    <p style="margin-bottom: 0px; color:#0b0f1a !important;" class="Russ">
                                        C. RAÚL ALEJANDRO CERVERA ROMERO
                                        
                                    </p> 
                                </div>
                                <div class="p" style="color:#0b0f1a !important;"> 
                                    ENCARGADO DE ATENCIÓN CIUDADANA 
                                </div>
                                <div class="a">
                                    <span class="Juraligt " style="color:#0b0f1a !important;">Direccion: <br>
                                        Km. 45 Periférico Poniente, Tablaje Catastral 12648, Polígono Caucel Susulá, Mérida, Yucatán <br>
                                        Teléfono: Ext:49002 <br>
                                        (999) 9303200 
                                    </span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <span class="nada"></span>
                            <div class="entidad">
                                <div class="f">
                                    <p style="margin-bottom: 0px; color:#0b0f1a !important;" class="Russ">
                                        MTRO. DAVID ALBERTO GAMBOA TELLO
                                        
                                    </p> 
                                </div>
                                <div class="p" style="color:#0b0f1a !important;">
                                    ENCARGADO DE LA UNIDAD ADMINISTRATIVA DE CONTROL DE SERVICIOS DE SEGURIDAD PRIVADA
                                </div>
                                <div class="a" style="color:#0b0f1a !important;">
                                    <span class="Juraligt ">Direccion: <br>
                                        Km. 45 Periférico Poniente, Tablaje Catastral 12648, Polígono Caucel Susulá, Mérida, Yucatán <br>
                                        Teléfono: Ext:49226 <br>
                                        (999) 9303200 
                                    </span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <span class="open">
                                <a id="miboton" >
                                    <button  onclick="openDirectory2()"  class="collapse-button2">
                                        <img id="imagen2" alt="Boton" src="<?php echo BASE_URL; ?>src/images/menos.gif" />
                                    </button>
                                    
                                </a>
                            </span>
                            <div class="entidad">
                                <div class="f">
                                    <p style="margin-bottom: 0px; color:#0b0f1a !important;" class="Russ">
                                        CMDTE. EMILIO FERNANDO ZACARÍAZ LAINES
                                        
                                    </p> 
                                </div>
                                <div class="p" style="color:#0b0f1a !important;">
                                    SUBSECRETARIO DE LA POLICÍA ESTATAL DE CAMINOS PENINSULAR
                                </div>
                                <div class="a">
                                    <span class="Juraligt " style="color:#0b0f1a !important;">Direccion: <br>
                                        Km. 45 Periférico Poniente, Tablaje Catastral 12648, Polígono Caucel Susulá, Mérida, Yucatán <br>
                                        Teléfono: Ext:49006 <br>
                                        (999) 9303200 
                                </div>
                            </div>
                            <!-- aquí va el colapse -->
                            <ul class="collapse-content2">
                                <li>
                                    <span class="nada"></span>
                                    <div class="entidad">
                                        <div class="f">
                                        </div>
                                        <div class="p" style="color:#0b0f1a !important;">
                                            ENCARGADO DE LA DIRECCIÓN DE OPERACIONES DE CENTROS INTEGRALES DE SEGURIDAD PÚBLICA
                                        </div>
                                        <div class="a">
                                            
                                        </div>
                                    </div>
                                </li>
                                <li class="last">
                                    <span class="nada"></span>
                                    <div class="entidad">
                                        <div class="f">
                                            <p style="margin-bottom: 0px; color:#0b0f1a !important;" class="Russ">
                                                CMDTE. CARMEN SANTIAGO MASSA RAMOS
                                                
                                            </p> 
                                            
                                        </div>
                                        <div class="p" style="color:#0b0f1a !important;">DIRECTOR DE LA DIRECCIÓN DE SINIESTROS Y RESCATES </div>
                                        <div class="a">
                                            <span class="Juraligt " style="color:#0b0f1a !important;" >Direccion: <br>
                                                Km. 45 Periférico Poniente, Tablaje Catastral 12648, Polígono Caucel Susulá, Mérida, Yucatán <br>
                                                Teléfono: Ext:49186  <br>
                                                (999) 9303200 
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </li>

                        <li>
                            <span class="open">
                                <a id="miboton" >
                                    <button  onclick="openDirectory3()"  class="collapse-button3">
                                        <img id="imagen3" alt="Boton" src="<?php echo BASE_URL; ?>src/images/menos.gif" />
                                    </button>
                                    
                                </a>
                            </span>
                            <div class="entidad">
                                <div class="f">
                                    <p style="margin-bottom: 0px; color:#0b0f1a !important;" class="Russ">
                                        CMDTE. MARTÍN JAVIER NOLASCO MORALES
                                        
                                    </p> 
                                </div>
                                <div class="p" style="color:#0b0f1a !important;">
                                    ENCARGADO DE LA SUBSECRETARÍA DE SEGURIDAD CIUDADANA
                                </div>
                                <div class="a">
                                    <span class="Juraligt " style="color:#0b0f1a !important;">Direccion: <br>
                                        Km. 45 Periférico Poniente, Tablaje Catastral 12648, Polígono Caucel Susulá, Mérida, Yucatán <br>
                                        Teléfono: Ext:49046 <br>
                                        (999) 9303200 
                                </div>
                            </div>
                            <!-- aquí va el colapse -->
                            <ul class="collapse-content3">
                                <li>
                                    <span class="nada"></span>
                                    <div class="entidad">
                                        <div class="f">
                                            <p style="margin-bottom: 0px; color:#0b0f1a !important;" class="Russ">CMDTE. ÁNGEL ANTONIO TORRES MÉNDEZ
                                                
                                            </p> 
                                        </div>
                                        <div class="p" style="color:#0b0f1a !important;">
                                            DIRECTOR DEL SECTOR NORTE
                                        </div>
                                        <div class="a">
                                            <span class="Juraligt " style="color:#0b0f1a !important;">Direccion: <br>
                                                Km. 45 Periférico Poniente, Tablaje Catastral 12648, Polígono Caucel Susulá, Mérida, Yucatán <br>
                                                
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <span class="nada"></span>
                                    <div class="entidad">
                                        <div class="f">
                                            <p style="margin-bottom: 0px; color:#0b0f1a !important;" class="Russ">
                                                CMDTE. JESÚS ALBERTO KU CHEL
                                                
                                            </p> 
                                        </div>
                                        <div class="p" style="color:#0b0f1a !important;">
                                            DIRECTOR DEL SECTOR PONIENTE
                                        </div>
                                        <div class="a" style="color:#0b0f1a !important;">
                                            <span class="Juraligt " >Direccion: <br>
                                                Km. 45 Periférico Poniente, Tablaje Catastral 12648, Polígono Caucel Susulá, Mérida, Yucatán <br>
                                                
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <span class="nada"></span>
                                    <div class="entidad">
                                        <div class="f">
                                            <p style="margin-bottom: 0px; color:#0b0f1a !important;" class="Russ">
                                                CMDTE. MAGDALENO MANUEL OXTÉ TORRES
                                                
                                            </p> 
                                        </div>
                                        <div class="p" style="color:#0b0f1a !important;">
                                            DIRECTOR DEL SECTOR SUR
                                        </div>
                                        <div class="a" style="color:#0b0f1a !important;">
                                            <span class="Juraligt ">Direccion: <br>
                                                Km. 45 Periférico Poniente, Tablaje Catastral 12648, Polígono Caucel Susulá, Mérida, Yucatán <br>
                                                
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <span class="nada"></span>
                                    <div class="entidad">
                                        <div class="f">
                                            <p style="margin-bottom: 0px; color:#0b0f1a !important;" class="Russ">
                                                CMDTE. JORGE LUIS BACAB CANCAB
                                                
                                            </p> 
                                        </div>
                                        <div class="p" style="color:#0b0f1a !important;">
                                            DIRECTOR DEL SECTOR ORIENTE
                                        </div>
                                        <div class="a">
                                            <span class="Juraligt " style="color:#0b0f1a !important;">Direccion: <br>
                                                Km. 45 Periférico Poniente, Tablaje Catastral 12648, Polígono Caucel Susulá, Mérida, Yucatán <br>
                                                
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <span class="nada"></span>
                                    <div class="entidad">
                                        <div class="f">
                                            <p style="margin-bottom: 0px; color:#0b0f1a !important;" class="Russ">
                                                CMDTE. MIGUEL ÁNGEL SUASTE HUEX
                                                
                                            </p> 
                                        </div>
                                        <div class="p" style="color:#0b0f1a !important;">
                                            DIRECTOR DEL SECTOR CENTRO
                                        </div>
                                        <div class="a">
                                            <span class="Juraligt " style="color:#0b0f1a !important;">Direccion: <br>
                                                Km. 45 Periférico Poniente, Tablaje Catastral 12648, Polígono Caucel Susulá, Mérida, Yucatán <br>
                                                
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li class="last">
                                    <span class="nada"></span>
                                    <div class="entidad">
                                        <div class="f">
                                            <p style="margin-bottom: 0px;color:#0b0f1a !important;" class="Russ">
                                                CMDTE. JOSÉ FRANCISCO CANCHÉ NAAL
                                                
                                            </p> 
                                        </div>
                                        <div class="p" style="color:#0b0f1a !important;">
                                            ENCARGADO DE LA DIRECCIÓN OPERATIVA
                                        </div>
                                        <div class="a">
                                            <span class="Juraligt " style="color:#0b0f1a !important;">Direccion: <br>
                                                Km. 45 Periférico Poniente, Tablaje Catastral 12648, Polígono Caucel Susulá, Mérida, Yucatán <br>
                                                Teléfono: Ext:49036 <br>
                                                (999) 9303200 
                                            </span>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </li>

                        <li>
                            <span class="open">
                                <a id="miboton" >
                                    <button  onclick="openDirectory4()"  class="collapse-button4">
                                        <img id="imagen4" alt="Boton" src="<?php echo BASE_URL; ?>src/images/menos.gif" />
                                    </button>
                                    
                                </a>
                            </span>
                            <div class="entidad">
                                <div class="f">
                                    <p style="margin-bottom: 0px;color:#0b0f1a !important;" class="Russ">
                                        CMDTE. RAFAEL JESÚS CHAIRES CUEVAS
                                        
                                    </p> 
                                </div>
                                <div class="p" style="color:#0b0f1a !important;">
                                    SUBSECRETARIO DE SERVICIOS VIALES
                                </div>
                                <div class="a">
                                    <span class="Juraligt " style="color:#0b0f1a !important;">Direccion: <br>
                                        Km. 45 Periférico Poniente, Tablaje Catastral 12648, Polígono Caucel Susulá, Mérida, Yucatán <br>
                                        Teléfono: Ext:40037 <br>
                                        (999) 9303200 
                                </div>
                            </div>
                            <!-- aquí va el colapse -->
                            <ul class="collapse-content4">
                                <li>
                                    <span class="nada"></span>
                                    <div class="entidad">
                                        <div class="f">
                                            <p style="margin-bottom: 0px; color:#0b0f1a !important;" class="Russ">
                                                CMDTE. JESÚS FELICIANO NOVELO CHAN
                                                
                                            </p> 
                                        </div>
                                        <div class="p" style="color:#0b0f1a !important;">
                                            DIRECTOR DE LA DIRECCIÓN DE VIALIDAD
                                        </div>
                                        <div class="a">
                                            <span class="Juraligt " style="color:#0b0f1a !important;">Direccion: <br>
                                                Km. 45 Periférico Poniente, Tablaje Catastral 12648, Polígono Caucel Susulá, Mérida, Yucatán <br>
                                                Teléfono: Ext:49170 <br>
                                                (999) 9303200 
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <span class="nada"></span>
                                    <div class="entidad">
                                        <div class="f">
                                            <p style="margin-bottom: 0px; color:#0b0f1a !important;" class="Russ">
                                                ING. GERARDO OJEDA SOSA
                                                
                                            </p> 
                                        </div>
                                        <div class="p" style="color:#0b0f1a !important;">
                                            JEFE DE DEPARTAMENTO DE INGENIERÍA DE TRÁNSITO
                                        </div>
                                        <div class="a">
                                            <span class="Juraligt " style="color:#0b0f1a !important;">Direccion: <br>
                                                Km. 45 Periférico Poniente, Tablaje Catastral 12648, Polígono Caucel Susulá, Mérida, Yucatán <br>
                                                Teléfono: Ext:49084 <br>
                                                (999) 9303200 
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li class="last">
                                    <span class="nada"></span>
                                    <div class="entidad">
                                        <div class="f">
                                            <p style="margin-bottom: 0px; color:#0b0f1a !important;" class="Russ">
                                                MTRO. MANUEL ENRIQUE ENCALADA MENA
                                                
                                            </p> 
                                        </div>
                                        <div class="p" style="color:#0b0f1a !important;">
                                            JUEZ DE VIALIDAD
                                        </div>
                                        <div class="a">
                                            <span class="Juraligt " style="color:#0b0f1a !important;">Direccion: <br>
                                                Km. 45 Periférico Poniente, Tablaje Catastral 12648, Polígono Caucel Susulá, Mérida, Yucatán <br>
                                                Teléfono: Ext:49064 <br>
                                                (999) 9303200 
                                            </span>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </li>

                        <li>
                            <span class="open">
                                <a id="miboton" >
                                    <button  onclick="openDirectory5()"  class="collapse-button5">
                                        <img id="imagen5" alt="Boton" src="<?php echo BASE_URL; ?>src/images/menos.gif" />
                                    </button>
                                    
                                </a>
                            </span>
                            <div class="entidad">
                                <div class="f">
                                    <p style="margin-bottom: 0px; color:#0b0f1a !important;" class="Russ">
                                        CMDTE. CARLOS EDUARDO FLORES MOO
                                        
                                    </p> 
                                </div>
                                <div class="p" style="color:#0b0f1a !important;">
                                    SUBSECRETARIO DE LA POLICÍA ESTATAL DE INVESTIGACIÓN
                                </div>
                                <div class="a">
                                    <span class="Juraligt " style="color:#0b0f1a !important;">Direccion: <br>
                                        Km. 45 Periférico Poniente, Tablaje Catastral 12648, Polígono Caucel Susulá, Mérida, Yucatán <br>
                                        Teléfono: Ext:49098 <br>
                                        9303200 
                                </div>
                            </div>
                            <!-- aquí va el colapse -->
                            <ul class="collapse-content5">
                                <li class="last">
                                    <span class="nada"></span>
                                    <div class="entidad">
                                        <div class="f">
                                            <p style="margin-bottom: 0px; color:#0b0f1a !important;" class="Russ">
                                                AGENTE GUADALUPE NATIVIDAD SUASTE CAMELO
                                                
                                            </p> 
                                        </div>
                                        <div class="p" style="color:#0b0f1a !important;">
                                            COORDINADOR GENERAL DE LA POLICÍA ESTATAL DE INVESTIGACIÓN 
                                            ESPECIALIZADA EN LA ESCENA DEL CRIMEN
                                        </div>
                                        <div class="a">
                                            <span class="Juraligt " style="color:#0b0f1a !important;">Direccion: <br>
                                                Km. 45 Periférico Poniente, Tablaje Catastral 12648, Polígono Caucel Susulá, Mérida, Yucatán <br>
                                                Teléfono: Ext:49216 <br>
                                                (999) 9303200 
                                            </span>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </li>

                        <li>
                            <span class="open">
                                <a id="miboton" >
                                    <button  onclick="openDirectory6()"  class="collapse-button6">
                                        <img id="imagen6" alt="Boton" src="<?php echo BASE_URL; ?>src/images/menos.gif" />
                                    </button>
                                    
                                </a>
                            </span>
                            <div class="entidad">
                                <div class="f">
                                    <p style="margin-bottom: 0px; color:#0b0f1a !important;" class="Russ">
                                        LIC. LUIS ALBERTO PINZÓN SARABIA
                                        
                                    </p> 
                                </div>
                                <div class="p" style="color:#0b0f1a !important;">
                                    DIRECTOR GENERAL DE LA DIRECCIÓN GENERAL DE ADMINISTRACIÓN
                                </div>
                                <div class="a">
                                    <span class="Juraligt " style="color:#0b0f1a !important;">Direccion: <br>
                                        Km. 45 Periférico Poniente, Tablaje Catastral 12648, Polígono Caucel Susulá, Mérida, Yucatán <br>
                                        Teléfono: Ext:49050 <br>
                                        9303200 
                                </div>
                            </div>
                            <!-- aquí va el colapse -->
                            <ul class="collapse-content6">
                                <li>
                                    <span class="nada"></span>
                                    <div class="entidad">
                                        <div class="f">
                                            <p style="margin-bottom: 0px; color:#0b0f1a !important;" class="Russ">
                                                ING. EDUARDO CASO VÁZQUEZ
                                            </p> 
                                        </div>
                                        <div class="p" style="color:#0b0f1a !important;">
                                            COORDINADOR GENERAL DEL DEPARTAMENTO DE MANTENIMIENTO VEHICULAR
                                        </div>
                                        <div class="a">
                                            <span class="Juraligt " style="color:#0b0f1a !important;">Direccion: <br>
                                                Km. 45 Periférico Poniente, Tablaje Catastral 12648, Polígono Caucel Susulá, Mérida, Yucatán <br>
                                                Teléfono: Ext:49234 <br>
                                                (999) 9303200 
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <span class="nada"></span>
                                    <div class="entidad">
                                        <div class="f">
                                            <p style="margin-bottom: 0px; color:#0b0f1a !important;" class="Russ">
                                                C. BEATRIZ EUGENIA GÚZMAN GONZÁLEZ
                                                
                                            </p> 
                                        </div>
                                        <div class="p" style="color:#0b0f1a !important;">
                                            JEFE DEL DEPARTAMENTO ADMINISTRATIVO
                                        </div>
                                        <div class="a">
                                            <span class="Juraligt " style="color:#0b0f1a !important;">Direccion: <br>
                                                Km. 45 Periférico Poniente, Tablaje Catastral 12648, Polígono Caucel Susulá, Mérida, Yucatán <br>
                                                Teléfono: Ext:49120 <br>
                                                (999) 9303200 
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <span class="nada"></span>
                                    <div class="entidad">
                                        <div class="f">
                                            <p style="margin-bottom: 0px; color:#0b0f1a !important;" class="Russ">
                                                LIC. JIMEL JOSÉ CABRERA BAQUEIRO
                                                
                                            </p> 
                                        </div>
                                        <div class="p" style="color:#0b0f1a !important;">
                                            JEFE DEL DEPARTAMENTO DE SISTEMAS Y PROCEDIMIENTOS DE CONTROL
                                        </div>
                                        <div class="a">
                                            <span class="Juraligt "style="color:#0b0f1a !important;">Direccion: <br>
                                                Km. 45 Periférico Poniente, Tablaje Catastral 12648, Polígono Caucel Susulá, Mérida, Yucatán <br>
                                                Teléfono: Ext:49015 <br>
                                                (999) 9303200 
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <span class="nada"></span>
                                    <div class="entidad">
                                        <div class="f">
                                            <p style="margin-bottom: 0px; color:#0b0f1a !important;" class="Russ">
                                                LIC. CINTHIA GUADALUPE BELTRAN CARDOZO
                                                
                                            </p> 
                                        </div>
                                        <div class="p" style="color:#0b0f1a !important;">
                                            JEFE DEL DEPARTAMENTO DE RECURSOS HUMANOS
                                        </div>
                                        <div class="a" >
                                            <span class="Juraligt " style="color:#0b0f1a !important;">Direccion: <br>
                                                Km. 45 Periférico Poniente, Tablaje Catastral 12648, Polígono Caucel Susulá, Mérida, Yucatán <br>
                                                Teléfono: Ext:49066 <br>
                                                (999) 9303200 
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <span class="nada"></span>
                                    <div class="entidad">
                                        <div class="f">
                                            <p style="margin-bottom: 0px; color:#0b0f1a !important;" class="Russ">
                                                CMDTE. CARLOS RICARDO MARSH IBARRA
                                                
                                            </p> 
                                        </div>
                                        <div class="p" style="color:#0b0f1a !important;">
                                            JEFE DEL DEPARTAMENTO DE REGISTRO Y CONTROL VEHICULAR
                                        </div>
                                        <div class="a">
                                            <span class="Juraligt " style="color:#0b0f1a !important;">Direccion: <br>
                                                Km. 45 Periférico Poniente, Tablaje Catastral 12648, Polígono Caucel Susulá, Mérida, Yucatán <br>
                                                Teléfono: Ext:40501 <br>
                                                (999) 9303200 
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <span class="nada"></span>
                                    <div class="entidad">
                                        <div class="f">
                                            <p style="margin-bottom: 0px;color:#0b0f1a !important;" class="Russ">
                                                C. MIGUEL GENARO GONZALEZ ESCALANTE
                                                
                                            </p> 
                                        </div>
                                        <div class="p" style="color:#0b0f1a !important;">
                                            JEFE DEL DEPARTAMENTO DE SERVICIOS GENERALES
                                        </div>
                                        <div class="a">
                                            <span class="Juraligt " style="color:#0b0f1a !important;">Direccion: <br>
                                                Km. 45 Periférico Poniente, Tablaje Catastral 12648, Polígono Caucel Susulá, Mérida, Yucatán <br>
                                                Teléfono: Ext:49043 <br>
                                                (999) 9303200 
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <span class="nada"></span>
                                    <div class="entidad">
                                        <div class="f">
                                            <p style="margin-bottom: 0px; color:#0b0f1a !important;" class="Russ">
                                                C. JOSÉ HUMBERTO DURÁN CITUK
                                                
                                            </p> 
                                        </div>
                                        <div class="p" style="color:#0b0f1a !important;">
                                            JEFE DEL DEPARTAMENTO DE CONTROL PRESUPUESTAL
                                        </div>
                                        <div class="a">
                                            <span class="Juraligt " style="color:#0b0f1a !important;">Direccion: <br>
                                                Km. 45 Periférico Poniente, Tablaje Catastral 12648, Polígono Caucel Susulá, Mérida, Yucatán <br>
                                                Teléfono: Ext:49118 <br>
                                                (999) 9303200 
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <span class="nada"></span>
                                    <div class="entidad">
                                        <div class="f">
                                            <p style="margin-bottom: 0px; color:#0b0f1a !important;" class="Russ">
                                                LIC. LIZZET GABRIELA CERÓN ALBORNOZ
                                                
                                            </p> 
                                        </div>
                                        <div class="p" style="color:#0b0f1a !important;">
                                            JEFE DE DEPARTAMENTO DE DEPÓSITO DE VEHÍCULOS
                                        </div>
                                        <div class="a">
                                            <span class="Juraligt " style="color:#0b0f1a !important;">Direccion: <br>
                                                Km. 45 Periférico Poniente, Tablaje Catastral 12648, Polígono Caucel Susulá, Mérida, Yucatán <br>
                                                Teléfono: Ext:49398 <br>
                                                (999) 9303200 
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <span class="nada"></span>
                                    <div class="entidad">
                                        <div class="f">
                                            <p style="margin-bottom: 0px; color:#0b0f1a !important;" class="Russ">
                                                LIC. ABRIL ALEJANDRA PUERTO LLANES
                                                
                                            </p> 
                                        </div>
                                        <div class="p" style="color:#0b0f1a !important;">
                                            JEFE DE DEPARTAMENTO DE ALMACÉN Y ACTIVO FIJO
                                        </div>
                                        <div class="a">
                                            <span class="Juraligt " style="color:#0b0f1a !important;">Direccion: <br>
                                                Km. 45 Periférico Poniente, Tablaje Catastral 12648, Polígono Caucel Susulá, Mérida, Yucatán <br>
                                                Teléfono: Ext:49137 <br>
                                                (999) 9303200 
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <span class="nada"></span>
                                    <div class="entidad">
                                        <div class="f">
                                            <p style="margin-bottom: 0px; color:#0b0f1a !important;" class="Russ">
                                                MTRA. RILMA EUNICE CRUZ REYES
                                                
                                            </p> 
                                        </div>
                                        <div class="p" style="color:#0b0f1a !important;">
                                            ENCARGADA DEL DEPARTAMENTO DE SERVICIOS MÉDICOS
                                        </div>
                                        <div class="a">
                                            <span class="Juraligt " style="color:#0b0f1a !important;">Direccion: <br>
                                                Km. 45 Periférico Poniente, Tablaje Catastral 12648, Polígono Caucel Susulá, Mérida, Yucatán <br>
                                                Teléfono: Ext:49044 <br>
                                                (999) 9303200 
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <span class="nada"></span>
                                    <div class="entidad">
                                        <div class="f">
                                            <p style="margin-bottom: 0px; color:#0b0f1a !important;" class="Russ">
                                                MTRA. ALICIA ANAÍS PUERTO PADILLA
                                                
                                            </p> 
                                        </div>
                                        <div class="p" style="color:#0b0f1a !important;">
                                            JEFE DE DEPARTAMENTO DE COMPRAS
                                        </div>
                                        <div class="a">
                                            <span class="Juraligt " style="color:#0b0f1a !important;">Direccion: <br>
                                                Km. 45 Periférico Poniente, Tablaje Catastral 12648, Polígono Caucel Susulá, Mérida, Yucatán <br>
                                                Teléfono: Ext:49021 <br>
                                                (999) 9303200 
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li class="last">
                                    <span class="nada"></span>
                                    <div class="entidad">
                                        <div class="f">
                                            <p style="margin-bottom: 0px; color:#0b0f1a !important;" class="Russ">
                                                MGTI. CARLOS MANUEL CELIS REYNA
                                                
                                            </p> 
                                        </div>
                                        <div class="p" style="color:#0b0f1a !important;">
                                            JEFE DE DEPARTAMENTO DE TECNOLOGÍAS DE LA INFORMACIÓN
                                        </div>
                                        <div class="a">
                                            <span class="Juraligt " style="color:#0b0f1a !important;">Direccion: <br>
                                                Km. 45 Periférico Poniente, Tablaje Catastral 12648, Polígono Caucel Susulá, Mérida, Yucatán <br>
                                                Teléfono: Ext:49216 <br>
                                                (999) 9303200 
                                            </span>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </li>

                        <li>
                            <span class="nada"></span>
                            <div class="entidad">
                                <div class="f">
                                    <p style="margin-bottom: 0px;color:#0b0f1a !important;" class="Russ">
                                        MTRO. CARLOS MARTÍN PACHECO MEDINA
                                        
                                    </p> 
                                </div>
                                <div class="p" style="color:#0b0f1a !important;">
                                    SECRETARIO EJECUTIVO DEL SISTEMA ESTATAL DE SEGURIDAD PÚBLICA
                                </div>
                                <div class="a">
                                    <span class="Juraligt " style="color:#0b0f1a !important;">Direccion: <br>
                                        Km. 45 Periférico Poniente, Tablaje Catastral 12648, Polígono Caucel Susulá, Mérida, Yucatán <br>
                                        Teléfono: Ext:49520 <br>
                                        (999) 9303200 
                                    </span>
                                </div>
                            </div>
                        </li>

                        <li>
                            <span class="nada"></span>
                            <div class="entidad">
                                <div class="f">
                                    <p style="margin-bottom: 0px; color:#0b0f1a !important;" class="Russ">
                                        CMDTE. MARTÍN DE JESÚS INURRETA DOMÍNGUEZ
                                        
                                    </p> 
                                </div>
                                <div class="p" style="color:#0b0f1a !important;">
                                    DIRECTOR DEL INSTITUTO DE CAPACITACIÓN DE LAS CORPORACIONES DE 
                                        SEGURIDAD PÚBLICA
                                </div>
                                <div class="a">
                                    <span class="Juraligt " style="color:#0b0f1a !important;">Direccion: <br>
                                        Km. 45 Periférico Poniente, Tablaje Catastral 12648, Polígono Caucel Susulá, Mérida, Yucatán <br>
                                        
                                    </span>
                                </div>
                            </div>
                        </li>

                        <li>
                            <span class="nada"></span>
                            <div class="entidad">
                                <div class="f">
                                    <p style="margin-bottom: 0px; color:#0b0f1a !important;" class="Russ">
                                        LIC. MARITZA ANDREA CANUL CASTRO
                                        
                                    </p> 
                                </div>
                                <div class="p" style="color:#0b0f1a !important;">
                                    COORDINADOR GENERAL DEL CENTRO ESTATAL DE SUPERVISIÓN DE 
                                        MEDIDAS CAUTELARES Y DE LA SUSPENSIÓN CONDICIONAL DEL PROCESO
                                </div>
                                <div class="a">
                                    <span class="Juraligt " style="color:#0b0f1a !important;">Direccion: <br>
                                        Km. 45 Periférico Poniente, Tablaje Catastral 12648, Polígono Caucel Susulá, Mérida, Yucatán <br>
                                        Teléfono: Ext:49095 <br>
                                        (999) 9303200 
                                    </span>
                                </div>
                            </div>
                        </li>

                        <li>
                            <span class="nada"></span>
                            <div class="entidad">
                                <div class="f">
                                    <p style="margin-bottom: 0px; color:#0b0f1a !important;" class="Russ">
                                        MTRO. CÉSAR MARIANO GUZMÁN MADRUEÑO
                                        
                                    </p> 
                                </div>
                                <div class="p" style="color:#0b0f1a !important;">
                                    DIRECTOR DEL CENTRO ESTATAL DE INFORMACIÓN SOBRE SEGURIDAD PÚBLICA
                                </div>
                                <div class="a">
                                    <span class="Juraligt " style="color:#0b0f1a !important;">Direccion: <br>
                                        Km. 45 Periférico Poniente, Tablaje Catastral 12648, Polígono Caucel Susulá, Mérida, Yucatán <br>
                                        Teléfono: Ext:12500 <br>
                                        (999) 9303200 
                                    </span>
                                </div>
                            </div>
                        </li>

                        <li class="last">
                            <span class="nada"></span>
                            <div class="entidad">
                                <div class="f">
                                    <p style="margin-bottom: 0px; color:#0b0f1a !important;" class="Russ">
                                        LIC. JULIA ROSSANA COBOS MENA
                                        
                                    </p> 
                                </div>
                                <div class="p" style="color:#0b0f1a !important;">
                                    DIRECTOR DEL CENTRO ESTATAL DE EVALUACIÓN Y CONTROL DE CONFIANZA
                                </div>
                                <div class="a">
                                    <span class="Juraligt " style="color:#0b0f1a !important;">Direccion: <br>
                                        Km. 45 Periférico Poniente, Tablaje Catastral 12648, Polígono Caucel Susulá, Mérida, Yucatán <br>
                                        Teléfono: Ext:10700 <br>
                                        (999) 9303200 
                                    </span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <br><br><br>
            </ul>
        </div>
    </section>
</main>

<script type="text/javascript">
    function openDirectory(){
        var image = document.getElementById('imagen');
        const content = document.querySelector('.collapse-content');
        

        if (image.src.match("<?php echo BASE_URL; ?>src/images/menos.gif")) {
            image.src = "<?php echo BASE_URL; ?>src/images/mas.gif";
            
            

            content.classList.toggle('show');
            
            
            
        }else{
            image.src = "<?php echo BASE_URL; ?>src/images/menos.gif";
            content.classList.toggle('show');
            // content.classList.toggle('show');
            
        }
    }

    function openDirectory2(){
        var image2 = document.getElementById('imagen2');
        const content2 = document.querySelector('.collapse-content2');
        

        if (image2.src.match("<?php echo BASE_URL; ?>src/images/menos.gif")) {
            image2.src = "<?php echo BASE_URL; ?>src/images/mas.gif";
            
            

            content2.classList.toggle('show');
            
            
            
        }else{
            image2.src = "/src/images/menos.gif";
            content2.classList.toggle('show');
            // content.classList.toggle('show');
            
        }
    }

    function openDirectory3(){
        var image3 = document.getElementById('imagen3');
        const content3 = document.querySelector('.collapse-content3');
        

        if (image3.src.match("/src/images/menos.gif")) {
            image3.src = "/src/images/mas.gif";
            
            

            content3.classList.toggle('show');
            
            
            
        }else{
            image3.src = "/src/images/menos.gif";
            content3.classList.toggle('show');
            // content.classList.toggle('show');
            
        }
    }

    function openDirectory4(){
        var image4 = document.getElementById('imagen4');
        const content4 = document.querySelector('.collapse-content4');
        

        if (image4.src.match("/src/images/menos.gif")) {
            image4.src = "/src/images/mas.gif";
            
            

            content4.classList.toggle('show');
            
            
            
        }else{
            image4.src = "/src/images/menos.gif";
            content4.classList.toggle('show');
            // content.classList.toggle('show');
            
        }
    }

    function openDirectory5(){
        var image5 = document.getElementById('imagen5');
        const content5 = document.querySelector('.collapse-content5');
        

        if (image5.src.match("/src/images/menos.gif")) {
            image5.src = "/src/images/mas.gif";
            
            

            content5.classList.toggle('show');
            
            
            
        }else{
            image5.src = "/src/images/menos.gif";
            content5.classList.toggle('show');
            // content.classList.toggle('show');
            
        }
    }

    function openDirectory6(){
        var image6 = document.getElementById('imagen6');
        const content6 = document.querySelector('.collapse-content6');
        

        if (image6.src.match("/src/images/menos.gif")) {
            image6.src = "/src/images/mas.gif";
            
            

            content6.classList.toggle('show');
            
            
            
        }else{
            image6.src = "/src/images/menos.gif";
            content6.classList.toggle('show');
            // content.classList.toggle('show');
            
        }
    }


    

</script>

<?php
    include_once(ROOT_PATH . 'footer.php');
?>
