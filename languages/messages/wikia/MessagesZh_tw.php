<?php

$messages = array_merge( $messages, array(
'login_greeting' => '歡迎來到「Wikia」, [[User:$1|$1]]!',
'create_an_account' => '開啟新用戶帳號',
'login_as_another' => '以別的用戶身份登入',
'not_you' => '不是您？',
'this_wiki' => '這個Wiki',
'home' => '主頁',
'forum' => '討論區',
'helpfaq' => '幫助與常見問題',
'createpage' => '新增文章',
'joinnow' => '立即加入',
'most_popular_articles' => '熱門文章',
'expert_tools' => '進階工具',
'this_article' => '此文章',
'this_page' => '此頁',
'edit_contribute' => '編輯',
'discuss' => '討論',
'share_it' => '分享:',
'my_stuff' => '我的東西',
'choose_reason' => '選擇原因',
'top_five' => '前五名',
'most_popular' => '最熱門',
'most_visited' => '最多閱覽',
'newly_changed' => '剛更新過',
'highest_ratings' => '得分最高',
'most_emailed' => '轉寄最多',
'rate_it' => '打分數:',
'unrate_it' => '取消分數',
'use_old_formatting' => '換回舊面板',
'use_new_formatting' => '嘗試新面板',
'activeusers' => '活躍用戶名單',
'add_comment' => '留言',
'addsection' => '留言',
'admin_skin' => '管理員功能',
'adminskin_ds' => '預設值',
'ajaxLogin1' => '為完成登入動作，請輸入新的密碼。這動作可能會使你跳離編輯頁面，可能會損失編輯結果。',
'ajaxLogin2' => '這動作可能會使你跳離編輯頁面，可能會損失編輯結果。確定要離開嗎？',
'allarticles' => '所有頁面',
'allmessagesfilter' => '正則表達式過濾條件：',
'allnotinnamespace' => '所有頁面 (不包括 $1 名字空間)',
'allowemail' => '允許其他用戶寄發電子郵件給您',
'allpagesfrom' => '顯示頁面開始自：',
'already_bureaucrat' => '這位用戶已具有行政員權限。',
'already_sysop' => '這位用戶已具有管理員權限。',
'alreadyrolled' => '無法恢復由[[User:$2|$2]] ([[User talk:$2|討論]])進行的[[$1]]的最後編輯；其他人已經編輯或是恢復了該頁。 最後編輯者: [[User:$3|$3]] ([[User talk:$3|討論]])。',
'anoneditwarning' => '\'\'\'注意:\'\'\' 你尚未登入本站，你的IP位置會被記錄在本頁的修訂歷史頁中。',
'anononlyblock' => '僅限匿名用戶',
'articletitles' => '頁面開始於 \'\'$1\'\'',
'autoredircomment' => '[[WP:AES|←]]重定向到[[$1]]',
'autosumm-blank' => '清空全部內容',
'autosumm-new' => '新頁面: $1',
'badaccess-group0' => '{{MediaWiki:Badaccess-group0}}',
'badaccess-group1' => '對不起！您執行的操作只能由 $1 使用。',
'badaccess-group2' => '對不起！您執行的操作只能由 $1 使用。',
'badaccess-groups' => '{{MediaWiki:Badaccess-groups}}',
'badaccess' => '沒有權限',
'badsig' => '錯誤的原始簽名；請檢查HTML標籤。',
'block-log-flags-anononly' => '僅匿名用戶',
'blockededitsource' => '你對\'\'\'$1\'\'\'進行\'\'\'編輯\'\'\'的文字如下:',
'blockedoriginalsource' => '以下是\'\'\'$1\'\'\'的原始碼:',
'blocklogtext' => '<big>你的用戶名或IP地址已經被$1查封。</big> 這次查封是由$1所封的。當中的原因是\'\'$2\'\'。 * 這次查封開始的時間是：$8 * 這次查封到期的時間是：$6 * 對於被查封者：$7 你可以聯絡$1或者其他的[[{{MediaWiki:grouppage-sysop}}|管理員]]，討論這次查封。除非你已經在你的[[Special:Preferences|帳號參數設置]]中設定了一個有效的電子郵件地址，否則你是不能使用「電郵這位用戶」的功能。當設定了一個有效的電子郵件地址後，這個功能是不會封鎖的。 你目前的IP地址是$3，而該查封ID是 #$5。 請你在所有查詢中註明這地址及／或查封ID。',
'bold_sample' => '粗體文字',
'booksources' => '站外書源',
'cachederror' => '以下頁面是快取中的副本，未必是最新版本。',
'cantcreateaccounttitle' => '無法創建帳戶',
'cantrollback' => '無法恢復編輯；最後的參與者是本文的唯一作者。',
'captcha-createaccount-fail' => '{{MediaWiki:Captcha-createaccount-fail}}',
'captcha-createaccount' => '{{MediaWiki:Captcha-createaccount}}',
'captchahelp-title' => '{{MediaWiki:Captchahelp-title}}',
'cascadeprotected' => '{{MediaWiki:Cascadeprotected}}',
'cascadeprotectedwarning' => '{{MediaWiki:Cascadeprotectedwarning}}',
'category-media-count' => '本分類中共有$1個文件。',
'category-media-header' => '「$1」分類中的媒體檔',
'categorytree-category' => '分類',
'categorytree-collapse' => '摺疊',
'categorytree-expand' => '展開',
'categorytree-go' => '顯示樹狀結構',
'categorytree-header' => '在此可以查詢以分類的樹狀結構。

注意： 本特殊頁面使用[[AJAX]]技術，如果您的瀏覽器非常老舊，或者是關閉了[[JavaScript]]，本頁面將會無法正常運作。',
'categorytree-load' => '查詢此分類其下的子分類',
'categorytree-loading' => '載入中…',
'categorytree-mode-all' => '顯示所有頁面',
'categorytree-mode-categories' => '只顯示分類',
'categorytree-mode-pages' => '省略圖像頁面',
'categorytree-no-subcategories' => '沒有任何子分類',
'categorytree-parents' => '上層分類',
'categorytree-retry' => '請稍後再試',
'categorytree-show-list' => '以清單顯示',
'categorytree-show-tree' => '以樹狀顯示',
'categorytree-too-many-subcats' => '子分類太多，無法顯示。',
'categorytree' => '分類樹',
'changed' => '{{MediaWiki:changed}}',
'cite' => '引用文章',
'cite_croak' => '{{MediaWiki:Cite croak}}',
'cite_error' => '{{MediaWiki:Cite error}}',
'cite_error_-1' => '{{MediaWiki:Cite error -1}}',
'cite_error_-2' => '{{MediaWiki:Cite error -2}}',
'cite_error_-3' => '{{MediaWiki:Cite error -3}}',
'cite_error_-4' => '{{MediaWiki:Cite error -4}}',
'cite_error_1' => '{{MediaWiki:Cite error 1}}',
'cite_error_2' => '{{MediaWiki:Cite error 2}}',
'cite_error_3' => '{{MediaWiki:Cite error 3}}',
'cite_error_4' => '{{MediaWiki:Cite error 4}}',
'cite_error_5' => '{{MediaWiki:Cite error 5}}',
'cite_error_6' => '{{MediaWiki:Cite error 6}}',
'cite_error_7' => '{{MediaWiki:Cite error 7}}',
'community' => '社群',
'compareselectedversions' => '比較被選版本',
'confirm_purge' => '清除本頁緩存？

$1',
'confirmedittext' => '在編輯頁面前你需要確認你的電子郵件地址。請在[[Special:Preferences|參數設定]]中設置并驗證你的電子郵件地址。',
'confirmedittitle' => '編輯前需要驗證你的電子郵件地址',
'confirmemail' => '確認電子郵件地址',
'confirmemail_error' => '你的確認過程發生錯誤.',
'confirmemail_invalid' => '不正確的確認碼. 這個確認碼已經過期.',
'confirmemail_loggedin' => '您的電子郵件已被確認.',
'confirmemail_noemail' => '你没有在賬户的[[Special:Preferences|參數設置]]中驗證你的電子郵件地址。',
'confirmemail_send' => '寄出確認碼',
'confirmemail_sendfailed' => '不能發出確認信件. 請檢查地址中是否包括不可用的字符.',
'confirmemail_sent' => '確認信已發出',
'confirmemail_success' => '您的電子郵件地址已經確認. 您現在可以登入並開始享受您的Wikia之旅了.',
'confirmemail_text' => '您需要先確認電子郵件地址，您才能收到通過Wikia送出的電子郵件。請點撃下方的確認按鈕，這將會向您所登記的地址發出確認信件。確認信包括一個含有確認碼的超連結，您在瀏覧器中打開這個連結即可完成確認。如果你已經通過驗證，請參看[[Special:Preferences|您的參數設置]]。',
'confirmprotect' => '確認保護',
'confirmrecreate' => '在你編輯這個條目後, 用户[[User:$1|$1]]([[User talk:$1|討論]])以下列原因删除了這個條目:
: \'\'$2\'\'
請在重新創建條目前三思.',
'contact' => '聯絡Wikia',
'contactmail' => '寄出',
'contactmailsub' => 'Wikia 聯絡信箱',
'contactpagetitle' => '聯絡Wikia',
'contactproblem' => '標題',
'contactproblemdesc' => '內容',
'contactrealname' => '您的大名',
'contactsubmitcomplete' => 'Wikia感謝您的來信。',
'contactwikiname' => '所在的wiki名稱(或網址)',
'copyrightwarning' => '{| style="width:100%; padding: 5px; font-size: 95%;"
|- valign="top"
|
{{SITENAME}}的所有文本資料均依GNU自由文檔許可證（GFDL）的條款釋出(請見$1）<br/>
您對文章所做的更動，將會被所有讀者立即看見。 \'\'\'請在此下欄簡述您更動的動作或修改目的。\'\'\'

<div style="font-weight: bold; font-size: 120%;">在未得到著作權利人准許的情況下，\'\'\'請勿發佈受著作權保護的資料\'\'\'。</div>

| NOWRAP |
* \'\'\'[[Special:Upload|上傳]]\'\'\'圖片
* 別忘了將發表的文章加上\'\'\'[[Special:Categories|分類]]\'\'\'!
* 如果您想測試Wiki的功能，可以前往沙盒進行測試。\'\'\'
<div><small>\'\'[[MediaWiki:Copyrightwarning|檢視此模板]]\'\'</small></div>
|}',
'copyrightwarning2' => '請注意您在{{SITENAME}}所做出的所有貢獻都可能被其他貢獻者編輯, 修改或删除.
如果您不想您寫的文章被他人修改, 請不要在這裏提交.<br />
你也必須向我們保證你所寫的一切都出自你自己的筆下, 或者是復制于公共領域或其他類似的自由來源(詳情請參見 $1).
<strong>請不要在未獲授權的情况下發表受版權保護的作品！</strong>',
'createaccountblock' => '禁止創建帳户',
'createarticle' => '創建新條目',
'created' => '已被創建',
'createpage_add_content' => '撰寫內容',
'createpage_advanced_warning' => '轉換編輯模式可能會影響頁面的格式，你確定要轉換嗎？',
'createpage_article_do_edit' => '編輯此文',
'createpage_article_exists' => '此頁面已存在',
'createpage_button' => '新增文章',
'createpage_button_createplate_submit' => '載入此模板',
'createpage_loading_mesg' => '下載中......請稍後。',
'createpage_title_caption' => '文章標題',
'createwiki_welcomesubject' => '$0 已建立!',
'createwikidesc' => '簡述此 Wiki',
'createwikilang' => '這個wiki的預設語文',
'creditspage' => '頁面作者',
'currentevents-url' => 'Portal:新聞動態',
'currentrevisionlink' => '查看當前版本',
'data' => '數據',
'databasenotlocked' => '數據庫未被鎖定。',
'datedefault' => '默認值',
'dateformat' => '日期格式',
'datetime' => '日期和時間',
'dberrortextcl' => '發生了一個數據庫查詢語法錯誤。
最後一次的數據庫查詢是：
“$1”
來自于函數“$2”。
MySQL返回錯誤“$3: $4”。',
'deadendpages' => '斷鏈頁面',
'deadendpagestext' => '以下頁面没有鏈接到本站的其他頁面。',
'defaultskin1' => '管理員將<b>$1</b> 設為預設面板',
'defaultskin_choose' => '設定此站預設面板:',
'defemailsubject' => 'Wikia電子郵件',
'delete_and_move' => '删除並移動',
'delete_and_move_confirm' => '確認删除本頁面',
'delete_and_move_reason' => '删除以便移動',
'delete_and_move_text' => '==删除請求==

目標頁面 "[[$1]]"已經存在。你確認需要删除原頁面並以進行移動嗎？',
'deletedcontributions' => '被删除的用户貢獻',
'deletedrev' => '[已删除]',
'deletedrevision' => '$1的舊版本已被删除。',
'descending_abbrev' => '降序',
'destfilename' => '重新命名檔案',
'diff-multi' => '({{plural:$1|一個中途的修訂版本|$1 個中途的修訂版本}}沒有顯示。)',
'disclaimerpage' => '{{ns:4}}:免責聲明',
'download' => '下載',
'dynamicpagelistsp' => '動態文章列表',
'eauthentsent' => '一封確認信已經發送到推薦的地址.
在發送其他郵件前, 您必須首先依照這封信中的指導確認這個電子信箱真實有效.',
'edit-externally-help' => '請參看[http://meta.wikimedia.org/wiki/Help:External_editors 安裝説明]了解詳細信息。',
'edit-externally' => '使用外部程序編輯這個文件',
'edit-summary' => '編輯摘要',
'edit' => '編輯',
'editcomment' => '編輯的評論為：“<i>$1</i>”。',
'editcount' => '編輯統計',
'editedrecently' => '最近編輯：',
'editinginterface' => '\'\'\'警告：\'\'\'你正在編輯的頁面將用于軟件的界面顯示。更改本頁面將影響其他用户的界面顯示。',
'edittools' => '<!-- Text here will be shown below edit and upload forms. -->
<div style="margin-top: 2em; margin-bottom:1em;">以下為幾個常用的符號，點選你想要的符號後，它會立即出現在編輯框中你所指定的位置。</div>

<div id="editpage-specialchars" class="plainlinks" style="border-width: 1px; border-style: solid; border-color: #aaaaaa; padding: 2px;">
<span id="edittools_main">\'\'\'符號:\'\'\' <charinsert>– — … ° ≈ ≠ ≤ ≥ ± − × ÷ ← → · § </charinsert></span><span id="edittools_name">&nbsp;&nbsp;\'\'\'簽名:\'\'\' <charinsert>~~&#126;~</charinsert></span>
----
<small><span id="edittools_wikimarkup">\'\'\'Wiki語法:\'\'\'
<charinsert><nowiki>{{</nowiki>+<nowiki>}}</nowiki> </charinsert> &nbsp;
<charinsert><nowiki>|</nowiki></charinsert> &nbsp;
<charinsert>[+]</charinsert> &nbsp;
<charinsert>[[+]]</charinsert> &nbsp;
<charinsert>[[Category:+]]</charinsert> &nbsp;
<charinsert>#REDIRECT&#32;[[+]]</charinsert> &nbsp;
<charinsert><s>+</s></charinsert> &nbsp;
<charinsert><sup>+</sup></charinsert> &nbsp;
<charinsert><sub>+</sub></charinsert> &nbsp;
<charinsert><code>+</code></charinsert> &nbsp;
<charinsert><blockquote>+</blockquote></charinsert> &nbsp;
<charinsert><ref>+</ref></charinsert> &nbsp;
<charinsert><nowiki>{{</nowiki>Reflist<nowiki>}}</nowiki></charinsert> &nbsp;
<charinsert><references/></charinsert> &nbsp;
<charinsert><includeonly>+</includeonly></charinsert> &nbsp;
<charinsert><noinclude>+</noinclude></charinsert> &nbsp;
<charinsert><nowiki>{{</nowiki>DEFAULTSORT:+<nowiki>}}</nowiki></charinsert> &nbsp;
<charinsert>&lt;nowiki>+</nowiki></charinsert> &nbsp;
<charinsert><nowiki><!-- </nowiki>+<nowiki> --></nowiki></charinsert>&nbsp;
<charinsert><nowiki><span class="plainlinks"></nowiki>+<nowiki></span></nowiki></charinsert><br/></span>
<span id="edittools_symbols">\'\'\'符號:\'\'\' <charinsert> ~ | ¡ ¿ † ‡ ↔ ↑ ↓ • ¶</charinsert> &nbsp;
<charinsert> # ¹ ² ³ ½ ⅓ ⅔ ¼ ¾ ⅛ ⅜ ⅝ ⅞ ∞ </charinsert> &nbsp;
<charinsert> ‘ “ ’ ” «+»</charinsert> &nbsp;
<charinsert> ¤ ₳ ฿ ₵ ¢ ₡ ₢ $ ₫ ₯ € ₠ ₣ ƒ ₴ ₭ ₤ ℳ ₥ ₦ № ₧ ₰ £ ៛ ₨ ₪ ৳ ₮ ₩ ¥ </charinsert> &nbsp;
<charinsert> ♠ ♣ ♥ ♦ </charinsert><br/></span>
<!-- Extra characters, hidden by default
<span id="edittools_characters">\'\'\'字母:\'\'\'
<span class="latinx">
<charinsert> Á á Ć ć É é Í í Ĺ ĺ Ń ń Ó ó Ŕ ŕ Ś ś Ú ú Ý ý Ź ź </charinsert> &nbsp;
<charinsert> À à È è Ì ì Ò ò Ù ù </charinsert> &nbsp;
<charinsert> Â â Ĉ ĉ Ê ê Ĝ ĝ Ĥ ĥ Î î Ĵ ĵ Ô ô Ŝ ŝ Û û Ŵ ŵ Ŷ ŷ </charinsert> &nbsp;
<charinsert> Ä ä Ë ë Ï ï Ö ö Ü ü Ÿ ÿ </charinsert> &nbsp;
<charinsert> ß </charinsert> &nbsp;
<charinsert> Ã ã Ẽ ẽ Ĩ ĩ Ñ ñ Õ õ Ũ ũ Ỹ ỹ</charinsert> &nbsp;
<charinsert> Ç ç Ģ ģ Ķ ķ Ļ ļ Ņ ņ Ŗ ŗ Ş ş Ţ ţ </charinsert> &nbsp;
<charinsert> Đ đ </charinsert> &nbsp;
<charinsert> Ů ů </charinsert> &nbsp;
<charinsert> Ǎ ǎ Č č Ď ď Ě ě Ǐ ǐ Ľ ľ Ň ň Ǒ ǒ Ř ř Š š Ť ť Ǔ ǔ Ž ž </charinsert> &nbsp;
<charinsert> Ā ā Ē ē Ī ī Ō ō Ū ū Ȳ ȳ Ǣ ǣ </charinsert> &nbsp;
<charinsert> ǖ ǘ ǚ ǜ </charinsert> &nbsp;
<charinsert> Ă ă Ĕ ĕ Ğ ğ Ĭ ĭ Ŏ ŏ Ŭ ŭ </charinsert> &nbsp;
<charinsert> Ċ ċ Ė ė Ġ ġ İ ı Ż ż </charinsert> &nbsp;
<charinsert> Ą ą Ę ę Į į Ǫ ǫ Ų ų </charinsert> &nbsp;
<charinsert> Ḍ ḍ Ḥ ḥ Ḷ ḷ Ḹ ḹ Ṃ ṃ Ṇ ṇ Ṛ ṛ Ṝ ṝ Ṣ ṣ Ṭ ṭ </charinsert> &nbsp;
<charinsert> Ł ł </charinsert> &nbsp;
<charinsert> Ő ő Ű ű </charinsert> &nbsp;
<charinsert> Ŀ ŀ </charinsert> &nbsp;
<charinsert> Ħ ħ </charinsert> &nbsp;
<charinsert> Ð ð Þ þ </charinsert> &nbsp;
<charinsert> Œ œ </charinsert> &nbsp;
<charinsert> Æ æ Ø ø Å å </charinsert> &nbsp;
<charinsert> Ə ə </charinsert></span>&nbsp;<br/></span>
<span id="edittools_greek">\'\'\'希臘字母:\'\'\'
<charinsert> Ά ά Έ έ Ή ή Ί ί Ό ό Ύ ύ Ώ ώ </charinsert> &nbsp; 
<charinsert> Α α Β β Γ γ Δ δ </charinsert> &nbsp;
<charinsert> Ε ε Ζ ζ Η η Θ θ </charinsert> &nbsp;
<charinsert> Ι ι Κ κ Λ λ Μ μ </charinsert> &nbsp;
<charinsert> Ν ν Ξ ξ Ο ο Π π </charinsert> &nbsp;
<charinsert> Ρ ρ Σ σ ς Τ τ Υ υ </charinsert> &nbsp;
<charinsert> Φ φ Χ χ Ψ ψ Ω ω </charinsert> &nbsp;<br/></span>
<span id="edittools_cyrillic">\'\'\'Cyrillic:\'\'\' <charinsert> А а Б б В в Г г </charinsert> &nbsp;
<charinsert> Ґ ґ Ѓ ѓ Д д Ђ ђ </charinsert> &nbsp;
<charinsert> Е е Ё ё Є є Ж ж </charinsert> &nbsp;
<charinsert> З з Ѕ ѕ И и І і </charinsert> &nbsp;
<charinsert> Ї ї Й й Ј ј К к </charinsert> &nbsp;
<charinsert> Ќ ќ Л л Љ љ М м </charinsert> &nbsp;
<charinsert> Н н Њ њ О о П п </charinsert> &nbsp;
<charinsert> Р р С с Т т Ћ ћ </charinsert> &nbsp;
<charinsert> У у Ў ў Ф ф Х х </charinsert> &nbsp;
<charinsert> Ц ц Ч ч Џ џ Ш ш </charinsert> &nbsp;
<charinsert> Щ щ Ъ ъ Ы ы Ь ь </charinsert> &nbsp;
<charinsert> Э э Ю ю Я я </charinsert> &nbsp;<br/></span>
<span id="edittools_ipa">\'\'\'IPA:\'\'\' <span title="Pronunciation in IPA" class="IPA"><charinsert>t̪ d̪ ʈ ɖ ɟ ɡ ɢ ʡ ʔ </charinsert> &nbsp;
<charinsert> ɸ ʃ ʒ ɕ ʑ ʂ ʐ ʝ ɣ ʁ ʕ ʜ ʢ ɦ </charinsert> &nbsp;
<charinsert> ɱ ɳ ɲ ŋ ɴ </charinsert> &nbsp;
<charinsert> ʋ ɹ ɻ ɰ </charinsert> &nbsp;
<charinsert> ʙ ʀ ɾ ɽ </charinsert> &nbsp;
<charinsert> ɫ ɬ ɮ ɺ ɭ ʎ ʟ </charinsert> &nbsp;
<charinsert> ɥ ʍ ɧ </charinsert> &nbsp;
<charinsert> ɓ ɗ ʄ ɠ ʛ </charinsert> &nbsp;
<charinsert> ʘ ǀ ǃ ǂ ǁ </charinsert> &nbsp;
<charinsert> ɨ ʉ ɯ </charinsert> &nbsp;
<charinsert> ɪ ʏ ʊ </charinsert> &nbsp;
<charinsert> ɘ ɵ ɤ </charinsert> &nbsp;
<charinsert> ə ɚ </charinsert> &nbsp;
<charinsert> ɛ ɜ ɝ ɞ ʌ ɔ </charinsert> &nbsp;
<charinsert> ɐ ɶ ɑ ɒ </charinsert> &nbsp;
<charinsert> ʰ ʷ ʲ ˠ ˤ ⁿ ˡ </charinsert> &nbsp;
<charinsert> ˈ ˌ ː ˑ  ̪ </charinsert>&nbsp;</span><br/></span>
-->
</small></div>
<span style="float:right;"><small>\'\'[[MediaWiki:Edittools|檢視此模板]]\'\'</small></span>',
'editusergroup' => '編輯用户組',
'email' => '電子郵件',
'emailauthenticated' => '您的電子郵件地址已經於 $1 確認有效.',
'emailccme' => '將我的消息通過電子郵件發送一份副本。',
'emailccsubject' => '復制你的消息到 $1: $2',
'emailconfirmlink' => '確認您的電郵地址',
'emailnotauthenticated' => '您的電子郵件地址<strong>還未被認證</strong>. 下述的功能將不會向您發出電子郵件.',
'emptyfile' => '您上傳的這個文件似乎没有内容。這可能是由於輸入了錯誤的文件名。請檢查並確定您真的需要上傳這個文件。',
'enotif_body' => '親愛的$WATCHINGUSERNAME,

{{SITENAME}}上的 $PAGETITLE 頁面已經在 $PAGEEDITDATE 被 $PAGEEDITOR 進行了 $CHANGEDORCREATED 操作, 請前往 $PAGETITLE_URL 查看最新版本.

$NEWPAGE

編輯摘要為: $PAGESUMMARY $PAGEMINOREDIT

聯絡這位編輯者:
郵件: $PAGEEDITOR_EMAIL
維基: $PAGEEDITOR_WIKI

除非您訪問該頁, 否則我們不會再發出下一次更改通知. 你對您的監視列表中需要通知的頁面重置通知標簽.


真誠的,             
    {{SITENAME}} 郵件通知系統

--
改變您的監視列表設置請訪問
{{SERVER}}{{localurl:Special:Watchlist/edit}}

反饋與幫助:
{{SERVER}}{{localurl:Help:Contents}}',
'enotif_lastvisited' => '查看您上次訪問後的所有更改請訪問 $1 .',
'enotif_mailer' => '{{SITENAME}} 郵件通知機器人',
'enotif_newpagetext' => '這是一個新建頁面.',
'enotif_reset' => '把所有頁面標記為已訪問',
'enotif_subject' => '{{SITENAME}} 上的 $PAGETITLE 頁已經被 $PAGEEDITOR 執行過 $CHANGEDORCREATED 操作',
'exbeforeblank' => '空白之前的内容是：',
'exblank' => '空白頁面',
'excontent' => '内容為：\'$1\'',
'excontentauthor' => '内容為：\'$1\'（而且貢獻者只有[[Special:Contributions/$2|$2]] | [[User talk:$2|Talk]]）',
'exif-aperturevalue' => '光圈',
'exif-artist' => '作者',
'exif-bitspersample' => '每象素字元長',
'exif-brightnessvalue' => '亮度',
'exif-cfapattern' => 'CFA模式<!--色彩濾鏡陣列?-->',
'exif-colorspace' => '顔色空間',
'exif-componentsconfiguration-0' => '不存在',
'exif-componentsconfiguration' => '每分量含義',
'exif-compressedbitsperpixel' => '圖像壓縮模式',
'exif-compression-1' => '未壓縮',
'exif-compression' => '壓縮模式',
'exif-contrast-0' => '標准',
'exif-contrast-1' => '低',
'exif-contrast-2' => '髙',
'exif-contrast' => '對比度',
'exif-copyright' => '版權所有者',
'exif-customrendered-0' => '標准處理',
'exif-customrendered-1' => '自定義處理',
'exif-customrendered' => '自定義圖像處理',
'exif-datetime' => '文件更改的日期與時間',
'exif-datetimedigitized' => '數字化的日期與時間',
'exif-datetimeoriginal' => '數據生成的日期與時間',
'exif-devicesettingdescription' => '設備設定描述',
'exif-digitalzoomratio' => '數字變焦比率',
'exif-exifversion' => 'Exif 版本',
'exif-exposurebiasvalue' => '曝光補償',
'exif-exposureindex' => '曝光指數',
'exif-exposuremode-0' => '自動曝光',
'exif-exposuremode-1' => '手動曝光',
'exif-exposuremode-2' => '自動曝光感知調節',
'exif-exposuremode' => '曝光模式',
'exif-exposureprogram-0' => '未定義',
'exif-exposureprogram-1' => '手動',
'exif-exposureprogram-2' => '標准程序',
'exif-exposureprogram-3' => '光圈優先模式',
'exif-exposureprogram-4' => '快門優先模式',
'exif-exposureprogram-5' => '兿術程序(景深優先)',
'exif-exposureprogram-6' => '運動程序(快速快門速度優先)',
'exif-exposureprogram-7' => '肖像模式(適用于背景在焦距以外的近距攝影)',
'exif-exposureprogram-8' => '風景模式(適用于背景在焦距上的風景照片)',
'exif-exposureprogram' => '曝光模式',
'exif-exposuretime-format' => '$1 秒 ($2)',
'exif-exposuretime' => '曝光時間',
'exif-filesource' => '文件源',
'exif-flash' => '閃光燈',
'exif-flashenergy' => '閃光燈强度',
'exif-flashpixversion' => '支持的Flashpix版本',
'exif-fnumber' => '光圈（F值）',
'exif-focallength' => '焦距',
'exif-focallengthin35mmfilm' => '35毫米膠片焦距',
'exif-focalplaneresolutionunit-2' => '吋',
'exif-focalplaneresolutionunit' => '焦平面解析單位',
'exif-focalplanexresolution' => 'X軸焦平面解析度',
'exif-focalplaneyresolution' => 'Y軸焦平面解析度',
'exif-gaincontrol-0' => '無',
'exif-gaincontrol-1' => '低增益',
'exif-gaincontrol-2' => '髙增益',
'exif-gaincontrol-3' => '低减益',
'exif-gaincontrol-4' => '高减益',
'exif-gaincontrol' => '場景控制',
'exif-gpsaltitude' => '海拔',
'exif-gpsaltituderef' => '海拔正負參照',
'exif-gpsareainformation' => 'GPS區域名稱',
'exif-gpsdatestamp' => 'GPS日期',
'exif-gpsdestbearing' => '目標方位',
'exif-gpsdestbearingref' => '目標方位參照',
'exif-gpsdestdistance' => '目標距離',
'exif-gpsdestdistanceref' => '目標距離參照',
'exif-gpsdestlatitude' => '緯度目標',
'exif-gpsdestlatituderef' => '目標的緯度參照',
'exif-gpsdestlongitude' => '目標的經度',
'exif-gpsdestlongituderef' => '目標的經度的參照',
'exif-gpsdifferential' => 'GPS差動修正',
'exif-gpsdirection-m' => '地磁方位',
'exif-gpsdirection-t' => '真方位',
'exif-gpsdop' => '測量精度',
'exif-gpsimgdirection' => '圖像方位',
'exif-gpsimgdirectionref' => '圖像方位參照',
'exif-gpslatitude-n' => '北緯',
'exif-gpslatitude-s' => '南緯',
'exif-gpslatitude' => '緯度',
'exif-gpslatituderef' => '北緯或南緯',
'exif-gpslongitude-e' => '東經',
'exif-gpslongitude-w' => '西經',
'exif-gpslongitude' => '經度',
'exif-gpslongituderef' => '東經或西經',
'exif-gpsmapdatum' => '使用地理測繪數據',
'exif-gpsmeasuremode-2' => '二維測量',
'exif-gpsmeasuremode-3' => '三維測量',
'exif-gpsmeasuremode' => '測量模式',
'exif-gpsprocessingmethod' => 'GPS處理方法名稱',
'exif-gpssatellites' => '測量使用的衛星',
'exif-gpsspeed-k' => '千米每小時',
'exif-gpsspeed-m' => '英裏每小時',
'exif-gpsspeed-n' => '海裏每小時(節)',
'exif-gpsspeed' => 'GPS接受器速度',
'exif-gpsspeedref' => '速度單位',
'exif-gpsstatus-a' => '測量過程',
'exif-gpsstatus-v' => '互動測量',
'exif-gpsstatus' => '接受器狀態',
'exif-gpstimestamp' => 'GPS時間(原子時鐘)',
'exif-gpstrack' => '運動方位',
'exif-gpstrackref' => '運動方位參照',
'exif-gpsversionid' => 'GPS標簽(tag)版本',
'exif-imagedescription' => '圖像標題',
'exif-imagelength' => '高度',
'exif-imageuniqueid' => '唯一圖像編號',
'exif-imagewidth' => '寬度',
'exif-isospeedratings' => 'ISO速率',
'exif-jpeginterchangeformat' => 'JPEG SOI偏移',
'exif-jpeginterchangeformatlength' => 'JPEG數據字節',
'exif-lightsource-0' => '未知',
'exif-lightsource-1' => '日光',
'exif-lightsource-10' => '多雲',
'exif-lightsource-11' => '深色調陰影',
'exif-lightsource-12' => '日光熒光燈(色温 D 5700 – 7100K)',
'exif-lightsource-13' => '日温白色熒光燈(N 4600 – 5400K)',
'exif-lightsource-14' => '冷白色熒光燈(W 3900 – 4500K)',
'exif-lightsource-15' => '白色熒光 (WW 3200 – 3700K)',
'exif-lightsource-17' => '標准燈光A',
'exif-lightsource-18' => '標准燈光B',
'exif-lightsource-19' => '標准燈光C',
'exif-lightsource-2' => '熒光燈',
'exif-lightsource-24' => 'ISO攝影棚鎢燈',
'exif-lightsource-255' => '其他光源',
'exif-lightsource-3' => '鎢絲燈(白熾燈)',
'exif-lightsource-4' => '閃光燈',
'exif-lightsource-9' => '晴天',
'exif-lightsource' => '光源',
'exif-make-value' => '[[$1]]',
'exif-make' => '相機生產廠商',
'exif-makernote' => '制造商注釋',
'exif-maxaperturevalue' => '最大陸地光圈',
'exif-meteringmode-0' => '未知',
'exif-meteringmode-1' => '平均水平',
'exif-meteringmode-2' => '中心加權平均測量',
'exif-meteringmode-255' => '其他',
'exif-meteringmode-3' => '點測',
'exif-meteringmode-4' => '多點測',
'exif-meteringmode-5' => '模式測量',
'exif-meteringmode-6' => '局部測量',
'exif-meteringmode' => '測量模式',
'exif-model-value' => '[[$1]]',
'exif-model' => '相機型號',
'exif-oecf' => '光電轉换因子',
'exif-orientation-1' => '標准',
'exif-orientation-2' => '水平翻轉',
'exif-orientation-3' => '旋轉180°',
'exif-orientation-4' => '垂直翻轉',
'exif-orientation-5' => '旋轉90°逆時針並垂直翻轉',
'exif-orientation-6' => '旋轉90° 順時針',
'exif-orientation-7' => '旋轉90° 順時針並垂直翻轉',
'exif-orientation-8' => '旋轉90° 逆時針',
'exif-orientation' => '定位',
'exif-photometricinterpretation' => '象素組成',
'exif-pixelxdimension' => '有效圖像高度',
'exif-pixelydimension' => '有效圖像寬度',
'exif-planarconfiguration-1' => '矮胖格式',
'exif-planarconfiguration-2' => '平面格式',
'exif-planarconfiguration' => '數據排列',
'exif-primarychromaticities' => '主要色度',
'exif-referenceblackwhite' => '黑白參照值對',
'exif-relatedsoundfile' => '相關音頻文件',
'exif-resolutionunit' => 'X軸與Y軸解析度單位',
'exif-rowsperstrip' => '每帶行數',
'exif-samplesperpixel' => '分量數',
'exif-saturation-0' => '標准',
'exif-saturation-1' => '低飽和度',
'exif-saturation-2' => '髙飽和度',
'exif-saturation' => '飽和度',
'exif-scenecapturetype-0' => '標准',
'exif-scenecapturetype-1' => '風景',
'exif-scenecapturetype-2' => '肖像',
'exif-scenecapturetype-3' => '夜景',
'exif-scenecapturetype' => '情景拍攝類型',
'exif-scenetype-1' => '直接照像圖片',
'exif-scenetype' => '場景類型',
'exif-sensingmethod-1' => '未定義',
'exif-sensingmethod-2' => '一片彩色區域傳感器',
'exif-sensingmethod-3' => '兩片彩色區域傳感器',
'exif-sensingmethod-4' => '三片彩色區域傳感器',
'exif-sensingmethod-5' => '連續彩色區域傳感器',
'exif-sensingmethod-7' => '三元傳感器',
'exif-sensingmethod-8' => '連續彩色綫形傳感器',
'exif-sensingmethod' => '感光模式',
'exif-sharpness-0' => '標准',
'exif-sharpness-1' => '柔化',
'exif-sharpness-2' => '髙',
'exif-sharpness' => '鋭化',
'exif-shutterspeedvalue' => '快門速度',
'exif-software-value' => '[[$1]]',
'exif-software' => '處理軟件',
'exif-spatialfrequencyresponse' => '空間頻率相應',
'exif-spectralsensitivity' => '感光',
'exif-stripbytecounts' => '每圧縮帶字節',
'exif-stripoffsets' => '圖像數據區',
'exif-subjectarea' => '主體區域',
'exif-subjectdistance-value' => '$1米',
'exif-subjectdistance' => '物距',
'exif-subjectdistancerange-0' => '未知',
'exif-subjectdistancerange-1' => '自動處理程序(宏)',
'exif-subjectdistancerange-2' => '近景',
'exif-subjectdistancerange-3' => '遠景',
'exif-subjectdistancerange' => '主體距離範圍',
'exif-subjectlocation' => '主題位置',
'exif-subsectime' => '日期時間秒',
'exif-subsectimedigitized' => '數字化日期時間秒',
'exif-subsectimeoriginal' => '原始日期時間秒',
'exif-transferfunction' => '轉移功能',
'exif-unknowndate' => '未知日期',
'exif-usercomment' => '用户注釋',
'exif-whitebalance-0' => '自動白平衡',
'exif-whitebalance' => '白平衡',
'exif-whitepoint' => '白點色度',
'exif-xresolution' => '水平解析度',
'exif-ycbcrcoefficients' => '顔色空間轉换矩陣系數',
'exif-ycbcrpositioning' => '黄色和洋紅配置',
'exif-ycbcrsubsampling' => '黄色和洋紅二次抽様比率',
'exif-yresolution' => '垂直解析度',
'export-addcat' => '添加',
'export-addcattext' => '添加頁面自分類：',
'export-submit' => '導出',
'export' => '導出頁面',
'exportcuronly' => '只導出當前版本，不含完整的歷史版本',
'exportnohistory' => '----
\'\'\'注意：\'\'\' 由於性能原因，通過本界面導出頁面的全部歷史的功能已被停用。',
'exporttext' => '您可以將特定頁面或一組頁面的文本以及編輯歷史以XML格式導出；這様可以將有關頁面輸入到另一個運行MediaWiki的軟件，但是現在當前的MediaWiki還不支持導入功能。

要導出頁面，請在下面的文本框中輸入條目標題，每行一個標題，並選擇你是否需要導出帶有頁面歷史的以前的版本，或是只選擇導出當前版本。

此外你還可以利用鏈接導出文件，例如你可以使用：[[{{ns:Special}}:Export/火車]]導出[[火車]]條目。',
'externaldberror' => '可能發生外部授權數據庫失敗或您没有權力更新您的外部帳號.',
'extlink_sample' => 'http://www.example.com 鏈接標題',
'extlink_tip' => '外部鏈接(記得加入http:// 前綴)',
'findspam-ip' => 'IP位置',
'footer_1.5' => '快來編修本頁',
'footer_1' => '覺得 $1 不夠好嗎?',
'footer_10' => '與$1分享',
'footer_2' => '發表意見',
'footer_5' => '最近編輯：$1 $2',
'footer_6' => '隨機頁面',
'footer_7' => '轉寄本文',
'footer_8' => '加到網路書籤',
'footer_9' => '打分數',
'footer_About_Wikia' => '[http://www.wikia.com/wiki/About_Wikia 關於Wikia]',
'footer_Advertise_on_Wikia' => '[http://www.wikia.com/wiki/Advertising 廣告合作]',
'footer_Contact_Wikia' => '[http://www.wikia.com/wiki/Contact_us 聯絡Wikia]',
'footer_Terms_of_use' => '[http://www.wikia.com/wiki/Terms_of_use 使用條款]',
'ignoreallwarnings' => '忽略<b>所有的警告</b>並存檔',
'importfreeimages' => '匯入自由版權圖片',
'invitespecialpage' => '邀請朋友加入Wikia',
'listredirects' => '重定向頁面列表',
'makesysop' => '設定用戶為管理員',
'makesysopname' => '用戶名稱',
'me_edit_normal' => '進階編輯',
'me_hide' => '隱藏',
'me_upload' => '上傳圖片',
'monaco-articles-on' => '現有$1篇文章<br />',
'monaco-edit-this-menu' => '編輯此選單',
'monaco-gaming' => '遊戲',
'monaco-latest' => '最近更新',
'monaco-welcome-back' => '歡迎回來， <b>$1</b><br />',
'monaco-whos-online' => '誰在線上？',
'monaco-widgets' => '小工具',
'mostcategories' => '最多分類的文章',
'mostlinked' => '最多被連接頁面',
'mostlinkedcategories' => '最多被使用的分類',
'mostrevisions' => '最多修訂的文章',
'mu_login' => '您必須先登入才能上傳檔案',
'mu_size_your_image' => '調整圖片大小',
'multidelete_button' => '刪除',
'multidelete_caption' => '頁面列表',
'multidelete_reason' => '刪除原因',
'multiplefileuploadsummary' => '摘要:',
'multipleupload' => '上傳檔案',
'multiuploadtext' => '上傳檔案。 <br/><br/> 點選\'\'\'瀏覽\'\'\'，選擇欲上傳的檔案，可同時上傳1至5個檔案。 <br/><br/> <b>檔案描述</b>欄位中可填入檔案說明，描述圖片內容。<br/><br/> <br/> 不當的圖片將會被刪除，請見[[Project:Image Deletion Policy|圖像刪除規定]]。<br/><br/>',
'multiwikiedit_norecentchanges_caption' => '不要將此項修訂顯示於最近修改頁。',
'my_profile' => '個人檔案',
'mypreferences' => '用戶設定',
'myprofile' => '個人檔案',
'new_article' => '新增文章',
'new_wiki' => '申請 wiki',
'newarticletext' => '<div style="float:right;"><small>\'\'[[MediaWiki:Newarticletext|檢視此模板]]\'\'</small></div>
\'\'\'您正準備開始撰寫一個新頁面\'\'\'
* 如有編輯問題，歡迎參考[[{{ns:project}}:帮助|幫助頁面]]
* 小叮嚀：別忘了為你的文章加上分類，只要在頁面底部加上<nowiki>[[Category:分類名]]</nowiki>即可。所有分類請見[[Special:Categories]]。<br/><br/>',
'newimages' => '新圖像',
'noarticletext' => '\'\'\'喔喔！ {{SITENAME}}還沒有以{{NAMESPACE}}為題的文章。\'\'\'
* \'\'\'<span class="plainlinks">[{{fullurl:{{FULLPAGENAMEE}}|action=edit}} 點此]開始編輯這個頁面</span>\'\'\'或\'\'\'<span class="plainlinks">[{{fullurl:Special:Search|search={{PAGENAMEE}}}} 點此]在此Wiki中搜尋此詞彙</span>\'\'\'.
* 如果以此為題的文章曾經存在，請查尋\'\'\'<span class="plainlinks">[{{fullurl:Special:Log/delete|page={{FULLPAGENAMEE}}}} 刪除記錄]</span>\'\'\'.',
'nstab-main' => '正文',
'permalink' => '固定鏈結',
'pr_raports_from_this_wikia' => '僅檢視此Wikia的回報',
'pr_status_10' => '移除回報',
'pr_status_ask' => '更改提報問題的狀態？',
'pr_table_comments' => '發表意見',
'pr_table_status' => '狀態',
'pr_thank_you' => '感謝您的回報！',
'prefixindex' => '前缀索引',
'problemreports' => '問題回報列表',
'protectedpages' => '被保護的頁面',
'randomredirect' => '隨機重定向頁',
'rcnote' => '以下是在$3，最近\'\'\'$2\'\'\'天內的\'\'\'$1\'\'\'次最近更改記錄:',
'rcshowhideanons' => '$1 匿名用戶',
'rcshowhidebots' => '$1 機器人',
'rcshowhideenhanced' => '$1 折頁式顯示模式',
'rcshowhideliu' => '$1 登入用戶',
'recentchanges_combined' => '最近更改',
'recentchangestext' => '<span style="float:right;"><small>\'\'[[MediaWiki:Recentchangestext|View this template]]\'\'</small></span>
此頁為本站最近更新的內容：

{| class="plainlinks" style="background: transparent; margin-left:0.5em; margin-bottom:0.5em;" cellpadding="0" cellspacing="0"
|-valign="top"
|align="right"|\'\'\'記錄&nbsp;:&nbsp;\'\'\'
|align="left" |[[Special:Newpages|最新文章]] - [[Special:Newimages|最新檔案]] - [[Special:Log/delete|刪除]] - [[Special:Log/move|移動頁面]] - [[Special:Log/upload|上傳]] - [[Special:Log/block|封鎖]] - [[Special:Log|更多記錄...]]
|-valign="top"
|align="right"|\'\'\'特殊頁面&nbsp;:&nbsp;\'\'\'
|align="left" |[[Special:Wantedpages|請求文章]] - [[Special:Longpages|長文]] - [[Special:Uncategorizedimages|未分類圖片]] - [[Special:Uncategorizedpages|未分類文章]] - [[Special:Specialpages|更多特殊頁面...]]
|}',
'reportproblem' => '問題回報',
'see_more' => '更多內容...',
'shared-problemreport' => '回報問題',
'showdiff' => '顯示差異',
'sitestatstext' => '__NOTOC__
{| class="plainlinks" align="top" width="100%"
| valign="top" width="50%" | 
===頁面統計===
\'\'\'{{SITENAME}}共有$1 [[Special:Allpages|頁面]]\'\'\' ([[Special:Newpages|新文章]]):

*\'\'\'$2 合理的頁面:\'\'\'
**[[Special:Allpages|主要名字空間]]
**存在一個內部鏈結
**可能為[[Special:Shortpages|短頁面]]或[[Special:Longpages|長頁面]]
**可能為[[Special:Disambiguations|消歧異頁]]
**可能為[[Special:Lonelypages|孤立頁面]]

*非文章頁，例如:
**主要名字空間外的頁面<br/>(例如模板頁、討論頁)
**[[Special:Listredirects|重定向頁]] ([[Special:BrokenRedirects|失效的重定向頁]]/[[Special:DoubleRedirects|重覆重定向頁]])
**[[Special:Deadendpages|終點頁]]

| valign="top" width="50%" |

===其他統計===
*\'\'\'$8 [[Special:Imagelist|圖片]]\'\'\' ([[Special:Newimages|新進圖片]])
*\'\'\'$4\'\'\' 頁編輯數 / \'\'\'$1\'\'\' 頁數 = \'\'\'$5\'\'\' 編輯數/頁數 ([[Special:Mostrevisions|最多修訂]])

=== 工作排程 ===
*目前的[http://meta.wikimedia.org/wiki/Help:Job_queue 工作隊列]長度為\'\'\'$7\'\'\'

===進階資訊===
* [[Special:Specialpages|特殊頁面]]
* [[Special:Allmessages|系統介面]]

想知道更多的統計資料，請使用Wikia中心的\'\'\'[[Wikia:Wikia:Statistics|WikiStats]]\'\'\'。
|}',
'stf_back_to_article' => '返回文章',
'stf_frm4_cancel' => '取消',
'subcategorycount' => '在這個分類中有{{PLURAL:$1|is one subcategory| $1}}個次分類，請見{{PLURAL:$1|以下}}。{{PLURAL:$1||更多分類可見於更次一級的分類}}。',
'talkpagetext' => '<div style="margin: 0 0 1em; padding: .5em 1em; vertical-align: middle; border: solid #999 1px;">\'\'\'這是一個討論頁。請在您的留言後面加上四個波折號簽名。 (<code><nowiki>~~~~</nowiki></code>)\'\'\'</div>',
'this_special' => '這個特殊頁面',
'this_user' => '此用戶',
'tog-htmlemails' => '以HTML格式發送郵件',
'tooltip-pt-userpage' => '個人用戶頁',
'uncategorizedcategories' => '待分類類別',
'uncategorizedimages' => '待分類圖像',
'uncategorizedpages' => '待分類頁面',
'unusedcategories' => '未使用的分類',
'unwatch' => '取消監視',
'uploadbtn' => '上傳檔案',
'uploadtext' => '\'\'\'停止！\'\'\'在您上載之前，請先閲讀并遵守{{SITENAME}}
[[Project:Image use policy|圖像使用守則]]。

如果您要查看或搜索之前上載的圖像，
請到[[Special:Imagelist|已上載圖像列表]].
所有上載與删除行為都被記録在
[[Project:上載紀録|上載紀録]]内。

使用下面的表單來上載用在條目内新的圖像文件。
在絶大多數瀏覧器内，你會看到一個"瀏覧..."按鈕，點撃它後就會跳出一個打開文件對話框。
選擇一個文件後文件名將出現在按鈕旁邊的文字框中。
您也必須點撃旁邊的復選框確認您所上載的文件并没有違反相關版權法律。
點撃"上載" 按鈕完成上載程序。
如果您使用的是較慢的網絡連接的話那麽這個上載過程會需要一些時間。

我們建議照相圖片使用JPEG格式，繪圖及其他圖標圖像使用PNG格式，音像則使用OGG格式。
請使用具有描述性的語言來命名您的文件以避免混亂。
要在文章中加入圖像，使用以下形式的連接：
\'\'\'<nowiki>[[圖像:file.jpg]]</nowiki>\'\'\'或者
\'\'\'<nowiki>[[圖像:file.png|解釋文字]]</nowiki>\'\'\'
或\'\'\'<nowiki>[[media:file.ogg]]</nowiki>\'\'\'來連接音像文件。

請注意在{{SITENAME}}頁面中，其他人可能會為了百科全書的利益而編輯或删除您的上載文件，
而如果您濫用上載系統，您則有可能被禁止使用上載功能。',
'variantname-zh-tw' => '台灣正體',
'version' => '版本',
'wantedcategories' => '需要的分類',
'whosonline' => '誰在線上？',
'widgets' => 'Widgets列表',
'captcha-badlogin' => '請輸入以下數學算式的答案([[Special:Captcha/help|更多資訊]])：',
'captcha-create' => '請輸入以下數學算式的答案([[Special:Captcha/help|更多資訊]])：',
'createpage_alternate_creation' => '原始編輯模式請點選 $1',
'createpage_button_caption' => '發布！',
'createpage_caption' => '分類：',
'createpage_categories' => '分類：',
'createpage_categories_help' => '將文章加註分類，可加強這個站上的文章的組織。你可以在下方挑選一個適當的分類，或是直接輸入一個新的分類。',
'createpage_enter_text' => '輸入文字',
'createpage_here' => '這裡',
'createpage_hide_cloud' => '[隱藏分類雲]',
'createpage_show_cloud' => '[顯示分類雲]',
'createpage_title' => '發表新文章',
'createwiki' => '申請wiki',
'createwikipagetitle' => '申請wiki',
'editingTips' => '= 如何改變字體格式 =
你可以利用mediawiki的語法改變字體格式，或是利用HTML

<nowiki>\'\'斜體\'\'</nowiki> => \'\'斜體\'\'

<nowiki>\'\'\'粗體\'\'\'</nowiki> => \'\'\'粗體\'\'\'

<nowiki>\'\'\'\'\'粗體和斜體\'\'\'\'\'</nowiki> => \'\'\'\'\'粗體和斜體\'\'\'\'\'　

-----
<nowiki><s>刪去</s></nowiki> => <s>刪去</s>

<br />
<nowiki><u>底線</u></nowiki> => <u>底線</u>

<br />
<nowiki><span style="color:red;">紅字</span></nowiki> => <span style="color:red;">紅字</span>

= 連結 =
利用兩個或是一個中括號，可產生連結的效果

<br />
\'\'\'基本內部鏈結:\'\'\'<br />
<nowiki>[[文章名]]</nowiki>

<br />
\'\'\'改變鏈結字樣:\'\'\'<br />
<nowiki>[[文章名|你喜歡的字樣]]</nowiki>

<br />
----

<br />
\'\'\'連到外部網頁:\'\'\'<br />
<nowiki>[http://www.example.com]</nowiki>

<br />
\'\'\'改變外部鏈結字樣:\'\'\'

<nowiki>[http://www.example.com 你喜歡的字樣]</nowiki> 

= 如何增加標題 =
使用 =(等號)就可以幫你建立次標題和三級標題。前後一個等號的標題等級和頁面名稱等級相同。

<nowiki>==二級標題==</nowiki>

<nowiki>===三級標題===</nowiki>

<nowiki>====四級標題====</nowiki>


= 如何把內容分項顯示 =

在句子的開頭使用\'\'\':\'\'\'就可以達到開頭縮排書寫的效果。


<nowiki>:一個縮排</nowiki><br>
<nowiki>:一個縮排</nowiki><br>
<nowiki>:: 兩個縮排</nowiki><br />
<nowiki>::: 更多縮排</nowiki>


<nowiki>*第一項</nowiki><br>
<nowiki>*第二項</nowiki><br>
<nowiki>**第二項的再分項</nowiki><br>
<nowiki>*第三項</nowiki><br>


<nowiki>#第一點</nowiki><br>
<nowiki>#第二點</nowiki><br>
<nowiki>##2.1點</nowiki><br>
<nowiki>#第三點</nowiki><br>


= 如何加入圖片 =
如入圖片的方法和加入鏈結的方法相似。

<br />
<nowiki>[[Image:圖片名.jpg]]</nowiki>

<br />
\'\'\'背景說明(滑鼠移到圖片上時顯示)\'\'\'<br />
<nowiki>[[Image:Name.jpg|說明文字]]</nowiki>

<br />
\'\'\'加入圖片註解\'\'\'<br />
<nowiki>[[Image:Name.jpg|thumb|]]</nowiki>

<br />
\'\'\'改變圖片大小\'\'\'<br />
<nowiki>[[Image:Name.jpg|200px|]]</nowiki>

<br />
\'\'\'改變圖片位置\'\'\'<br />
<nowiki>[[Image:Name.jpg|right|]]</nowiki>

<br />
你可以用 "|" 結合上述功能，別忘了，在最後一個 "|" 後面是加註文字。',
'editingtips_enter_widescreen' => '放大編輯',
'editingtips_exit_widescreen' => '退出放大編輯',
'editingtips_hide' => '隱藏編輯小技巧',
'fancycaptcha-badlogin' => '請輸入認證碼([[Special:Captcha/help|更多資訊]])：',
'fancycaptcha-createaccount' => '請輸入認證碼([[Special:Captcha/help|更多資訊]])：',
'monaco-toolbox' => '* Special:Search|進階搜尋
* upload-url|上傳圖片
* Special:MultipleUpload|大量上傳
* specialpages-url|特殊頁面
* recentchanges-url|最近更改
* randompage-url|隨機頁面
* whatlinkshere|鏈入頁面
* helppage|說明手冊',
'multipleupload-text' => '大量上傳檔案！

使用\'\'\'瀏覽\'\'\'按鈕選擇要上傳檔案的位置。可同時上傳1至$1個檔案。 你可以選擇輸入\'\'\'目標檔案名\'\'\'和\'\'\'檔案描述\'\'\'來簡述此檔案。不當的檔案將可能被刪除，詳見[[{{MediaWiki:Multipleupload-page}}|檔案刪除政策]]。',
'pr_mailer_notice' => '您在個人資料中所留下的電子郵件，將會自動顯示在「發信人」的欄位中，所以收件人能直接回覆您的信件。',
'pr_table_problem_id' => '問題編號',
'pr_table_problem_type' => '問題類型',
'pr_table_reporter_name' => '回報人',
'pr_total_number' => '回報總數',
'pr_view_all' => '顯示所有回報',
'pr_what_problem_change' => '更改問題類型',
'uploadtext-ext' => 'Wikia支援的所有延申套件請見[[{{ns:Special}}:Version|版本頁]]。',
) );
