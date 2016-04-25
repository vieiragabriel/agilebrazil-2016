<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'ea_wordpress');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '123');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'QPt-a|={jjn es+z9i[;ApwG&`W%61w&Sk0-IJ!<6{W~Y30:tKp c`vETfX3>hE!');
define('SECURE_AUTH_KEY',  'W{YAp*c74o,RU|EDj>4DU#+`-(Q9!4mP+5G-81SufMb+yRh&mU:k @g6Jy5.@Gu5');
define('LOGGED_IN_KEY',    '6JCOrlE.|y>o Xl&,%^+G{{oJRboyC<rQYde81B:4T:&_t.#z)K&O-}TlDH&P|:H');
define('NONCE_KEY',        'K(a*nO?yWEQJ)0/N|PV+W=WOo)II~%Y~mL~W;]_6Ms}dqsQ[z1EV=~4u&S!ip~aP');
define('AUTH_SALT',        '4?E4jS62~a#;5!}4T-=:*S BsxILj&u7Qw6qd.0z^bPD6MNcY6^S;2rq>j3*A1Ix');
define('SECURE_AUTH_SALT', 'FlABY LI=]}:Vv_(e`:aOn>U2qmi_`Y|cg:@Jtqh45q1/rCj[jI0+=jr{|[iDgc)');
define('LOGGED_IN_SALT',   'A=>6B_H(Fg9![V%Z)%,r0LY%kc-kwG(wa@ S1V|>a4i!vbupi_6LZ[<l/B^XjR$ ');
define('NONCE_SALT',       ' #<Ag#CS9XU8|%FWjyTM#ENa/:l)fp&e##J_V>%P5r8uD7LJDax$l&oTl|fuPQfP');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'ab2016_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
