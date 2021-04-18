FROM lorisleiva/laravel-docker:7.4

WORKDIR /usr/src/interior-shop

COPY . .

RUN npm install
RUN composer global require laravel/installer
RUN composer self-update && composer update && composer install
RUN ["chmod", "+x", "/usr/src/interior-shop/wait-for-it.sh"]
RUN ["chmod", "+x", "/usr/src/interior-shop/entrypoint.sh"]


