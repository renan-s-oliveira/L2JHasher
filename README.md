# L2JHasher

Driver de encriptação de senhas de L2J para usar com Laravel 8.

## Instalação
```
composer require renan-s-oliveira/l2j-hasher
```
Vá em config/app.php

Comentar Illuminate\Hashing\HashServiceProvider::class e adicionar L2JHasher\ServiceProvider\L2JHashServiceProvider::class,
```
//Illuminate\Hashing\HashServiceProvider::class,

L2JHasher\ServiceProvider\L2JHashServiceProvider::class,
```

Vá em config/fortify.php

Trocar
'passwords' => 'users',
por
```
'passwords' => 'accounts',
```
e

'username' => 'email',

por 
```
'username' => 'login',
```

## Quer ajudar a manter o projeto? 
## Ajude enviando PIX :)

![PIX](https://i.ibb.co/n3ww3wp/qrcode-pix.png)
