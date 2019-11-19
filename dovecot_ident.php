<?php

/**
  * Plugin imap IP
  *
  * @version 3.0
  * @author Rudimar Remontti
  */

class dovecot_ident extends rcube_plugin 
{

  function init()
  {
    $this->add_hook('storage_connect', array($this, 'add_ident'));
  }

  function add_ident($args)
  {
    $args['ident'] = $args['ident'] ? array_merge($args['ident'], array('x-originating-ip' => $_SERVER['REMOTE_ADDR']))
									: array('x-originating-ip' => $_SERVER['REMOTE_ADDR']);
    return $args;
  }
}

?>
