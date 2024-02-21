create table user(
    idUser int primary key auto_increment, 
    nameUser varchar (128), 
    email varchar (128),
    password varchar (512), 
    rolAdmin boolean
);

create table question(
    idQuestion int primary key auto_increment,
    descriptionQuestion varchar (4096)not null 
);

Create table naswerQuizz (
    idAnswer int primary key auto_increment,
    descriptionAnswer varchar (4096) not null,
    idQuestion int not null,
    foreign key (idQuestion) references question (idQuestion)
);

create table historyPoints (
    idHistory int primary key auto_increment,
    idUser int not null,
    idAnswer int not null,
    questionNumbers int not null,
    points int not null,
    numberQuestions int not null,
    optionAnswer int not null,
    idQuestion int not null,
    foreign key (idQuestion) references question (idQuestion),
    foreign key (idUser) references user(idUser)
);

create table answerHanged(
    idAnswerHangd int primary key auto_increment,
    descrptionAnswerHangd varchar (500)
);
