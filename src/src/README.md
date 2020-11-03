<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

**# DockerTest**
This is a Docker Environment for PHP/Laravel and Vue.js !

## Environments
* PHP 7.2.34 
* Laravel 7.27.0
* composer 2.0.4
* node v10.23.0
* npm 6.14.8
* vue 

## How to use

### Make directory to start the development
``` 
$ mkdir docker-laravel && cd docker-laravel
```

### git clone
```
$ git clone https://github.com/masanori0117/DockerTest.git
```

### docker-compose build
Move to DockerTest directory
```
$ cd DockerTest
```

```
$ docker-compose build
```

### docker-compose up -d
```
$ docker-compose up -d
```

### docker-compose exec app bash
```
$ docker-compose exec app bash
```

## Note
This is first time to make Docker environemnt. Please let me know if is there any thing wrong. Thanks!

## Author
[masanori0117](https://github.com/masanori0117))

## License
This code is under the [MIT license](https://opensource.org/licenses/MIT).