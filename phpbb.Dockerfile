# Use the official PHP image with Apache
FROM php:8.4-apache 

# Install required PHP extensions and dependencies
RUN apt-get update && apt-get install -y \
    wget \
    mariadb-client \
    unzip \
    && docker-php-ext-install mysqli pdo pdo_mysql \
    && docker-php-ext-enable mysqli pdo pdo_mysql \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Enable Apache modules
RUN a2enmod rewrite remoteip

# Configure remoteip to trust the Docker network proxy
RUN echo "RemoteIPHeader X-Forwarded-For\nRemoteIPTrustedProxy 172.30.0.0/16" > /etc/apache2/conf-available/remoteip.conf \
    && a2enconf remoteip

# Set working directory
WORKDIR /var/www/html

# Download and extract phpBB
RUN wget https://download.phpbb.com/pub/release/3.3/3.3.15/phpBB-3.3.15.zip && \
    unzip phpBB-3.3.15.zip && \
    mv phpBB3 phpbb && \
    rm -rf phpBB-3.3.15.zip

# Copy addons (extensions, styles, images, languages, etc.) into phpBB
COPY addons/ phpbb/

# Set permissions
RUN chown -R www-data:www-data /var/www/html/phpbb && \
    chmod -R 755 /var/www/html/phpbb

# Expose Apache port
EXPOSE 80

CMD ["apache2-foreground"]