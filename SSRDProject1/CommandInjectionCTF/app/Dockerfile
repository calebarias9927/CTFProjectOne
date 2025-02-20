FROM php:apache

WORKDIR /var/www/html
COPY index.php /var/www/html/
RUN apt-get update && apt-get install -y dnsutils && \
    echo "flag{YouFoundMe}" > /flag.txt && \
    chown root:www-data /flag.txt && chmod 644 /flag.txt

EXPOSE 80
