PROGRAM SarahRevere(INPUT, OUTPUT);
USES
  DOS;
VAR
   Ch: CHAR;
   Query: STRING;
BEGIN {PrintHello}
  WRITELN('Content-Type: text/plain');
  WRITELN;
  WRITELN('QUERY_STRING: ', GetEnv('QUERY_STRING'));
  WRITELN;
  Query := GetEnv('QUERY_STRING');
  IF Query = 'lanterns=1'
  THEN
    WRITELN('The British are coming by land.')
  ELSE
    IF Query = 'lanterns=2'
    THEN
      WRITELN('The British are coming by sea.')
    ELSE
      WRITELN('The North Church window is dark (Incomplete data).') 
END. {PrintHello}          

