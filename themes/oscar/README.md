# Oscar Obligatorio-2

Misma estructura que el obligatorio 1 con un cambio en el sass compilado

## En tu caso, debes correr
``` 
npm i 
```

Para compilar sass en el lugar correcto
``` 
sass --watch sass/styles.scss:style.css --style compressed 
```

Además, agregué el cabezal en style.csss y modifiqué la última variable de color que daba error de formato.

Registré 3 ubicaciones para menú: `izquierda, derecha y footer`. 

## Archivos

Todas las páginas se arman de la siguiente manera

```
header.php  | <html> <head></head> + <body> <header>...</header> <main>
index.php   | <?php the_content(); ?> (contenido del admin)
footer.php  | <footer>...</footer> </main> </body> </html>
```
