# Sobre o Projeto:
Estudos utilizando o PHP + LARAVEL

- PHP
- Laravel


### LARAVEL

```
1º - composer create-project --prefer-dist laravel/laravel blog "5.4.*"
2º - php artisan serve
3º - composer require prettus/l5-repository
4º - composer require laravelcollective/html
```


### FLUXOGRAMA/DIAGRAMA

```mermaid
flowchart LR
B[VScode]

B --> C{Project}
C --> R[App]

R --> L[Http]
L --> M[Controllers]

R --> S[Entities]

C --> P[Database]
P --> Q[Migrations]

C --> N[Resources]
N --> O[views]
C --> K[Routes]
```



### FONTE:
<ul>
  
  <li>
    <p><b><code>Laravel - Criando um sistema para gestão de grupos de investimento.</code></b></p>
    <p><i>URL: https://youtu.be/0Fol4p26Xv0 </i></p>
  </li>
  
  <li>
    <p><b><code>Laravel 5.4.</code></b></p>
    <p><i>URL: https://laravel.com/docs/5.4</p>
  </li>
  
  <li>
    <p><b><code>Laravel 5 - Repositories to abstract the database layer</code></b></p>
    <p><i>URL: https://github.com/andersao/l5-repository</p>
  </li>
  
  
  
</ul>

