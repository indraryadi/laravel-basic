<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{route('employee.index')  }}">Back</a>
    <form action="{{route('employee.store')  }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name='name' placeholder="Employee name"><br>
        {{$errors->first('name')  }}<br>
        <select name="company_id" id="">
            @foreach ($data as $item)
                <option value="{{$item->id  }}">{{$item->name}}</option>
            @endforeach
        </select><br> 
        <input type="email" name='email' placeholder="Employee email"><br>
        {{$errors->first('email')  }}<br>
        <input type="text" name="phone" placeholder="Employee phone"><br>
        {{$errors->first('phone')  }}<br>
        <button type="submit" name="submit">Add</button>
    </form>
    
</body>
</html>