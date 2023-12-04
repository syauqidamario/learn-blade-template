<html>
      <body>
            <p>
                  @isset($name)
                        Hello, my name is {{$name}}
                  @endisset
            </p>
            <p>
                  @empty($relationship)
                        Not in a relationship.
                  @endempty
            </p>
      </body>
</html>