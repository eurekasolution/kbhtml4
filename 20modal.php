

<div class="container-fluid kbstarbg">
    <div class="row p-0 m-0">
        <div class="col text-center p-0 m-0">
            menu1, menu2, menu3, menu4
        </div>
    </div>
</div>    

<div class="container-fluid kbstarbg">
	<div class="row">
        <div class="col">
            <img src="./data/img/kbstar.png" class="img-fluid">
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
	<div class="container">
		<a class="navbar-brand" href="#">
			<span class="material-icons icon">home</span>
		</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuBar">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="menuBar">
			<ul class="navbar-nav">
				<li class="nav-item dropdown ms-4">
					<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">HTML</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="./01.html">01.html</a></li>
						<li><a class="dropdown-item" href="./02Form.html">02Form.html</a></li>
						<li><a class="dropdown-item" href="#">A third link</a></li>
					</ul>
				</li>

				<li class="nav-item dropdown ms-4">
					<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">JavaScript</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="#">Link4</a></li>
						<li><a class="dropdown-item" href="#">Another link</a></li>
						<li><a class="dropdown-item" href="#">A third link</a></li>
					</ul>
				</li>


			</ul>
		</div>
	</div>
</nav>

	<div class="container"> <!--Container : 양쪽에 여백을 적당하게 남겨둔다-->
		<div class="row">
			<div class="col">
				<h4 class="text-primary">
					<span class="material-icons icon">double_arrow</span>input</h4> 
			</div>
		</div>

		<div class="row">
			<div class="col">
				<button type="button" class="btn btn-primary form-control" data-bs-toggle="modal" data-bs-target="#kbstarModal">모달Toggle</button>
			</div>
		</div>

<!-- The Modal -->
<div class="modal" id="kbstarModal">
	<div class="modal-dialog">
	  <div class="modal-content">
  
		<!-- Modal Header -->
		<div class="modal-header">
		  <h5 class="modal-title text-primary"> <span class="material-icons icon">settings</span> 회원 로그인</h5>
		  <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
		</div>
  
		<!-- Modal body -->
		<div class="modal-body">
			<div class="row">
				<div class="col">
					<input type="text" name="id" class="form-control" placeholder="아이디">
				</div>
			</div>
			<div class="row">
				<div class="col">
					<input type="password" name="pass" class="form-control" placeholder="비번입력">
				</div>
			</div>
			
		</div>
  
		<!-- Modal footer -->
		<div class="modal-footer">
			 
			<button type="submit" class="btn btn-primary">로그인</button> 
			<button type="button" class="btn btn-primary">찾기</button>
			<button type="button" class="btn btn-primary">회원가입</button>

		  	<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
		</div>
  
	  </div>
	</div>
  </div> <!-- The Modal -->
  

	</div> <!--Container-->
