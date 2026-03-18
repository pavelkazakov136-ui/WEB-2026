PROGRAM PrintHello(INPUT, OUTPUT);
USES
  DOS;
VAR
   Query, Name: STRING;
   PosName: INTEGER;
BEGIN {PrintHello}
  WRITELN('Content-Type: text/plain');
  WRITELN;
  WRITELN('QUERY_STRING: ', GetEnv('QUERY_STRING'));
  WRITELN;
  Query := GetEnv('QUERY_STRING');
  PosName := Pos('name=', Query);
  IF PosName > 0
  THEN
    BEGIN
      Name := Copy(Query, PosName +5, Length(Query));     { начинаем с позиции PosName + 5 и копируем до конца строки Query }
      IF Name = ''
      THEN
        WRITELN('Hello Anonymous!')
      ELSE
        WRITELN('Hello dear, ', Name, '!')
    END
  ELSE
    WRITELN('Hello Anonymous!') 
END. {PrintHello}

