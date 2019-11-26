<button type="button" class="btn btn-success">Success</button>
<div class="wrapper">
<div id="formContent">
<table class="table">
  <thead>
    <tr>
      <th scope="col">  <a style ="text-decoration : none;" href="#">Author</a> </th>
      <th scope="col"> <a href="">Article</a> </th>
      <th scope="col"><a href="">Result</a> </th>
      <th scope="col"> <a href="">Admin</a></th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($data['article'] as $row){?>
    <tr>
      <td><? echo $row["author"]; ?></td>
      <td><? echo $row["body"]; ?></td>
      <td><? echo $row["result"]; ?></td>
      <td><div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <a href=""> <i class="fa fa-cog fa-spin" style="font-size:20px"></i></a>
  </div></td>
    </tr>
  <?php }?>
  </tbody>
</table>
<nav style = "margin-left: 100px;" aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>
</div>
</div>
<script>

</script>