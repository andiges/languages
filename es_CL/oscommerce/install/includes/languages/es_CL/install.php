<?php
/*
  $Id: $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2006 osCommerce

  Released under the GNU General Public License
*/

page_title_installation = Nueva Instalaci�n

page_heading_step_1 = Servidor de Base de Datos
page_heading_step_2 = Servidor Web
page_heading_step_3 = Configurar Tienda
page_heading_step_4 = �Terminado!

text_installation = <p>Esta instalaci�n web-basada va a correctamente instalar y configurar el osCommerce para funcionar en este servidor.</p><p>Por favor sigua las instrucciones en la pantalla que le tomar�n con el servidor de la base de datos, el servidor web, y las configuraones de la tienda. Si necesita ayuda en cualquier etapa, por favor consultar la documentaci�n o buscar la ayuda en los foros de la comunidad.</p>
text_successful_installation = �La instalaci�n y configuraci�n fueron con exito!

param_database_server = Servidor de Base de Datos
param_database_server_description = La direcci�n del servidor de la base de datos bajo la forma de nombre de anfitri�n o direcci�n IP.
param_database_username = Nombre de usuario
param_database_username_description = El nombre de usuario para conectar con el servidor de la base de datos.
param_database_password = Contrase�a
param_database_password_description = La contrase�a que se usa junto con el nombre de usuario para conectar con el servidor de la base de datos.
param_database_name = Nombre de la Base de Datos
param_database_name_description = El nombre de la base de datos para guardar los datos.
param_database_type = Tipo de Base de Datos
param_database_type_description = El tipo de software de la base de datos.
param_database_prefix = Prefijo de la Tabla de Base de Datos
param_database_prefix_description = El prefijo para usar las tablas de la base de datos.

param_database_import_sample_data = Importar Datos de Muestra
param_database_import_sample_data_description = Poner los datos de muestra en la base de datos se recomienda para las instalaciones de la primera vez.

param_web_address = Direcci�n WWW
param_web_address_description = La direcci�n web a la tienda.
param_web_root_directory = Directorio Ra�z del Servidor Web
param_web_root_directory_description = El directorio donde la tienda est� instalada en el servidor.
param_web_work_directory = Directorio de Trabajo
param_web_work_directory_description = El directorio para los archivos temporalmente creados. Este directorio se debe situar fuera del directorio de ra�z p�blica del servidor web por razones de seguridad. (Los servidores compartidos no se deben usar /tmp/)

param_store_name = Nombre de la Tienda
param_store_name_description = El nombre de la tienda que se presenta al p�blico.
param_store_owner_name = Nombre del Due�o de la Tienda
param_store_owner_name_description = Nombre del due�o de la tienda que se presenta al p�blico.
param_store_owner_email_address = Direcci�n E-Mail del Due�o de la Tienda
param_store_owner_email_address_description = La direcci�n e-mail del due�o de la tienda que se presenta al p�blico.
param_administrator_username = Nombre del Administrador
param_administrator_username_description = El nombre de usuario del administrador para usar en la herramienta de la administraci�n.
param_administrator_password = Contrase�a del Administrador
param_administrator_password_description = La contrase�a para ingresar la cuenta del administrador.

box_steps_step_1 = Servidor de Base de Datos
box_steps_step_2 = Servidor Web
box_steps_step_3 = Configurar Tienda
box_steps_step_4 = �Terminado!

box_info_step_1_title = Paso 1: Servidor de Base de Datos
box_info_step_1_text = <p>El servidor de la base de datos guardar� el contenido de la tienda tal como informaci�n de producto, informaci�n del cliente, y los pedidos que han sido hechos.</p><p>Por favor consultar a su administrador del servidor si sus par�metros del servidor de la base de datos todav�a no lo sabe.</p>

box_info_step_2_title = Paso 2: Servidor Web
box_info_step_2_text = <p>El servidor web cuida el servir las p�ginas de la tienda de los visitantes y los clientes. Los par�metros del servidor web se cerciorar� de que los links a las p�ginas se�alen a los archivos de correctas locaziones.</p><p>Archivos temporarios como datos de la sesi�n y los archivos del cache est� link en el directorio del trabajo. Es importante que este directorio este situado fuera del directorio de ra�z del servidor web y protegido contra el acceso p�blico.</p>

box_info_step_3_title = Paso 3: Configurar Tienda
box_info_step_3_text = <p>Aqu� puedes definir el nombre de su tienda, y la informaci�n del contacto para el nombre de usuario del administrador del due�o de la tienda.</p><p>El nombre de usuario y la contrase�a del administrador se usa para ingresar en la secci�n protegida de la herramienta de la administraci�n.</p>

box_info_step_4_title = Paso 4: �Terminado!
box_info_step_4_text = <p>�Felicitaciones por la instalaci�n y configuraci�n de osCommerce como su soluci�n de la tienda!</p><p>Le deseamos lo mejor con su tienda y le damos la bienvenida para ensamblar y participar en nuestra comunidad.</p><p align="right">- El Equipo del osCommerce</p>

error_configuration_file_not_writeable = <p>El servidor web no pudo escribir los par�metros de la tienda a su archivo de la configuraci�n debido a los problemas del permiso del archivo.</p><p>Por favor verificar los permisos del archivo de la configuraci�n de permitir que el servidor web le escriba, y haga click en el archivo de la configuraci�n del bot�n de abajo.</p><p>El archivo de la configuraci�n se localiza en:</p><p>%s</p>
error_configuration_file_alternate_method = <p>Puede copiar y guardar alternativamente el contenido del box de texto abajo al archivo de la configuraci�n a mano.</p>

rpc_database_connection_test = Probando la conexi�n de la base de datos..
rpc_database_connection_error = Hab�a un problema que conectaba con el servidor de la base de datos. El error siguiente hab�a ocurrido:</p><p><b>%s</b></p><p>Por favor verificar los par�metros de la conexi�n y intente otra vez.
rpc_database_connected = Conectado con �xito con la base de datos.
rpc_database_importing = La estructura de la base de datos ahora se est� importando. Por favor sea paciente durante este procedimiento.
rpc_database_imported = La base de datos sea importado con �xito.
rpc_database_import_error = Hab�a un problema que importaba la base de datos. El error siguiente hab�a ocurrido:</p><p><b>%s</b></p><p>Por favor verificar los par�metros de la conexi�n y intente otra vez.

rpc_work_directory_test = Probando el directorio de trabajo..
rpc_work_directory_error_non_existent = Hab�a un problema de acceso al directorio de trabajo. El error siguiente hab�a ocurrido:<br /><br /><b>El directorio no existe:<br /><br />%s</b><br /><br />Por favor verificar el directorio y intente otra vez.
rpc_work_directory_error_not_writeable = Hab�a un problema de acceso al directorio de trabajo. El error siguiente hab�a ocurrido:<br /><br /><b>El servidor web no tiene permisos para escribir al directorio:<br /><br />%s</b><br /><br />Por favor verificar los permisos del directorio y intente otra vez.
rpc_work_directory_configured = El directorio de trabajo se configur� con �xito.

rpc_database_sample_data_importing = Los datos de muestra ahora ya se est�n importando en la base de datos. Por favor sea paciente durante este procedimiento.
rpc_database_sample_data_imported = Los datos de muestra de la base de datos importaron con �xito.
rpc_database_sample_data_import_error = Hab�a un problema que importaba los datos de muestra de la base de datos. El error siguiente hab�a ocurrido:</p><p><b>%s</b></p><p>Por favor verificar el servidor de la base de datos y intente otra vez.
?>