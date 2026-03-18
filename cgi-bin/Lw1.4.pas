PROGRAM PrintHello(INPUT, OUTPUT);
USES
  DOS;
BEGIN {PrintHello}
  WRITELN('Content-Type: text/plain');
  WRITELN;
  WRITELN('REQUEST_METHOD: ', GetEnv('REQUEST_METHOD'));
  WRITELN;
  WRITELN('QUERY_STRING: ', GetEnv('QUERY_STRING'));
  WRITELN;
  WRITELN('CONTENT_LENGTH: ', GetEnv('CONTENT_LENGTH'));
  WRITELN;      
  WRITELN('HTTP_USER_AGENT: ', GetEnv('HTTP_USER_AGENT'));
  WRITELN;
  WRITELN('HTTP_HOST: ', GetEnv('HTTP_HOST'));
  WRITELN;
  WRITELN('Hello world!');
END. {PrintHello}           

