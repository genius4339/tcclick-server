<form method="post">
  <div class="row">
    <label for='form_name'>统计站名称：</label>
    <input id='form_name' name="name" size="60" value='<?php echo $site->name ?>'/>
  </div>
  <div class="row">
    <label for='form_code'>访问码：</label>
    <input id='form_code' name="code" size="60" value='<?php echo $site->code ?>' placeholder='请输入40位外部访问码'/>
  </div>
  <div class="row">
    <label for='form_url'>URL地址：</label>
    <input id='form_url' name="url" size="60" value='<?php echo $site->url ?>'/>
  </div>
  <div class="row">
    <label for='form_code'>排序权重：</label>
    <input id='form_code' name="weight" size="10" value='<?php echo $site->weight ?>' placeholder='数字越小，排序越靠前'/>
  </div>
  <div class="row">
    <label>是否计算共同用户：</label>
    <label style="width:auto; margin-right:30px;">
      <input type="radio" name="calculate_mutual_devices"
             value="1" <?php if($site->calculate_mutual_devices) echo 'checked' ?>/>
      计算
    </label>
    <label style="width:auto;">
      <input type="radio" name="calculate_mutual_devices"
             value="0" <?php if(!$site->calculate_mutual_devices) echo 'checked' ?>/>
      不计算
    </label>
  </div>
  <div class="row submit">
    <input type="submit" value="提交"/>
  </div>
</form>
<style>form .row label{ width:150px; }</style>