# Florencia Obligatorio-2

Misma estructura que el obligatorio 1 con un cambio en el sass compilado

## En tu caso, debes correr
``` 
npm i 
```

Para compilar sass en el lugar correcto
```
sass --watch scss/styles.scss:style.css --style compressed 
```

## Archivos

Todas las páginas se arman de la siguiente manera

```
header.php  | <html> <head></head> + <body> <header>...</header>
index.php   | <?php the_content(); ?> (contenido del admin)
footer.php  | <footer>...</footer> </body> </html>
```
