<?PHP
$pages = '';
for ($i = 1; $i <= 3; $i++) {
    if (!isset($_GET['page'])) {
        $is_active = $i == 1 ? 'active' : '';
    } else {
        $is_active = $_GET['page'] == $i ? 'active' : '';
    }

    $pages .= '<li>
      <a href="?page=' . $i . '" class="' . $is_active . '" title="Page ' . $i . '">
        ' . $i . '
      </a>
    </li>';
}
?>
<style type="text/css">
.wx-pager {
  margin: 0 auto;
  width: 640px;
  text-align: center;
}
.wx-pager ul li {
  margin: 0 2px;
  display: inline-block;
}
.wx-pager ul li a {
  border-radius: 100%;
  border:2px solid transparent;
  padding: 4px 10px;
  font-weight: bold;
  display: block;
  cursor: pointer;
}
.wx-pager ul li:first-child a {
  color: #999;
  border-color: #ccc;
}
.wx-pager ul li:last-child a {
  border-color: #ccc;
}
.wx-pager ul li a.active {
  background-color: #0093dd;
  color: #fff;
  border-color: #0093dd;
}
.wx-pager h2 {
  margin: 0;
  padding: 0;
}

</style>
<div class="wx-pager" id="wx-pager">
  <ul>
    <li>
      <a href="?prev=true" title="Previous">
        &lt;
      </a>
    </li>
    <?=$pages?>
    <!-- <li>
      <a href="?page=1" class="active">
        1
      </a>
    </li> -->
    <li>
      <h2>...</h2>
    </li>
    <li>
      <a title="Page 25">
        25
      </a>
    </li>
    <li>
      <a href="?next=true" title="Next">
        &gt;
      </a>
    </li>
  </ul>
</div>