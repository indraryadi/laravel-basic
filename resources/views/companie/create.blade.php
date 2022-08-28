<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{route('companie.index')  }}">Back</a>
    <form action="{{route('companie.store')  }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name='name' placeholder="Company name"><br>
        {{$errors->first('name')  }}<br>
        <input type="email" name='email' placeholder="Company email"><br>
        {{$errors->first('email')  }}<br>
        <input type="file" name="logo" placeholder="company logo"><br>
        {{$errors->first('logo')  }}<br>
        <input type="text" name="website" placeholder="company webiste"><br>
        {{$errors->first('website')  }}<br>
        <button type="submit" name="submit">Add</button>
    </form>
    
</body>
</html>