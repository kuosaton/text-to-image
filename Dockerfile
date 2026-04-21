FROM php:alpine

RUN <<EOF
apk add --no-cache libpng-dev
docker-php-ext-install -j$(nproc) gd
EOF

WORKDIR /app

COPY . .

EXPOSE 8000

ENTRYPOINT ["php", "-S", "0.0.0.0:8000"]