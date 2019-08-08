<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via
 * web, è anche possibile copiare questo file in «wp-config.php» e
 * riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni MySQL
 * * Prefisso Tabella
 * * Chiavi Segrete
 * * ABSPATH
 *
 * È possibile trovare ultetriori informazioni visitando la pagina del Codex:
 *
 * @link https://codex.wordpress.org/it:Modificare_wp-config.php
 *
 * È possibile ottenere le impostazioni per MySQL dal proprio fornitore di hosting.
 *
 * @package WordPress
 */

// ** Impostazioni MySQL - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'filecrda_db' );

/** Nome utente del database MySQL */
define( 'DB_USER', 'root' );

/** Password del database MySQL */
define( 'DB_PASSWORD', '' );

/** Hostname MySQL  */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di Collazione del Database. Da non modificare se non si ha idea di cosa sia. */
define('DB_COLLATE', '');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '|B><nEiQDRfg|Jf{gwfe>j%3=H7?k;=fi|F/@6RT.rM[IH]cf}5&j5X;f0y#(l1b' );
define( 'SECURE_AUTH_KEY',  'ps:!-p?pGA~GZn*n^oVh{Ap#l7t.ZL-xg!a*<;7ylp[yC{4}GY)-5hN)?4K~*0 -' );
define( 'LOGGED_IN_KEY',    ')][J$#w9YfR 8bo}P=,>>#1ZoSh*Ya2GCtm&_~t:7J>$BulDU+8]QE}}z?}tRt!}' );
define( 'NONCE_KEY',        'J<4m9eD&p0>w`O#l-[r{_.2D7#Nvs E5%3DleVYu/7z`I1TPQdO%U[A!4Qzi.Ior' );
define( 'AUTH_SALT',        'G3&JOjh?](f{ NMpIOP{o>Hr[z[@`K&W.vIu?WchCY0YYANNgJVeub)-2,>k?/`7' );
define( 'SECURE_AUTH_SALT', '!S+_QY[KfXt9j{-_3UU0Ry0;BnFZ3;!3mOfw =uO=17(y<iMvq$,1vHB8_,2?3p)' );
define( 'LOGGED_IN_SALT',   '>?d2^5WxjW(IFUdZ^s:(9rv RWGR@4G@F-Hiwd[ncc a4Ao^;n#Yt}<:+vI#7mXG' );
define( 'NONCE_SALT',       'GTF>1-~h!~zB4|AuU@j^NlczoC pIHeO.PvXn#=DxFL2Ff===`dhBeI6r4+yiKQ=' );

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi
 * durante lo sviluppo.
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 */
define('WP_DEBUG', false);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');
