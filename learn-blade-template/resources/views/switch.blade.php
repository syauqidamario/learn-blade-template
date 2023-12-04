<html
<body>
      @switch($value)
            @case('O')
                  Outstanding
                  @break
            @case('E')
                  Exceeds Expectations
                  @break
            @case('A')
                  Acceptable
                  @break
            @default
                  Not Pass
      @endswitch
</body>
></html>