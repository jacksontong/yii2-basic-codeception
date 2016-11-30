FROM php:7.0
MAINTAINER Jackson Tong <tongtoan2704@gmail.com>

RUN apt-get update && apt-get install -qq -y build-essential --fix-missing --no-install-recommends

ENV INSTALL_PATH /yii2-codeception
RUN mkdir -p $INSTALL_PATH

WORKDIR $INSTALL_PATH

COPY . .

VOLUME ["web"]

CMD ["php", "-S", "localhost:8000", "web"]