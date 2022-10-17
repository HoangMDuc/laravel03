<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <form method="post">
                <div class="mb-3">
                    <label for="txtID" class="form-label">Student id</label>
                    <input type="text" class="form-control" id="txtID" name="txtID" value={{$data->id}}
                        aria-describedby="emailHelp" readonly>
                </div>
                <div class="mb-3">
                    <label for="txtName" class="form-label">Fullname</label>
                    <input type="text" class="form-control" name="txtName" value={{$data->fullname}} id="txtName">
                </div>
                <div class="mb-3">
                    <label for="birthday" class="form-label">Birthday</label>
                    <input type="date" class="form-control" name="birthday" value={{$data->birthday}} id="birthday">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="txtAddress">Address</label>
                    <input type="text" class="form-control" name="txtAddress" id="txtAddress" value={{$data->address}}>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                @csrf
                @method('PUT')
            </form>
        </div>
    </div>
    </script>

</body>

</html>
