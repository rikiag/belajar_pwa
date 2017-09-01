<div class="row ">
  <!-- Dinamic Data Here -->
  <div class="book-cards">
    <center id="first-load">
      <div class="overlay">
        <div class="m-loader mr-20">
          <svg class="m-circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="4" stroke-miterlimit="10"/>
          </svg>
        </div>
        <h3 class="l-text">Loading</h3>
      </div>
    </center>
  </div>

</div>
<div class="row">
  <div class="col-xs-12 text-center">

    <a class="btn btn-primary" href="#"><i class="fa fa-lg fa-plus"></i></a>
  </div>
</div>

<script id="book-card" type="text/template">
  <div class="col-sm-6">
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