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
    <a href="{{route('employee.create')  }}">Add new Employee</a>     
    <table border="1">
    <thead>
        <tr>
            <td>No</td>
            <td>Name</td>
            <td>Company</td>
            <td>Email</td>
            <td>Phone</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $employee)
        <tr>
            {{-- <td>{{++$i}}</td> --}}
            <td>{{$employee->id}}</td>
            <td>{{$employee->first_name}}{{$employee->last_name}}</td>
            <td>{{$employee->companie->name}}</td>
            <td>{{$employee->email}}</td>
            <td>{{$employee->phone}}</td>
            <td>
                <form action="{{route('employee.destroy',$employee->id)  }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="{{route('employee.edit',$employee->id)}}" >Edit</a>
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