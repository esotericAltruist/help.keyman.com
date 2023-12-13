<?php
  declare(strict_types=1);

  namespace Keyman\Site\Common;

  use Keyman\Site\Common\KeymanSiteEnvironment;

  class HelpSiteEnvironment extends KeymanSiteEnvironment {
    public static
      // Expected env vars for help.keyman.com
      $KEYMANHOSTS_TIER = '',
      $KEYMAN_COM_PROXY_PORT = '';

    public static function Init() {
      KeymanSiteEnvironment::_Init(get_class());

      // For troubleshooting
      //KeymanSiteEnvironment::Debug(get_class());
    }
  }
