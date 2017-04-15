<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'ukeyslog');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'root');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '74G61dD]RY3{wDSm:K:DW4>mly}/s%lW|Gi@$5lXak1n2>1Q:l <fsz2QLIVNVHV');
define('SECURE_AUTH_KEY',  'PXZ>Bvt|x^ ,7O0f}W_ny&VL1yW&z#aJn__(>zpI;@Xt?RPeTC/&B84(AXm{&DVX');
define('LOGGED_IN_KEY',    'AlU;.bxO*GK&UtT]je_z[kA(dVUGsiH~RmM q]lK~g}_oDFA#|s)vJ3l~ltHC%M5');
define('NONCE_KEY',        ')n>U9jMp_T~vrx%8j:`yCgc#T:5C)uyD_:-}}}h7`grXnZ]9;yb`Y4y2,{WZWa!T');
define('AUTH_SALT',        '.:sVAv]8uGOvt%+(#ywLgR8L92c}JT8:_i0E)N^8Hl(N2W&opcUI%.X pV: uu.y');
define('SECURE_AUTH_SALT', '8~}(*=$I2:YP~|HHkg_E{^:3wn<,yYSGLq4c(ky?M8[!-!sTI)|b)GH6|&P|[D+E');
define('LOGGED_IN_SALT',   'palBT8k5FqK1G&_1V0WN5]bRPZOU!i&D]9LaKBVbHcEO50Xwf`F^sj,t%r r$lT/');
define('NONCE_SALT',       '*xtl*yT=XML)C4E3tkSuehrA*Ri/Wf>}n^!5&aTY5R#rT@}yf*w^64>%2zCQUY=E');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'ul_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
