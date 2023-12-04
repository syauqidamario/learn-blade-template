<html>
      <body>
            <ul>
                  @forelse($hobbies as $hobby)
                      <li>{{ $hobby }}</li>
                  @empty
                      <li>No Hobbies Here</li>
                  @endforelse
            </ul>
      </body>
</html>