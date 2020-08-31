<?php
  require_once('includes/template.php');

  head([
    'title' => "Translating the Keyman for Windows User Interface"
  ]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Translating the Keyman for Windows User Interface</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="advanced_proxy_config.php">Prev</a> </td><th width="60%" align="center">Chapter 4. Advanced Help</th><td width="20%" align="right"> <a accesskey="n" href="advanced_tsf.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h2 class="title" style="clear: both" id="advanced_locale_edit">Translating the Keyman for Windows User Interface</h2></div></div></div><h3><a name="id578304"></a>Online User Interface Translation Editor</h3><p>Localization of the user interface is possible by using the online interface at <a class="ulink" href="https://translate.keyman.com/" target="_blank">translate.keyman.com</a>.</p><h3><a name="id578336"></a>Notes on editing translations</h3><p>Nearly all strings have identifiers (e.g. SKButtonOK for the <span class="guibutton">OK</span> button).  We have three different types of strings in the file - plain, HTML and format strings:</p><div class="itemizedlist"><ul type="disc"><li><p>Format strings often include %#:s or %#:d markers that are placeholders for parameters, and should be included in a translated string.  The order of the markers in the translated string is not important.</p><p>Example: <code class="code">&lt;String Type="FormatString" Id="SKPackageAlreadyInstalled"&gt;A package with the name %0:s is already installed.  Do you want to uninstall it and install the new one?&lt;/String&gt;</code></p></li><li><p>Plain strings must be just that - plain text.  These are all referenced by the XSL templates that           make up the bulk of the Keyman for Windows user interface.  You should not place any HTML tags in these           entries as they will be stripped before display.</p><p>Example: <code class="code">&lt;String Type="PlainText" Id="S_ShortProductName"&gt;Keyman for Windows&lt;/String&lt;</code></p></li><li><p>HTML strings can include tags - there are only a few of these.  The most obvious of these is in the Welcome screen text.</p><p>Example: <code class="code">&lt;String Type="HTML" Id="S_Splash_Button_Start" AccessKey="S"&gt;&lt;u&gt;S&lt;/u&gt;tart&lt;/String&gt;</code></p></li></ul></div><p>The &amp;amp; entity is used to mark hotkeys in menu items, labels and buttons.  It can be used only 
        with strings identified as formatted messages (these mostly start with SK) and with the Menu strings.</p><h3><a name="id578401"></a>Hints on editing a translation</h3><p>First, edit the translation's language information - SKUILanguageName, SKUILanguageNameWithEnglish, and SKLanguageCode. 
        The SKLanguageCode should be the same as the language code you chose earlier.  You will also see a String with 
        id SKDefaultLanguageCode.  For Keyman for Windows, this should remain "en" for all translations.  When developing a 
        custom product using the Keyman Engine for Windows, you may change your product's default language, and this
        would then entail changing SKDefaultLanguageCode.</p><div class="note" style="margin-left: 0.5in; margin-right: 0.5in;"><h3 class="title">Note</h3><p>Any entries missing from the translation will be retrieved from the default file.</p></div><h3><a name="id578416"></a>Related Topics</h3><div class="itemizedlist"><ul type="disc"><li><p>
        <a class="xref" href="start_locale.php" title="How To - Set the Language for Keyman Desktop Menus">How To - Set the Language for Keyman Desktop Menus</a>
      </p></li></ul></div></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="advanced_proxy_config.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="advanced.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="advanced_tsf.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Proxy Configuration </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Text Services Framework</td></tr></table></div>
