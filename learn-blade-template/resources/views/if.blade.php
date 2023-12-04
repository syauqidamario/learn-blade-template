<html>
      <body>
            <p>
                  @if (count($hobbies) == 1)
                        I have one hobby!
                  @elseif (count($hobbies) > 1)
                        I have multiple hobbies!
                  @else
                        My hobby is a secret for you!
                  @endif
            </p>
      </body>
</html>