<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pivot table</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          {{Form::open(array('url'=>'brand/create','files'=>true))}}
          <div class="form-group">
            <label for="">Brand</label>
            <input type="text" name="brand" class="form-control input-sm" value="">
         </div>

         <!--Category dropdown -->
         <div class="form-group">
            <label for="">Category</label>
            <select class="input-sm" name="categories[]">
                @foreach($categories as $category)
                 <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
            <a href="#" class="btn btn-danger btn-xs btn-remove-cat">Remove</a>
         </div>
               <a href="#" class="btn btn-info btn-sm btn-add-cat">Add more Category</a>
               <button class="btn btn-sm btn-primary">Save</button>
              {{Form::close()}}

        </div>

      <div class="clearfix"></div>


      <div class="col-sm-5">
        <ul>
            @foreach($brands as $brand)
            <li><a href="#" >{{$brand->name}}</a></li>
            @endforeach
        </ul>

      </div>

      </div>




    </div>


  </body>
</html>
