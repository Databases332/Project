USE scheduler;

INSERT INTO Major (Name, MajorId)
VALUES ('Computer Science', 1); 

INSERT INTO Major (Name, MajorId)
VALUES ('Engineering', 2); 

-- Computer Science Courses
INSERT INTO Class (Name, PreRequisite, MajorId)
VALUES ('CPSC101', NULL, 1); 

	INSERT INTO ClassSession (ClassName, SessionId, Time)
	VALUES ('CPSC101', 1, 1); 

	INSERT INTO ClassSession (ClassName, SessionId, Time)
	VALUES ('CPSC101', 49, 1); 

INSERT INTO Class (Name, PreRequisite, MajorId)
VALUES ('CPSC121', 'CPSC101', 1); 

	INSERT INTO ClassSession (ClassName, SessionId, Time)
	VALUES ('CPSC121', 2, 2); 

	INSERT INTO ClassSession (ClassName, SessionId, Time)
	VALUES ('CPSC121', 50, 2); 

INSERT INTO Class (Name, PreRequisite, MajorId)
VALUES ('CPSC131', 'CPSC121', 1); 

	INSERT INTO ClassSession (ClassName, SessionId, Time)
	VALUES ('CPSC131', 3, 3); 

	INSERT INTO ClassSession (ClassName, SessionId, Time)
	VALUES ('CPSC131', 51, 3); 

INSERT INTO Class (Name, PreRequisite, MajorId)
VALUES ('CPSC301', 'CPSC131', 1); 

	INSERT INTO ClassSession (ClassName, SessionId, Time)
	VALUES ('CPSC301', 4, 4); 

INSERT INTO Class (Name, PreRequisite, MajorId)
VALUES ('CPSC312', 'CPSC131', 1); 

	INSERT INTO ClassSession (ClassName, SessionId, Time)
	VALUES ('CPSC312', 5, 5); 

INSERT INTO Class (Name, PreRequisite, MajorId)
VALUES ('CPSC331', 'CPSC131', 1); 

	INSERT INTO ClassSession (ClassName, SessionId, Time)
	VALUES ('CPSC331', 6, 6); 

INSERT INTO Class (Name, PreRequisite, MajorId)
VALUES ('CPSC332', 'CPSC131', 1); 

	INSERT INTO ClassSession (ClassName, SessionId, Time)
	VALUES ('CPSC332', 7, 1); 

INSERT INTO Class (Name, PreRequisite, MajorId)
VALUES ('CPSC333', 'CPSC131', 1); 

	INSERT INTO ClassSession (ClassName, SessionId, Time)
	VALUES ('CPSC333', 8, 2); 

INSERT INTO Class (Name, PreRequisite, MajorId)
VALUES ('CPSC345', 'CPSC131', 1); 

	INSERT INTO ClassSession (ClassName, SessionId, Time)
	VALUES ('CPSC345', 9, 3); 

INSERT INTO Class (Name, PreRequisite, MajorId)
VALUES ('CPSC401',  'CPSC131', 1); 

	INSERT INTO ClassSession (ClassName, SessionId, Time)
	VALUES ('CPSC401', 10, 4); 

INSERT INTO Class (Name, PreRequisite, MajorId)
VALUES ('CPSC412',  'CPSC131', 1); 

	INSERT INTO ClassSession (ClassName, SessionId, Time)
	VALUES ('CPSC412',  11, 5); 

INSERT INTO Class (Name, PreRequisite, MajorId)
VALUES ('CPSC423',  'CPSC131', 1); 

	INSERT INTO ClassSession (ClassName, SessionId, Time)
	VALUES ('CPSC423',  12, 6); 

INSERT INTO Class (Name, PreRequisite, MajorId)
VALUES ('CPSC433',  'CPSC131', 1); 

	INSERT INTO ClassSession (ClassName, SessionId, Time)
	VALUES ('CPSC433',  13, 1); 

INSERT INTO Class (Name, PreRequisite, MajorId)
VALUES ('CPSC454',  'CPSC131', 1); 

	INSERT INTO ClassSession (ClassName, SessionId, Time)
	VALUES ('CPSC454',  14, 2); 

INSERT INTO Class (Name, PreRequisite, MajorId)
VALUES ('CPSC501',  'CPSC454', 1); 

	INSERT INTO ClassSession (ClassName, SessionId, Time)
	VALUES ('CPSC501',  15, 3); 

INSERT INTO Class (Name, PreRequisite, MajorId)
VALUES ('CPSC551',  'CPSC454', 1); 

	INSERT INTO ClassSession (ClassName, SessionId, Time)
	VALUES ('CPSC551',  16, 4); 

-- Engineering Courses
INSERT INTO Class (Name, PreRequisite, MajorId)
VALUES ('ENG101',  NULL, 2); 

	INSERT INTO ClassSession (ClassName, SessionId, Time)
	VALUES ('ENG101', 17, 5); 

INSERT INTO Class (Name, PreRequisite, MajorId)
VALUES ('ENG121',  'ENG101', 2); 

	INSERT INTO ClassSession (ClassName, SessionId, Time)
	VALUES ('ENG121', 18, 6); 

INSERT INTO Class (Name, PreRequisite, MajorId)
VALUES ('ENG131',  'ENG121', 2); 

	INSERT INTO ClassSession (ClassName, SessionId, Time)
	VALUES ('ENG131', 19, 1); 

INSERT INTO Class (Name, PreRequisite, MajorId)
VALUES ('ENG301',  'ENG131', 2); 

	INSERT INTO ClassSession (ClassName, SessionId, Time)
	VALUES ('ENG301', 20, 2); 

INSERT INTO Class (Name, PreRequisite, MajorId)
VALUES ('ENG312',  'ENG131', 2); 

	INSERT INTO ClassSession (ClassName, SessionId, Time)
	VALUES ('ENG312', 21, 3); 

INSERT INTO Class (Name, PreRequisite, MajorId)
VALUES ('ENG331',  'ENG131', 2); 

	INSERT INTO ClassSession (ClassName, SessionId, Time)
	VALUES ('ENG331', 22, 4); 

INSERT INTO Class (Name, PreRequisite, MajorId)
VALUES ('ENG332',  'ENG131', 2); 

	INSERT INTO ClassSession (ClassName, SessionId, Time)
	VALUES ('ENG332', 23, 5); 

INSERT INTO Class (Name, PreRequisite, MajorId)
VALUES ('ENG333',  'ENG131', 2); 

	INSERT INTO ClassSession (ClassName, SessionId, Time)
	VALUES ('ENG333', 24, 6); 

INSERT INTO Class (Name, PreRequisite, MajorId)
VALUES ('ENG345',  'ENG131', 2); 

	INSERT INTO ClassSession (ClassName, SessionId, Time)
	VALUES ('ENG345', 25, 1); 

INSERT INTO Class (Name, PreRequisite, MajorId)
VALUES ('ENG401',  'ENG131', 2); 

	INSERT INTO ClassSession (ClassName, SessionId, Time)
	VALUES ('ENG401', 26, 2); 

INSERT INTO Class (Name, PreRequisite, MajorId)
VALUES ('ENG412',  'ENG131', 2); 

	INSERT INTO ClassSession (ClassName, SessionId, Time)
	VALUES ('ENG412', 27, 3); 

INSERT INTO Class (Name, PreRequisite, MajorId)
VALUES ('ENG423',  'ENG131', 2); 

	INSERT INTO ClassSession (ClassName, SessionId, Time)
	VALUES ('ENG423', 28, 4); 

INSERT INTO Class (Name, PreRequisite, MajorId)
VALUES ('ENG433',  'ENG131', 2); 

	INSERT INTO ClassSession (ClassName, SessionId, Time)
	VALUES ('ENG433', 29, 5); 

INSERT INTO Class (Name, PreRequisite, MajorId)
VALUES ('ENG454',  'ENG131', 2); 

	INSERT INTO ClassSession (ClassName, SessionId, Time)
	VALUES ('ENG454', 30, 6); 

INSERT INTO Class (Name, PreRequisite, MajorId)
VALUES ('ENG501',  'ENG454', 2); 

	INSERT INTO ClassSession (ClassName, SessionId, Time)
	VALUES ('ENG501', 31, 1); 

INSERT INTO Class (Name, PreRequisite, MajorId)
VALUES ('ENG551',  'ENG454', 2); 

	INSERT INTO ClassSession (ClassName, SessionId, Time)
	VALUES ('ENG551', 32, 2); 

-- GE Courses
INSERT INTO Class (Name, PreRequisite, MajorId)
VALUES ('GEN101',  NULL, NULL); 

	INSERT INTO ClassSession (ClassName, SessionId, Time)
	VALUES ('GEN101', 33, 1); 

INSERT INTO Class (Name, PreRequisite, MajorId)
VALUES ('GEN121',  NULL, NULL); 

	INSERT INTO ClassSession (ClassName, SessionId, Time)
	VALUES ('GEN121', 34, 2); 

INSERT INTO Class (Name, PreRequisite, MajorId)
VALUES ('GEN131',  NULL, NULL); 

	INSERT INTO ClassSession (ClassName, SessionId, Time)
	VALUES ('GEN131', 35, 3); 

INSERT INTO Class (Name, PreRequisite, MajorId)
VALUES ('GEN301',  NULL, NULL); 

	INSERT INTO ClassSession (ClassName, SessionId, Time)
	VALUES ('GEN301', 36, 4); 

INSERT INTO Class (Name, PreRequisite, MajorId)
VALUES ('GEN312',  NULL, NULL); 

	INSERT INTO ClassSession (ClassName, SessionId, Time)
	VALUES ('GEN312', 37, 5); 

INSERT INTO Class (Name, PreRequisite, MajorId)
VALUES ('GEN331',  NULL, NULL); 

	INSERT INTO ClassSession (ClassName, SessionId, Time)
	VALUES ('GEN331', 38, 6); 

INSERT INTO Class (Name, PreRequisite, MajorId)
VALUES ('GEN332',  NULL, NULL); 

	INSERT INTO ClassSession (ClassName, SessionId, Time)
	VALUES ('GEN332', 39, 1); 

INSERT INTO Class (Name, PreRequisite, MajorId)
VALUES ('GEN333',  NULL, NULL); 

	INSERT INTO ClassSession (ClassName, SessionId, Time)
	VALUES ('GEN333', 40, 2); 

INSERT INTO Class (Name, PreRequisite, MajorId)
VALUES ('GEN345',  NULL, NULL); 

	INSERT INTO ClassSession (ClassName, SessionId, Time)
	VALUES ('GEN345', 41, 3); 

INSERT INTO Class (Name, PreRequisite, MajorId)
VALUES ('GEN401',  NULL, NULL); 

	INSERT INTO ClassSession (ClassName, SessionId, Time)
	VALUES ('GEN401', 42, 4); 

INSERT INTO Class (Name, PreRequisite, MajorId)
VALUES ('GEN412',  NULL, NULL); 

	INSERT INTO ClassSession (ClassName, SessionId, Time)
	VALUES ('GEN412', 43, 5); 

INSERT INTO Class (Name, PreRequisite, MajorId)
VALUES ('GEN423',  NULL, NULL); 

	INSERT INTO ClassSession (ClassName, SessionId, Time)
	VALUES ('GEN423', 44, 6); 

INSERT INTO Class (Name, PreRequisite, MajorId)
VALUES ('GEN433',  NULL, NULL); 

	INSERT INTO ClassSession (ClassName, SessionId, Time)
	VALUES ('GEN433', 45, 1); 

INSERT INTO Class (Name, PreRequisite, MajorId)
VALUES ('GEN454',  NULL, NULL); 

	INSERT INTO ClassSession (ClassName, SessionId, Time)
	VALUES ('GEN454', 46, 2); 

INSERT INTO Class (Name, PreRequisite, MajorId)
VALUES ('GEN501',  NULL, NULL); 

	INSERT INTO ClassSession (ClassName, SessionId, Time)
	VALUES ('GEN501', 47, 3); 

INSERT INTO Class (Name, PreRequisite, MajorId)
VALUES ('GEN551',  NULL, NULL); 

	INSERT INTO ClassSession (ClassName, SessionId, Time)
	VALUES ('GEN551', 48, 4); 

-- Student 1 
INSERT INTO Student (Name, MajorId, StudentId)
VALUES ('John Smith', 1, 1); 

-- Grades

INSERT INTO GradeReport (SessionId, StudentId)
VALUES (49, 1); 

INSERT INTO GradeReport (SessionId, StudentId)
VALUES (50, 1); 

INSERT INTO GradeReport (SessionId, StudentId)
VALUES (51, 1); 

INSERT INTO GradeReport (SessionId, StudentId)
VALUES (36, 1); 

INSERT INTO GradeReport (SessionId, StudentId)
VALUES (43, 1); 

INSERT INTO GradeReport (SessionId, StudentId)
VALUES (44, 1); 

-- Student 2 
INSERT INTO Student (Name, MajorId, StudentId)
VALUES ('Sarah Jane', 2, 2); 

-- Grades

INSERT INTO GradeReport (SessionId, StudentId)
VALUES (17, 2); 

INSERT INTO GradeReport (SessionId, StudentId)
VALUES (18, 2); 

INSERT INTO GradeReport (SessionId, StudentId)
VALUES (19, 2); 

INSERT INTO GradeReport (SessionId, StudentId)
VALUES (36, 2); 

INSERT INTO GradeReport (SessionId, StudentId)
VALUES (43, 2); 

INSERT INTO GradeReport (SessionId, StudentId)
VALUES (44, 2); 

INSERT INTO GradeReport (SessionId, StudentId)
VALUES (20, 2); 

INSERT INTO GradeReport (SessionId, StudentId)
VALUES (21, 2); 

INSERT INTO GradeReport (SessionId, StudentId)
VALUES (22, 2); 

INSERT INTO GradeReport (SessionId, StudentId)
VALUES (23, 2); 

INSERT INTO GradeReport (SessionId, StudentId)
VALUES (24, 2); 

INSERT INTO GradeReport (SessionId, StudentId)
VALUES (25, 2); 


