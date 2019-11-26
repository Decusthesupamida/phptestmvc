<form action="/main/addarticle" method = "POST" >
<div style ="min-height: auto;" class="wrapper">
<div id="formContent">
  <div class="form-group">
    <input name = "mail" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <input  name = "login" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter login">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Article</label>
    <textarea name = "body" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div style ="display: grid; grid-template-columns: 100%;">
<button  type="submit" class="btn btn-success">ADD ARTICLE</button>
</div>
</div>
</div>
</form>

