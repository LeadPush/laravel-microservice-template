FROM webdevops/php-nginx-dev:8.1-alpine

ARG ARCHITECTURE

# Support Mac M1/M2 architecture.
RUN set -eux; \
  if [ "$ARCHITECTURE" = "linux/arm64" ]; then \
    wget --quiet -O /usr/local/bin/go-replace https://github.com/webdevops/goreplace/releases/download/1.1.2/gr-arm64-linux; \
    chmod +x /usr/local/bin/go-replace; \
  fi

COPY composer.json /app/composer.json
COPY composer.lock /app/composer.lock

COPY . /app

RUN cd /app && composer install

WORKDIR /app
