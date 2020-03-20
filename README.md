# PeriodicTableApp
Show informations on an element from periodic table. This app is write in PHP and when user write the name of an element, PHP do a query in database and print informations about choosen element.

## Up and running on Docker Compose
Just run following command for create and run app :
```shell
docker-compose up -d
```
Docker compose create  containers :
* One for frontend (with PHP 7.4)
* One for database (with MariaDB 10.5.1)

## Up and running on Kubernetes
k8s folder contain all manifests for deploy this app on a kubernetes cluster.
