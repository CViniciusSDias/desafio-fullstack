CREATE TABLE professores (
  id INTEGER PRIMARY KEY, -- SQLITE não precisa de AUTOINCREMENT (https://www.sqlite.org/autoinc.html)
  nome TEXT NOT NULL --VARCHAR não existe em SQLITE (https://www.sqlite.org/datatype3.html)
);

CREATE TABLE salas (
  id INTEGER PRIMARY KEY,
  numero INTEGER NOT NULL
);

CREATE TABLE cursos (
  id INTEGER PRIMARY KEY,
  nome TEXT NOT NULL,
  hora_inicio TEXT NOT NULL, -- Campos de DateTime não existem em SQLITE (https://www.sqlite.org/datatype3.html)
  hora_fim TEXT NOT NULL, -- Campos de DateTime não existem em SQLITE (https://www.sqlite.org/datatype3.html)
  professor INTEGER NOT NULL,
  sala INTEGER NOT NULL,
  FOREIGN KEY (professor) REFERENCES professores(id),
  FOREIGN KEY (sala) REFERENCES salas(id)
);
