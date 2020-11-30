<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form method="POST" action="/product/{{ $product->id }}">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <div class="form-group">
          <label for="exampleFormControlInput1">Product Name</label>
        <input type="text" value="{{ $product->name }}" name="name" class="form-control" id="exampleFormControlInput1" placeholder="name">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Product Description</label>
            <input type="text" value="{{ $product->description }}" name="description" class="form-control" id="exampleFormControlInput1" placeholder="name">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Select Category</label>
            <select name="category" class="form-control" id="exampleFormControlSelect1">
                {{-- <option value="1">dff</option>
                <option selected value="2">sdgg</option>
                <option value="3">fj</option> --}}
              @foreach ($categories as $item)
                <option
                    @if ($item->id == $product->category_id)
                        selected
                    @endif
                    value="{{ $item->id }}">{{ $item->name  }}
                </option>
              @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
</body>
</html>
