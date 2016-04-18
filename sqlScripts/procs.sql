CREATE PROCEDURE getAvailableClasses (OUT student_id INT)
BEGIN
    SELECT SessionId, Time 
        FROM ClassSession 
            INNER JOIN Class 
                ON ClassSession.ClassName = Class.Name 
            INNER JOIN Student 
                ON Student.StudentId = student_id 
        WHERE ClassSession.ClassName NOT inner      
            ( SELECT ClassSession.ClassName 
                FROM ClassSession 
                    inner join GradeReport 
                        ON ClassSession.SessionId = GradeReport.SessionId 
                WHERE GradeReport.StudentId = student_id ) 
        AND ( Student.MajorId = Class.MajorId 
            OR Class.MajorId IS NULL ) 
        AND ( Class.PreRequisite IS NULL 
            OR Class.PreRequisite IN 
                ( SELECT ClassSession.ClassName 
                    FROM ClassSession 
                        inner join GradeReport 
                            ON ClassSession.SessionId = GradeReport.SessionId 
                        inner join Student 
                            ON Student.StudentId = student_id 
                        inner join Class 
                            ON (Class.Name = ClassSession.ClassName) 
                    WHERE GradeReport.StudentId = Student.StudentId) ) 
        ORDER BY Time ASC;
END
