FROM alpine:3.14

ENV POSTGRES_DB=mybase
ENV POSTGRES_USER=riad
ENV POSTGRES_PASSWORD=riad

RUN apk update && \
    apk add --no-cache postgresql postgresql-contrib && \
    mkdir -p /run/postgresql && \
    chown -R postgres:postgres /run/postgresql && \
    mkdir -p /var/lib/postgresql/data && \
    chown -R postgres:postgres /var/lib/postgresql/data && \
    chmod 700 /var/lib/postgresql/data && \
    su - postgres -c "initdb -D /var/lib/postgresql/data"

VOLUME /var/lib/postgresql/data

USER postgres

CMD ["postgres", "-D", "/var/lib/postgresql/data"]

EXPOSE 5432
