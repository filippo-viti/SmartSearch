# SmartSearch
This project is an example of a searchbar that automatically fetches suggestions from the database using AJAX

## Requirements
- Composer
- Symfony CLI
- MySQL database

## Installation
```shell
git clone https://github.com/filippo-viti/SmartSearch
cd SmartSearch
composer install
```
Then import the database with your preferred tool or, if you are on a Unix system, with the command:
```shell
sudo mysql < world_cities.sql
```
Configure the connection to the database by creating the file ```.env.local``` and adding the following line:
```dotenv
DATABASE_URL="mysql://[db_user]:[db_password]@127.0.0.1:3306/world_cities"
```
## Running
```shell
symfony serve
```
The server should start on ```localhost:8000```