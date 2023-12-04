<html>
      <body>
            @while($i < 100)
            The current value is {{ $i }}
            @php
                  $i++;
            @endphp
            @endwhile
      </body>
</html>