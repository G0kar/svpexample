![logo](./public/images/logo.png)



## Informations


💪🏼 __Équipes__ : 

- Alexandre Dorigny :  _Chef d'équipe_ / _Designer_ 
- Pierre Ribault : _Développeur back-end & front-end_

💾 __Technologies__ :

- Laravel
- VueJS
- Bootstrap

🔗 __Liens utiles__ :

* Prod :  _Nom de domaine non acheté_ ⚠️
* Qual : dev.feendy.fr  (__Temporaire__)

⚡️__À faire__ :

- [x] Réalisation du logo
- [ ] Achat du nom de domaine
- [ ] Réalisation des maquettes du site
- [ ] Réalisation des maquettes du back-office admin
- [ ] Réalisation des maquettes du back-office client
- [ ] Réalisation de l'intégration
- [ ] Réalisation du diagramme SQL
- [ ] Réalisation du dev-back
- [ ] Réalisation du back-office
- [ ] Réalisation du back-client



## Installation en local


Ce dépôt se déploie facilement en local par l'utilisation de lando.

Pour installer lando je renvoie sur ces liens : 

- Linux : https://docs.devwithlando.io/installation/linux.html
- Mac : https://docs.devwithlando.io/installation/macos.html
- Windows : https://docs.devwithlando.io/installation/windows.html


Clonez ce dépôt là où vous le souhaitez.

```sh
$ cd ~
$ git clone https://gogs.rib-server.fr/pribault/Stiud.git
```



Placez-vous dans le repertoire

```sh
$ cd ./Stiud
```



On initialise le site avec la suite de commande suivante

```sh
$ lando start
$ lando composer install
$ mv .env.example .env
$ lando php artisan key:generate
$ lando php artisan migrate
```

## Activer le HTTPS


#### MACOS

```bash
# Add the Lando CA
sudo security add-trusted-cert -d -r trustRoot -k /Library/Keychains/System.keychain ~/.lando/certs/lndo.site.pem

# Remove Lando CA
sudo security delete-certificate -c "Lando Local CA"
```

#### WINDOWS

```bash
# Add the Lando CA
certutil -addstore -f "ROOT" C:\Users\ME\.lando\certs\lndo.site.pem

# Remove Lando CA
certutil -delstore "ROOT" serial-number-hex
```

#### DEBIAN

```bash
# Add the Lando CA
sudo cp -r ~/.lando/certs/lndo.site.pem /usr/local/share/ca-certificates/lndo.site.pem
sudo update-ca-certificates

# Remove Lando CA
sudo rm -f /usr/local/share/ca-certificates/lndo.site.pem
sudo update-ca-certificates --fresh
```