<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
</head>
<body>
    <div class="row">
        @foreach ($products as $item)
        <div class="col-sm-3">
            <div class="card">
              <img class="card-img-top" src="{{ $item->image }}" alt="Card image cap">
              <div class="card-body">
              <h5 class="card-title">{{ $item->name }}</h5>
              <p class="card-text">{{ $item->description }}</p>

                {{-- authenticated user --}}
                @auth
                {{-- customer --}}
                @if (Auth::User()->type_id == 2)
                    <a href="#" class="btn btn-primary">Add To Cart</a>
                {{-- admin --}}
                @else
                <a href="/product/{{ $item->id }}/edit" class="btn btn-primary">Edit</a>
                <form style="display: inline;" action="/product/{{ $item->id }}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="submit" class="btn btn-primary" value="Delete">
                </form>
                @endif
                @endauth

                @guest
                    <a href="/login" class="btn btn-primary">Add to Cart</a>
                @endguest

                <button data-id="{{ $item->id }}" type="button" class="btn btn-primary details" data-toggle="modal" data-target="#detailsModal">View Details</button>

            </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="modal" tabindex="-1" role="dialog" id="detailsModal">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title"></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary">Save changes</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
    </div>
    <script>
        $('.details').click(function() {
            var id = $(this).data('id');
            $.ajax({
              url:"/product/"+id,
              type:'GET',
              dataType:'json',
              success: function(product){
                console.log(product)
                $('.modal-header').html("")
                $('.modal-header').append("<h5 class='modal-title' >Product Name : "+product.name+" , Category Name : "+product.category.name+"</h5>")
                $('.modal-body').html("")
                $('.modal-body').append("<p>"+product.description+"</p><img src='"+product.image+"'>")
              },
              error:function(x,y,z){
                  console.log('error')
              }
            });
        })

      </script>
</body>
</html>
