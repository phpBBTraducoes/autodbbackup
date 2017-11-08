<?php
/**
*
* @package Auto db Backup (3.2)
* @copyright (c) 2015 david63
* @license GNU General Public License, version 2 (GPL-2.0)
* Brazilian Portuguese translation by eunaumtenhoid (c) 2017 [ver 2.1.0-rc2] (https://github.com/phpBBTraducoes)
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'AUTO_DB_BACKUP_COPIES'				=> 'Backups armazenados',
	'AUTO_DB_BACKUP_COPIES_EXPLAIN'		=> 'O número de backups que serão armazenados no servidor.<br /> 0 significa desabilitado e todos os backups serão armazenados no servidor.',
	'AUTO_DB_BACKUP_ENABLE'				=> 'Ativar backup de banco de dados automático',
	'AUTO_DB_BACKUP_ENABLE_EXPLAIN'		=> 'Ativar ou desativar Auto Database Backup',
	'AUTO_DB_BACKUP_FILETYPE'			=> 'Tipo de arquivo',
	'AUTO_DB_BACKUP_FILETYPE_EXPLAIN'	=> 'Escolha o tipo de arquivo para backups.',
	'AUTO_DB_BACKUP_FREQ'				=> 'Frequência de backup',
	'AUTO_DB_BACKUP_FREQ_EXPLAIN'		=> 'Defina a frequência de backup em horas.',
	'AUTO_DB_BACKUP_OPTIMIZE'			=> 'Otimize o banco de dados antes de executar o backup',
	'AUTO_DB_BACKUP_OPTIMIZE_EXPLAIN'	=> 'Otimize apenas tabelas de banco de dados não optimizadas antes de fazer o backup.',
	'AUTO_DB_BACKUP_SETTINGS'			=> 'Configurações do Auto database backup',
	'AUTO_DB_BACKUP_SETTINGS_CHANGED'	=> 'Configurações do Auto database backup alteradas.',
	'AUTO_DB_BACKUP_SETTINGS_EXPLAIN'	=> 'Aqui você pode configurar as configurações padrão para o Auto database backup. Dependendo da configuração do seu servidor, você pode comprimir o banco de dados.<br /> Todos os backups serão armazenados na pasta <samp>/store/</ samp>.Você pode restaurar o backup através do painel <em>Restaurar</em>.',
	'AUTO_DB_BACKUP_TIME'				=> 'Próximo tempo de backup',
	'AUTO_DB_BACKUP_TIME_ERROR'			=> 'O <strong>próximo tempo de backup</strong> está incorreto. O tempo deve ser definido no futuro.',
	'AUTO_DB_BACKUP_TIME_EXPLAIN'		=> 'O tempo em que o próximo backup do banco de dados deve ser feito.<br /><strong>Nota:</strong> A data/hora especificada deve ser no futuro.',

	'DATE_TIME_ERROR'					=> 'A <strong>próxima data de backup</strong> é inválida.',

	'HOUR'		=> 'Hora',
	'MINUTE'	=> 'Minuto',

	'FILETYPE'	=> array(
		'gzip'	=> 'gzip',
		'bzip2'	=> 'bzip2',
		'text'	=> 'text',
	),

	'VERSION'							=> 'Versão',
));
