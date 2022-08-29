<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <a href="{{route('companie.create')  }}">Add new Company</a>     
    <table border="1">
    <thead>
        <tr>
            <td>No</td>
            <td>Name</td>
            <td>Email</td>
            <td>Logo</td>
            <td>website</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $companie)
        <tr>
            <td>{{++$i}}</td>
            <td>{{$companie->name}}</td>
            <td>{{$companie->email}}</td>
            <td><img src="/images/{{$companie->logo}}" alt="" class="companie-logo"></td>
            <td>{{$companie->website}}</td>
            <td>
                <form action="{{route('companie.destroy',$companie->id)  }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="{{route('companie.edit',$companie->id)}}" >Edit</a>
                    <button type="submit" >Delete</button>
                </form>
            <td>
        </tr>   
        @endforeach
        
    </tbody>
   </table>
   {{ $data->links()  }} 
</body>
</html>