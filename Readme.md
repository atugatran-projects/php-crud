# MySql commands

## Create Database

```
CREATE DATABASE notes
```

### Create Table

```
CREATE TABLE `notes`.`notes` (`S.no` INT NOT NULL AUTO_INCREMENT , `title` VARCHAR(255) NOT NULL , `description` VARCHAR(255) NOT NULL , PRIMARY KEY (`S.no`)) ENGINE = InnoDB;
``` 

# Docker

## Project Start

```
docker-compose up
```

## Project Stop

```
docker-compose down
```

## Phpmyadmin port

```
http://localhost:80/
```

## Php Serve port

```
http://localhost:81/
```

## Server Name

```
mysql
```

## UserName

```
root
```

## passwd

```
root
```

# Docker Images

- php
- mysql
- phpmyadmin
