php-ejabber-api
===============

PHP api for ejabberd


TODO:

1. Convert current tests into unit tests
2. Add method to connect users and incorporate into tests (allows us to properly test connectedUsers() method)
3. Try and add basic authentication to the api.
4. Abstract the configuration

Configuration:

Set the globals 
JABBER_SERVER this is the server address and is used for creating users i.e. localhost.localdomain, <user@localhost.localdomain>
JABBER_USER this is the admin user, default admin
JABBER_PASSWORD this is the admin password

Methods:

createUser(<username>, <password>)

Pass username and password...password default is "password". Returns the confirmation or error message.

deleteUser(<username>)

Pass the username and it is removed from the server

getUsers()

Pass nothing and returns all registered users

connectedUsers()

Pass nothing and returns the sessions of all connected users

Please take a look at the tests/ folder for examples.
