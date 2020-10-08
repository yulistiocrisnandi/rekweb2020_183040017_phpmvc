<div class="container mt-3">
	
	<div class="row">
		<div class="col-6">
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  		Launch demo modal
		</button>

			<br><br>
			<h3>Daftar Mahasiswa</h3>
			<ul class="list-group">
				<?php foreach( $data['mhs'] as $mhs ) : ?>
  				<li class="list-group-item d-flex justify-content-between align-items-center">
  					<?= $mhs['nama']; ?>
  						<a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-primary">detail</a>
  					</li>
  					
  					
  				
  				<?php endforeach; ?>
			</ul>
			
				
			
		</div>
	 </div>

</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>