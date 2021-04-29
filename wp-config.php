<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'hbr-engenharia' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'J3Z`Yk9 ;R/wi_ht4E-cqri``=7xDK%-;@D=i43Aq&Bos! F_Itq[*yz:M;$^rs*' );
define( 'SECURE_AUTH_KEY',  'm^6&tFbUR5OOoOi!oo?YP5@K2xC%yM{lv,GmxBfr`:9,toY27>,5cd_J.`I1!P}z' );
define( 'LOGGED_IN_KEY',    'lvPwgGTZP6G sL/T;+E&w)ub:wQbAxle:T&k`_7CyBwGc:m`Ht>FjLRsO7[U&Qjs' );
define( 'NONCE_KEY',        'gq=6mFA+n^<}@Ic7kDoK*^xlV*lFS-/kO3q0z5dSyB32I<!|+lw?;fI)&d577hzb' );
define( 'AUTH_SALT',        'L!.y|;CaOIV}[9J:)vX`]u7-_lDQE)p$}8o#(k^R;#cHpQ,lNQg1n6a=Gn~SVd %' );
define( 'SECURE_AUTH_SALT', 'ID[nCPz;^+rPV+9;.0]yv$Ke~lnFR%}{Kf5YP$L/gtq}.}ag/U`4;?tAKNP>|9Y[' );
define( 'LOGGED_IN_SALT',   '0N}6u,(AF/e!p=WD7!rK4M$5?1=&]~F#T/$5qjexIrk`/tSu>hS9d%E&-ex|AJJ]' );
define( 'NONCE_SALT',       'aN bRaYNec/EbOZ#M,6<YoB93=(:020,/x$8>Dqma!sTs<^9[)Scg&Os^)&l2ytm' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
