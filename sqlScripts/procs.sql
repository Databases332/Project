USE heroku_9aece095e067a9a;

CREATE PROCEDURE getAvailableClasses (IN student_id INT)
BEGIN
    SELECT SessionId, Time 
        FROM ClassSession 
            INNER JOIN Class 
                ON ClassSession.ClassName = Class.Name 
            INNER JOIN Student 
                ON Student.StudentId = 1 
        WHERE ClassSession.ClassName NOT IN      
            ( SELECT ClassSession.ClassName 
                FROM ClassSession 
                    inner join GradeReport 
                        ON ClassSession.SessionId = GradeReport.SessionId 
                WHERE GradeReport.StudentId = 1 ) 
        AND ( Student.MajorId = Class.MajorId 
            OR Class.MajorId IS NULL ) 
        AND ( Class.PreRequisite IS NULL 
            OR Class.PreRequisite IN 
                ( SELECT ClassSession.ClassName 
                    FROM ClassSession 
                        inner join GradeReport 
                            ON ClassSession.SessionId = GradeReport.SessionId 
                        inner join Student 
                            ON Student.StudentId = 1 
                        inner join Class 
                            ON (Class.Name = ClassSession.ClassName) 
                    WHERE GradeReport.StudentId = Student.StudentId) ) 
        ORDER BY Time ASC;
END
