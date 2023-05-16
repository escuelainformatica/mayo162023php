# Ejercicio

Use este ejercicio:

* Agregue un modelo Rol con los siguientes campos
    * nombre
    * leer
    * escribir
    * administrar
* y modifique el modelo User para que se vincule a ese rol (en vez de tener un campo de texto)
* Modifique el seeder agregue los siguientes roles
   * rol: admin,1,1,1 (nombre,leer, escribir, administrar)  
   * rol: user,1,0,0  

* Y corra la migracion. No necesitamos el factory

* Cree una pagina donde una parte del rol aparezca solo para los administradores.






