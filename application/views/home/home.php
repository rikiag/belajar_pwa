<div class="row ">
  <!-- Dinamic Data Here -->
  <div class="book-cards">
    
  </div>

</div>
<div class="row">
  <div class="col-xs-12 text-center">

    <a class="btn btn-primary" href="#"><i class="fa fa-lg fa-plus"></i></a>
  </div>
</div>

<script id="book-card" type="text/template">
  <div class="col-md-6">
    <div class="card">
      <div class="card-title-w-btn">
        <h3 class="title">{{title}}</h3>
        <div class="btn-group">
          <a class="btn btn-info" href="#"><i class="fa fa-lg fa-edit"></i></a>
          <a class="btn btn-warning" href="#"><i class="fa fa-lg fa-trash"></i></a>
        </div>
      </div>
      <div class="card-body">
        <p><strong>Year: </strong>{{year}}</p>
        <p><strong>Author: </strong>{{author}}</p>
        <p><strong>Publisher: </strong>{{publisher}}</p>
      </div>
      <div class="card-footer"><a class="btn btn-primary" href="#">More Detail</a></div>
    </div>
  </div>
</script>