create table messages
(
    id      int auto_increment
        primary key,
    user    varchar(255)                          null,
    message text                                  null,
    date    timestamp default current_timestamp() null on update current_timestamp()
);

