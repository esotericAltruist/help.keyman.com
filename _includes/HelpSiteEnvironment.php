<?php
  declare(strict_types=1);

  namespace Keyman\Site\Common;

  use Keyman\Site\Common\KeymanSiteEnvironment;
  
  class HelpSiteEnvironment extends KeymanSiteEnvironment {
    public static
      // help.keyman.com
      $KEYMANHOSTS_TIER = '',
      $KEYMAN_COM_PROXY_PORT = '';

    public static function Init() {
      KeymanSiteEnvironment::_Init(get_class());

      KeymanSiteEnvironment::Debug(get_class());
    }
  }
