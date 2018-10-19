# Directory Manager

Directory Manager is a web-based management portal for Active Directory administrators. The project is built on the [Laravel PHP framework](https://laravel.com/) and uses the [ADLDAP2 library](https://github.com/Adldap2/Adldap2-Laravel) to communicate with Active Directory.

The project is maintained and written by Duncan McClean. **Contributions are welcome!**

# Setup

To set this project up on your own computer or server you will require the following installed:

* PHP
* Ngnix or Apache
* MySQL
* Composer
* Node

You will also need an Microsoft Active Directory or LDAP domain controller. However, if you have no domain controller on your network, there is [a read-only](https://www.forumsys.com/tutorials/integration-how-to/ldap/online-ldap-test-server/) one you can use.

Once you have the above prerequisites, then you can follow these steps to getting Directory Manager setup on your computer.

1. Clone this project onto your computer `git clone https://github.com/damcclean/DirectoryManager`
2. Change into the directory where you clone this to `cd DirectoryManager`
3. Run `composer install` and `npm install`
4. Rename the `.env.example` file to `.env`
5. In the `.env` file, fill out your database details and details to authenticate with your Active Directory/LDAP domain controller. 
```
ADLDAP_CONTROLLERS=
ADLDAP_BASEDN=OU=
ADLDAP_ADMIN_USERNAME=
ADLDAP_ADMIN_PASSWORD=
```
6. Generate a laravel app key by running `php artisan key:generate`
7. Migrate your databases `php artisan migrate`
8. Complete!

# Contributing

**Contributors are welcome!**

If you would like to contribute, follow this process:

1. Fork this repository and get a local version running on your computer.
2. Make your changes
3. Create a pull request. Please remember to add the issue number (if there is an issue) to a PR so they can be easilly idenified.

## Things to work on

If you eager to help, you can either look on [our Projects](https://github.com/damcclean/DirectoryManager/projects) boards for anything to implement or look at [our issues](https://github.com/damcclean/DirectoryManager/issues) and try to fix one of those.