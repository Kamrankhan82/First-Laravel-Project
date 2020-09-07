<html>
<head>
    <title></title>
    </head>
<body>
  <div> <ul>
       @foreach($data as $item)
    <li>{{$item->item_name}}</li>
       @endforeach
    </ul>
      </div>
    <div>
    {{$data->links()}}
    </div>
    </body>
</html>