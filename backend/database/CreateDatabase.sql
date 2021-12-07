IF NOT EXISTS (SELECT *
FROM sys.databases
WHERE name = 'laracrud')
BEGIN
    CREATE DATABASE laracrud;
END;
GO
