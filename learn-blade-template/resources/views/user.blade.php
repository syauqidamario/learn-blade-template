@once
      <style>
            .red
            {
                  color:red;
            }
      </style>
@endonce

<h1>
      {{$user['name']}}
</h1>
      @foreach($user['hobbies'] as $hobby)
            <li class="red">{{$hobby}}</li>
      @endforeach
</ul>