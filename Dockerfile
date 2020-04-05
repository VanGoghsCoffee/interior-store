FROM lorisleiva/laravel-docker:latest

WORKDIR /usr/src/interior-shop

COPY . .

RUN npm install
RUN composer global require laravel/installer
RUN composer install
RUN ["chmod", "+x", "/usr/src/interior-shop/wait-for-it.sh"]
RUN ["chmod", "+x", "/usr/src/interior-shop/entrypoint.sh"]


