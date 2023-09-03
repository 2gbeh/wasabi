<style type="text/css">
/* The Modal (background) */
.wx-modal {
   display: none; 
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 120px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 420px;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

/* The Close Button */
.close {
  float: right;
  font-size: 28px;
  font-weight: normal;
  line-height: 0.4;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.modal-header {
  font-size: 12px;
}
.modal-header h2{
  margin: 0;
  padding: 0;
  margin-top: 5px;
  font-size: 18px;
  font-weight: normal;
}
.modal-body {
  padding: 2px 16px;
}

.modal-legend {
  margin: 10px 0;
  padding: 10px 15px;
  background-color: #e4f4ff;
  border-radius: 5px;
}
.modal-legend b {
  background-color: #e11;
  color: #fff;
  padding: 0px 5px;
  float:right;
}
.modal-lbl {
  margin: 15px 0 5px;
  display:block;
}
.modal-uli {
  color:#777;
  margin-right: 20px;
  display:inline-block;
}
.modal-lnk {
  margin: 5px 0 0 0;
  padding: 5px 10px;
  font-size:12px;
  display:inline-block;
  cursor: pointer;
}
.modal-lnk.active {
  border:1px solid #0093dd;
}
.wx-modal .box {
  border:1px solid #ddd;
  padding: 5px 10px;
  margin-top:10px;
}
.wx-modal .box table {
  width: 100%;
}
.wx-modal .box table tr th {
  text-align: center;
  font-size: 18px;
}
.wx-modal .box i {
  color:#999;
  cursor: pointer;
}
.wx-modal .note { 
  margin-top: 15px;
  color: #555;
  font-size: 12px;
}
.wx-modal .note a { 
  color: #0093dd;
  font-size: 12px;
}
.modal-btn { 
  background-color: #0093dd;
  color: #fff;
  display: block;
  text-align: center;
  margin-bottom: 20px;
  padding: 10px 0;
  font-weight: bold;
  border-radius:5px;
}
.modal-btn:hover { 
  background-color: #2443ac;
  color: #fff;
}
.wx-modal var {
  font-style: normal;
}

</style>

<div class="wx-modal" id="wx-modal">
  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close" onclick="hideModal()">
        &times;
      </span>
      <h2>Copy Summary</h2>
    </div>
    <div class="modal-body">
      <div class="modal-legend">
        Risk Warning
        <b id="m-risk">5</b>
      </div>
      <div class="modal-form">
        <b class="modal-lbl" id="m-username">Gamb1t</b>
          <span class="modal-uli">
            Fixed Margin
            <i class="fa fa-info-circle"></i>
          </span>
          <span class="modal-uli">Isolated Margin</span>

        <b class="modal-lbl" id="m-platform">Binance-1 Futures</b>
          <a class="modal-lnk active" id="m-copies">5,102.00</a>
          <a class="modal-lnk">Copies </a>   

        <b class="modal-lbl" id="m-roi">
          <abbr title="Returns On Investment">ROI</abbr> (30D)
        </b>
          <div class="box">
            <table border="0">
              <tr>
                <td>
                  <i class="fa fa-minus-circle"></i>
                </td>
                <th style="color:#2443ac;" id="m-rate">
                  +21.76%
                </th>
                <td align="right">
                  <i class="fa fa-plus-circle"></i>
                </td>
              </tr>
            </table>
          </div>

          <p class="note">
            Your funds are less than 25 USDT, <a href="deposit_next.php">deposit now</a> to start automatic copy trading.
          </p>

          <a href="deposit_next.php" class="modal-btn">Copy Now</a>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
// Get the modal
var modal = document.getElementById("wx-modal");
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

const fillModal = (i) => {
  const li = document.querySelectorAll('.copy-trading ul li')[i];
  let arr = ['risk','username','platform','copies','roi','rate'];

  arr.forEach((e) => {
    document.querySelector(`#m-${e}`).innerHTML = li.querySelector(`#l-${e}`).innerHTML;
  });
}

const showModal = (i) => {
  modal.style.display = "block";
  fillModal(i);  
}
const hideModal = () => {
  modal.style.display = "none";
}
</script>