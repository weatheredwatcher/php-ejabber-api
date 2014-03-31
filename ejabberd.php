<?php
/**
 *
 * eJabberd PHP API
 * 
 * This is a wrapper class for the eJabberd server.  It primarily makes use of ejabberdctl to pass commands to the ejabber server
 *
 * @author David Duggins <weatheredwatcher@gmail.com>
 * @version 0.1
 *
 *
 * @global string JABBER_SERVER defines that jabber sever domain name
 * @global string JABBER_USERNAME defines the admin username if needed
 * @global string JABBER_PASSWORD defines the global password to be used by all users
 *
 */

namespace ejabber;

define('JABBER_SERVER','localhost.localdomain');
define('JABBER_USERNAME','admin');
define('JABBER_PASSWORD','password');

class ejabber {

/**
 * createUser
 *
 * Creates a user on the jabberd server takes $username variable and $password variable
 *
 * @api
 *
 * @param string $username 
 * @param string $password
 * @return array $users
 *
 * 
*/
  static function createUser($username){

    $return = exec("sudo /opt/ejabberd-13.12/bin/ejabberdctl register $username " . JABBER_SERVER . " " . JABBER_PASSWORD);
    
    return $return;
  }

  static function getUsers(){

     //get users on the server
     exec("sudo /opt/ejabberd-13.12/bin/ejabberdctl registered-users localhost.localdomain", $users);
     return $users;

  }

  static function deleteUser($username){

    //delete user from the server
    exec("sudo /opt/ejabberd-13.12/bin/ejabberdctl unregister $username localhost.localdomain", $users);
  }

  static function connectedUsers(){
  
    exec("sudo /opt/ejabberd-13.12/bin/ejabberdctl connected-users", $sessions);
    
    return $sessions;
  
  }
}
