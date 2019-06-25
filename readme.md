## Informations

💾 __Technologies__ :

- Laravel
- VueJS
- Bootstrap
- Lando

🔗 __Liens utiles__ :

- http://svpexample.lndo.site
- http://pma-svpexample.lndo.site
- http://mailhog-svpexample.lndo.site


## Installation en local


Ce dépôt se déploie facilement en local par l'utilisation de lando.


##### 0) Pré-requis

Mettre à jour votre distribution **Linux**.

```sh
$ sudo apt-get update
$ sudo apt-get upgrade
```

Installer **Git**

```sh
$ sudo apt-get install git
```


##### 1) Installation de Docker CE

```sh
$ sudo apt-get install \
    apt-transport-https \
    ca-certificates \
    curl \
    gnupg-agent \
    software-properties-common
```
```sh
$ curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo apt-key add -
```

```sh
$ sudo add-apt-repository \
   "deb [arch=amd64] https://download.docker.com/linux/ubuntu \
   $(lsb_release -cs) \
   stable"
```

```sh
$ sudo apt-get update
```

```sh
$ sudo apt-get install docker-ce docker-ce-cli containerd.io
```

```sh
$ newgrp docker
$ sudo usermod -a -G docker $USER
```

##### 2) Installation de Lando

```sh
$ cd ~
$ wget https://github.com/lando/lando/releases/download/v3.0.0-rc.17/lando-v3.0.0-rc.17.deb
$ sudo apt install ./lando-v3.0.0-rc.17.deb
$ rm ./lando-v3.0.0-rc.17.deb
```

```sh
$ sudo cp -r ~/.lando/certs/lndo.site.pem /usr/local/share/ca-certificates/lndo.site.pem
$ sudo update-ca-certificates
```

##### 3) Téléchargement du dépôt

```sh
$ cd ~
$ mkdir Developpement
$ cd ./Developpement
$ git clone https://github.com/G0kar/svpexample.git
```

```sh
$ cd ./svpexample
$ lando start
$ lando composer install
$ lando npm install
$ cp .env.example .env
$ lando artisan key:generate
$ lando artisan migrate
```

Les différents sites sont à présent fonctionnels 💪


## Commandes de bases avec Lando

⚠️ Il faut toujours se situer dans le répertoire du projet, ici **~/Developpement/svpexample/**

| Commande                | Description |
| -------------- | ------------- |
| lando composer          | Exécuter des commandes composer |
| lando config            | Afficher la configuration lando |
| lando destroy           | Détruit l'application (Pas les données) |
| lando info              | Informations propres à l'application |
| lando logs              | Afficher les logs de l'application |
| lando npm               | Exécuter des commandes npm
| lando php               | Exécuter des commandes php |
| lando restart           | Redémarrer l'application |
| lando ssh               | Accès SSH à l'application principale |
| lando start             | Démarrer l'application |
| lando stop              | Arrêter l'application |
| lando version           | Affiche la version de lando |


## Commandes de bases avec Lando + Laravel

| Commande                | Description |
| -------------- | ------------- |
| lando artisan  | Afficher la liste des commandes d'artisan |
| lando npm run watch | Lance la compilation du Sass et du JS en direct |