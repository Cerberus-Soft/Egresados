CREATE TABLE egresado (Matricula INT PRIMARY KEY, 
                    CURP VARCHAR NOT NULL(15),
                    Nombre VARCHAR(35) NOT NULL,
                    Apellido_Paterno VARCHAR(35) NOT NULL,
                    Apellido_Materno VARCHAR(35) NOT NULL);

INSERT INTO egresado (Matricula,CURP,Nombre,Apellido_Paterno,Apellido_Materno)
VALUES (091310627,'TOAM940808','L','Riuzaly','L');
