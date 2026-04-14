FROM php:alpine

RUN <<EOF
apk add --no-cache libpng-dev
docker-php-ext-install -j$(nproc) gd
EOF

WORKDIR /app

COPY . .

EXPOSE 8080

ENTRYPOINT ["php", "-S", "0.0.0.0:8080"]