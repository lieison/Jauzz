<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'wp_jauzz');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', ';F+h:{-?N+hkhkU1E =vPps;Y O6dW<QcdknAx!8/-{<6IifoSHB]@!{}0#,mB0o');
define('SECURE_AUTH_KEY', '_C;JdCTMwi0l=FIiqUYBxC)JI0dNFz8RKz(eUi&D9Mra`!i /b$Xs@+R3L0jg}>I');
define('LOGGED_IN_KEY', '%+i%/c-190S%NJCL&1+K0!N-5.8=%B^4n9;INn(PDe$2>+hgIwJQ,N-`u4JXXV4S');
define('NONCE_KEY', 'D;:VJ2FLF:QNfynsLU}5dj+Imq|Q![R>)C@902E;.aLmQU[=o`98JhyQ<xGH@p-Z');
define('AUTH_SALT', '-|kM&hU2^;Tq?QN:<|o|jq=ukXlJ <8}KZCi8/&WI6SVZZ`GL-#*e-`/ps%^c(vP');
define('SECURE_AUTH_SALT', '+kN~cy{)@~9v#u*-^kkl@.Wb-[gu|c gug=^|i|uZR9nKD.?yZ#U8?o#pMoh|0<l');
define('LOGGED_IN_SALT', 'xr~+7f5LzFubgZ#x=K5HrpYD)sJFHco+Tmzwl|;KJYISSq wanuzmJg-*@llAcD%');
define('NONCE_SALT', 'UKc]m<B:-A!%N(:y6wmKP)q=!9yTe8S+o]1p&W]z8*$Qxb;9;;%Di6qGG#^H~Aw<');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

