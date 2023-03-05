CREATE TABLE Details(
    num_matricule VARCHAR(8),
    reputation INT,
    nb_question INT,
    nb_reponse INT,
    nb_vote INT,
    PRIMARY KEY(num_matricule)
);
CREATE TABLE questions(
    id_question INT,
    num_matricule VARCHAR(8),
    contenu TEXT,
    id_tag INT,
    nb_vote INT,
    date_post DATE,
    PRIMARY KEY(id_question)
);
CREATE TABLE reponses(
    id_reponse INT,
    id_question INT,
    num_matricule VARCHAR(8),
    contenu TEXT,
    nb_vote INT,
    date_reponse DATE,
    PRIMARY KEY(id_reponse,id_question)
);
CREATE TABLE tag(
    id_tag INT,
    contexte VARCHAR(100),
    PRIMARY KEY(id_tag)
);
