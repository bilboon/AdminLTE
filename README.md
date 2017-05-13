POC AdminLTE
===================

Ce projet est basé sur le thème AdminLTE de [https://almsaeedstudio.com/](Almsaeed Studio)

Installation du projet
------------
``` bash
    git clone git@github.com:acantepie/AdminLTEBundle.git
    cd AdminLTE/symfony
    make install
```

Configuration apache2
------------
``` bash
    sudo cp ../conf/apache2/AdminLTE.conf /etc/apache2/sites-enabled/
    sudo service apache2 restart
```

Accéder au back office
------------
Une fois le projet installé, vous pouvez accéder à l'espace d'administration en allant sur [http://adminlte.dev/admin](http://adminlte.dev/admin) .

Vous pouvez alors y entrer les identifiants suivants :
```
    root / root             pour l'accés en mode super administrateur
    acantepie / acantepie   pour l'accés en mode administrateur
```


