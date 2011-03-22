<?php
/* SVN FILE: $Id$ */
/**
 * [PUBLISH] メールフォーム
 * 
 * PHP versions 4 and 5
 *
 * BaserCMS :  Based Website Development Project <http://basercms.net>
 * Copyright 2008 - 2010, Catchup, Inc.
 *								9-5 nagao 3-chome, fukuoka-shi 
 *								fukuoka, Japan 814-0123
 *
 * @copyright		Copyright 2008 - 2010, Catchup, Inc.
 * @link			http://basercms.net BaserCMS Project
 * @package			baser.plugins.mail.views
 * @since			Baser v 0.1.0
 * @version			$Revision$
 * @modifiedby		$LastChangedBy$
 * @lastmodified	$Date$
 * @license			http://basercms.net/license/index.html
 */
$html->css(array('/mail/css/style', 'jquery-ui-1.7.2/ui.all'),null,null,false);
$baser->js(array('jquery-ui-1.7.2.custom.min','i18n/ui.datepicker-ja'), false);
$mail->indexFields($mailContent['MailContent']['id']);
?>

<h2 class="contents-head">
	<?php $baser->contentsTitle() ?>
</h2>

<h3 class="contents-head">入力フォーム</h3>

<div class="section">
	<p><span class="required">*</span> 印の項目は必須となりますので、必ず入力してください。</p>
	<?php $baser->flash() ?>
	<?php $baser->element('mail_form') ?>
</div>
