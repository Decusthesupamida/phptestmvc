<div style ="display: grid; grid-template-columns: 100%;">
<button  type="button" onclick = "redirOnAddArticle()" class="btn btn-success">NEW ARTICLE</button>
</div>
<div style ="min-height: auto;" class="wrapper">
<div id="formContent">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Author</th>
      <th scope="col">Article</th>
      <th scope="col">Result</th>
      <th scope="col">Admin</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($data as $row){?>
    <tr>
      <td><? echo $row["author"]; ?></td>
      <td><? echo $row["body"]; ?></td>
      <td><? echo $row["result"]; ?></td>
      <td><div style ="margin-left:20px;" class="form-check">
    <input type="checkbox" disabled class="form-check-input" id="exampleCheck1">
    
   
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
    function redirOnAddArticle() {
        location="http://testbeejee/main/add";
            
        document.location.href="http://testbeejee/main/add";
        
        location.replace("http://testbeejee/main/add");
        
        window.location.reload("http://testbeejee/main/add");
        
        document.location.replace("http://testbeejee/main/add");
    }
</script>