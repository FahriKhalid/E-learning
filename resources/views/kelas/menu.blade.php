<div class="page-aside bg-grey1">
	<div class="aside-header">
		<a href="../../kelas" class="text-danger"><i class="flaticon-left-arrow-3"></i> KEMBALI</a>
		<br><br>
		<div class="title">Kelas Matematika Rekayasa </div>
		<a class="btn btn-primary toggle-email-nav" data-toggle="collapse" href="#email-app-nav" role="button" aria-expanded="false" aria-controls="email-nav">
			<span class="btn-label">
				<i class="icon-menu"></i>
			</span>
			Menu 
		</a>
	</div>
	<div class="aside-nav collapse" id="email-app-nav">
		<ul class="nav">
			<li class="{{Request::url() == 'http://127.0.0.1:8000/kelas/informasi' ? 'active':''}}">
				<a href="/kelas/informasi">
					<i class="flaticon-chat-2 ml-2"></i> <b>INFORMASI</b>
					<span class="badge badge-danger float-right">!</span>
				</a>
			</li>
			<li class="{{Request::url() == 'http://127.0.0.1:8000/kelas/materi' ? 'active':''}}">
				<a href="/kelas/materi">
					<i class="flaticon-agenda ml-2"></i> <b>MATERI</b>
					<span class="badge badge-primary float-right">20</span>
				</a>
			</li>
			<li class="{{Request::url() == 'http://127.0.0.1:8000/kelas/kuis' ? 'active':''}}">
				<a href="/kelas/kuis">
					<i class="flaticon-stopwatch ml-2"></i> <b>KUIS</b>
					<span class="badge badge-primary float-right">10</span>
				</a>
			</li>
			<li class="{{Request::url() == 'http://127.0.0.1:8000/kelas/mahasiswa' ? 'active':''}}">
				<a href="/kelas/mahasiswa">
					<i class="flaticon-users ml-2"></i> <b>MAHASISWA</b>
					<span class="badge badge-primary float-right">40</span>
				</a>
			</li>
			<li class="{{Request::url() == 'http://127.0.0.1:8000/kelas/tentang' ? 'active':''}}">
				<a href="/kelas/tentang">
					<i class="flaticon-exclamation ml-2"></i> <b>TENTANG</b>
				</a>
			</li>
		</ul>
	</div>
</div>