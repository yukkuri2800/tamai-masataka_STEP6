FROM php:8.2-cli

# index.php をコンテナ内にコピー
COPY index.php /var/www/html/index.php

# PHP の組み込み Web サーバーを起動
CMD ["php", "-S", "0.0.0.0:80", "-t", "/var/www/html"]
