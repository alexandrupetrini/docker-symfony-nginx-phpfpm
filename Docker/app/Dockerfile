FROM 'bitnami/php-fpm:7.4'
LABEL maintainer "Bitnami <containers@bitnami.com>"

RUN install_packages vim emacs-nox nano less coreutils curl wget zip unzip

# XDebug
RUN if ! [ -s "/opt/bitnami/php/lib/php/extensions/xdebug.so" ]; then \
    echo " ---> Installing XDebug"; \
    install_packages \
    build-essential autoconf ca-certificates pkg-config \
    php-dev php-pear; \
    pecl channel-update pecl.php.net; \
    pecl install xdebug; \
    else \
    echo " ---> XDebug installed"; \
    fi

# Redis
RUN if ! [ -s "/opt/bitnami/php/lib/php/extensions/redis.so" ]; then \
       echo " ---> Installing PHP redis"; \
       install_packages \
           build-essential autoconf ca-certificates pkg-config \
           php-dev php-pear; \
       pecl channel-update pecl.php.net; \
       pecl install redis; \
   else \
       echo " ---> PHP Redis installed"; \
   fi

# NVM and latest lts of npm
RUN curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.35.3/install.sh | bash
RUN . ~/.bashrc; nvm install --lts

# Bower
RUN . ~/.bashrc; npm install -g bower

# Yarn
RUN . ~/.bashrc; npm install -g yarn

# Update composer
RUN composer self-update

## Install Laravel client
# RUN composer global require "laravel/installer"
# RUN ln -sf /root/.composer/vendor/bin/laravel /opt/bitnami/php/bin/

# Install Symfony client and git dependency
RUN wget https://get.symfony.com/cli/installer -O - | bash
RUN mv /root/.symfony/bin/symfony /opt/bitnami/php/bin/
RUN install_packages git
