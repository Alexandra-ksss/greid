CREATE TABLE Groups
(
    Id INT PRIMARY KEY,
    Name VARCHAR(100)
)


CREATE TABLE Users
(
    Id INT PRIMARY KEY,
    Name VARCHAR(100) NOT NULL,
    Groups INT,
    FOREIGN KEY (Groups) REFERENCES Id(Groups) ON DELETE RESTRICT
)

INSERT INTO Groups (Id, Name)
VALUES (1, 'Группа 1'),
VALUES (2, 'Группа 2'),
VALUES (3, 'Группа 3');

INSERT INTO Users (Id, Name, Groups)
VALUES (1, 'Иван', 1),
VALUES (2, 'Петр', 1),
VALUES (3, 'Михаил', 2);

SELECT User.Name, Groups.Name FROM Users
LEFT JOIN Groups
ON Users.Groups = Group.Id;
