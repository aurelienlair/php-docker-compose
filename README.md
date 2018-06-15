## Description
This project is PHP Docker project based with 3 services:
- `nginx` which is an image of [nginx](https://www.nginx.com/)
- `php` which is an image of [php-fpm](https://php-fpm.org/)
- `data` which is an image of [busybox](https://busybox.net/)
It includes [PHPUnit](https://phpunit.de/) as testing framework.
The project runs within a Docker container and should work only from the command line.
The first boot takes a couple of minutes (due to all the dependencies to be installed)
but then is very quick. 

This project also includes [PHP-CS-Fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer).
The version 2 of the [docker-compose file](https://docs.docker.com/compose/compose-file/compose-file-v2/) is used in this project.

It uses also [Silex](https://silex.symfony.com/) as micro-framework but of course
feel free to use the one you prefer.

## Installation

```
$ cd /home/aurelien/my-projects/
```

Clone the repository:

```
$ /usr/bin/git clone git@github.org:aurelienlair/php-docker-compose.git 
$ cd php-docker-compose
``` 

Build the image and create the container:

```
$ /usr/local/bin/docker-compose build 
$ /usr/local/bin/docker-compose up -d
```

To check that everything is properly working just run a bash session within the container called php-docker-compose-container by launching PHPunit as following:
```
$ /snap/bin/docker exec -it php_container ./vendor/bin/phpunit --version

PHPUnit 7.2.4 by Sebastian Bergmann and contributors.
```

If everything is working then in order to test the application from outside (your
host) it is required to do this
```
add `127.0.0.1 api.dev.myproject.com` to your `/etc/hosts` file;
``` 

Try the following command to check the correct settings:

```
/usr/bin/curl -v "http://api.dev.myproject.com:8001/ping"

> GET /ping HTTP/1.1
> Host: api.dev.myproject.com:8001
> User-Agent: curl/7.55.1
> Accept: */*
> 
< HTTP/1.1 200 OK
< Server: nginx/1.12.2
< Date: Thu, 14 Jun 2018 21:24:28 GMT
< Content-Type: application/json
< Content-Length: 118
< Connection: keep-alive
< X-Powered-By: PHP/7.2.6

pong
``` 
## Requires
[Docker](https://docs.docker.com/install/linux/docker-ce/ubuntu/) 

[Docker-compose](https://docs.docker.com/compose/install/) 

[Git](https://git-scm.com/) 
