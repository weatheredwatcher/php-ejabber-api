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
 * @return string $users
 *
 * 
*/
  static function createUser($username, $password="password"){

    $return = exec("sudo /opt/ejabberd-13.12/bin/ejabberdctl register $username " . JABBER_SERVER . " " . $password);
    
    return $return;
  }


/**
 * getUser
 *
 * Lists the current registered users.
 *
 * @api
 *
 * @return array $users
 *
 * 
*/
  static function getUsers(){

     //get users on the server
     exec("sudo /opt/ejabberd-13.12/bin/ejabberdctl registered-users localhost.localdomain", $users);
     return $users;

  }
  
/**
 * deleteUser
 *
 * deletes the user
 *
 * @api
 *
 * @param string $username 
 * @return void
 *
 * 
*/

  static function deleteUser($username){

    //delete user from the server
    exec("sudo /opt/ejabberd-13.12/bin/ejabberdctl unregister $username localhost.localdomain", $users);
  }
  
/**
 * connectedUsers
 *
 * Returns the sessions of all connected users
 *
 * @api
 *
 * @param string $username 
 * @return array $sessions
 *
 * 
*/

  static function connectedUsers(){
  
    exec("sudo /opt/ejabberd-13.12/bin/ejabberdctl connected-users", $sessions);
    
    return $sessions;
  
  }
}
